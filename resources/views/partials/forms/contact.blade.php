@push('stylesheets')
    <link href="{{ asset("css/get-in-touch.css") }}"  rel="stylesheet">
@endpush
<div id="contact_form" class="get-in-touch">
    <h3>Get in Touch</h3>
    <span class="under-line"></span>
    <div id="input_contact_form">
    <div class="form-group">
        <input type="text" class="form-control" required=true name="name" id="name" placeholder="Name"/>
        <label for="name" class="error" style="display:none;">sdfsd</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" required=true name="phone" id="phone" placeholder="Phone number"/>
        <label for="phone" class="error" style="display:none;"></label>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" required=true name="email" id="email" placeholder="Email"/>
        <label for="email" class="error" style="display:none;"></label>
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" rows="3" placeholder="Message" required=true></textarea>
        <label for="message" class="error" style="display:none;"></label>
    </div>
    <button id="submit_btn" class="btn btn-danger btn-sm btn-block" role="button">Submit it!</button>
  </div>
</div>
@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() {
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields
        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            $(this).css('border-color','');
              $(this).next().hide().text('');
            if(!$.trim($(this).val())) { //if this field is empty
                $(this).css('border-color','red'); //change border color to red
                var errorMsg = $(this).attr('placeholder') + ' is required field.';
                $(this).next().show().text(errorMsg);
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))) {
                $(this).css('border-color','red'); //change border color to red
                $(this).next().show().text('Please enter a valid email id');
                proceed = false; //set do not proceed flag
            }

            var phone_reg = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if($(this).attr("name")=="phone" && $.trim($(this).val())) {
              if(!phone_reg.test($.trim($(this).val())) || $.trim($(this).val()).length != 10) {
                  $(this).css('border-color','red'); //change border color to red
                  $(this).next().show().text('Please enter a valid phone number');
                  proceed = false; //set do not proceed flag
              }
            }
        });

        if(proceed) //everything looks good! proceed...
        {
          $("#submit_btn").attr('disabled', true);
          $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
            //get input field values data to be sent to server
            var formdata = {
                'name'    : $('input[name=name]').val(),
                'email'   : $('input[name=email]').val(),
                'phone'   : $('input[name=phone]').val(),
                'message' : $('textarea[name=message]').val()
            };

            //Ajax post data to server
            $.ajax({
              url: "/contactus",
              type:'post',
              dataType:'json',
              data : formdata ,
              success: function(){
                var msgHtml = '<br><p><b>Thank you for getting in touch!</b>'+
                        '<br>We appreciate you contacting us.<br> We try to respond as soon as possible,'+
                        'so one of our Samidhians will get back to you within a few hours.'+
                        '<br><b><i>Have a great day ahead!</i></b></p>';
                $("#input_contact_form").html(msgHtml);
              }
            });

        }
    });
});
</script>
@endpush
