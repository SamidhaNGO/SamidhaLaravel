@push('stylesheets')
    <link href="{{ asset('css/lib/bootstrap-datepicker3.css') }}"  rel="stylesheet">
@endpush
{!! csrf_field() !!}
<div class="panel-body">
  <div class="row">
      <div class="col-lg-6">
        <h2>Personal information</h2>
        <hr>
        <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
          <label>First Name <small>*</small></label>
            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
            @if ($errors->has('first_name'))
              <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
              </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('last_name') ? ' has-error' : '' }}">
          <label>Last Name <small>*</small></label>
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
            @if ($errors->has('last_name'))
              <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
              </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('dob') ? ' has-error' : '' }}">
          <label>Date of Birth <small>*</small></label>
            {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Date of Birth', 'autocomplete' => 'off']) !!}
            @if ($errors->has('dob'))
              <span class="help-block">
                <strong>{{ $errors->first('dob') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group has-feedback">
          <label>Gender</label><br>
          <label class="radio-inline">{!! Form::radio('gender', 'M', true) !!} Male</label>
          <label class="radio-inline">{!! Form::radio('gender','F') !!}Female</label>
        </div>
        <div class="form-group has-feedback">
          <label>Blood Group</label>
          {!! Form::select('blood_group', [
            'O +ve' => 'O +ve',
            'O -ve' => 'O -ve',
            'A +ve' => 'A +ve',
            'A -ve' => 'A -ve',
            'B +ve' => 'B +ve',
            'B -ve' => 'B -ve',
            'AB +ve' => 'AB +ve',
            'AB -ve' => 'AB -ve'
            ], null, ['class' => 'form-control'])
           !!}
        </div>

        <div class="form-group has-feedback">
          <label>Hobbies</label>
          {!! Form::text('hobbies', null, ['class' => 'form-control', 'placeholder' => 'List of hobbies']) !!}
        </div>

        <div class="form-group has-feedback">
          <label>Address</label>
          {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'address']) !!}
        </div>

        <div class="form-group has-feedback">
          <label>City</label>
          {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
        </div>
        
        <div class="form-group has-feedback">
          <label>State</label>
          {!! Form::select('state', [
            'Andaman and Nicobar Islands' => 'Andaman and Nicobar Islands',
            'Andra Pradesh' => 'Andra Pradesh',
            'Arunachal Pradesh' => 'Arunachal Pradesh',
            'Assam' => 'Assam',
            'Bihar' => 'Bihar',
            'Chandigarh' => 'Chandigarh',
            'Chhattisgarh' => 'Chhattisgarh',
            'Dadar and Nagar Haveli' => 'Dadar and Nagar Haveli',
            'Daman and Diu' => 'Daman and Diu',
            'Delhi' => 'Delhi',
            'Goa' => 'Goa',
            'Gujarat' => 'Gujarat',
            'Haryana' => 'Haryana',
            'Himachal Pradesh' => 'Himachal Pradesh',
            'Jammu and Kashmir' => 'Jammu and Kashmir',
            'Jharkhand' => 'Jharkhand',
            'Karnataka' => 'Karnataka',
            'Kerala' => 'Kerala',
            'Lakshadeep' => 'Lakshadeep',
            'Madya Pradesh' => 'Madya Pradesh',
            'Maharashtra' => 'Maharashtra',
            'Manipur' => 'Manipur',
            'Meghalaya' => 'Meghalaya',
            'Mizoram' => 'Mizoram',
            'Nagaland' => 'Nagaland',
            'Orissa' => 'Orissa',
            'Pondicherry' => 'Pondicherry',
            'Punjab' => 'Punjab',
            'Rajasthan' => 'Rajasthan',
            'Sikkim' => 'Sikkim',
            'Tamil Nadu' => 'Tamil Nadu',
            'Tripura' => 'Tripura',
            'Uttaranchal' => 'Uttaranchal',
            'Uttar Pradesh' => 'Uttar Pradesh',
            'West Bengal' => 'West Bengal'
            ], null, ['class' => 'form-control'])
           !!}
        </div>
        <div class="form-group has-feedback">
          <label>About volunteer</label>
          {!! Form::textarea('about',null,['size' => '10x2', 'class' => 'form-control', 'placeholder' => 'Something about volunteer']) !!}
        </div>

      </div>
      <!-- end of personal information -->

      <div class="col-lg-6">
        <h2>Social information</h2>
        <hr>
        <div class="form-group has-feedback">
          <label>Profile image</label>
            {{ Form::file('profile_image') }}
            @if ($errors->has('profile_image'))
              <span class="help-block">
                <strong>{{ $errors->first('profile_image') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
          <label>Email <small>*</small></label>
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Id']) !!}
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('contact_number') ? ' has-error' : '' }}">
          <label>Contact Number <small>*</small></label>
            {!! Form::text('contact_number', null, ['class' => 'form-control', 'placeholder' => 'Contact Number']) !!}
            @if ($errors->has('contact_number'))
              <span class="help-block">
                <strong>{{ $errors->first('contact_number') }}</strong>
              </span>
            @endif
        </div>

        <div class="form-group has-feedback">
          <label>About Volunteerism</label>
          {!! Form::textarea('about_volunteerism',null,['size' => '10x2', 'class' => 'form-control', 'placeholder' => 'Your thoughts about volunteerism']) !!}
        </div>

        <div class="form-group has-feedback">
          <label>How Would You Like To Contribute</label>
          {!! Form::textarea('how_you_contribute',null,['size' => '10x2', 'class' => 'form-control', 'placeholder' => 'How would you like to contribute']) !!}
        </div>

        <div class="form-group has-feedback">
          <label>Whatsapp Number</label>
          {!! Form::text('whatsapp_number', null, ['class' => 'form-control', 'placeholder' => 'Whatsapp Number']) !!}
        </div>
        <div class="form-group has-feedback">
          <label>Facebook Id</label>
          {!! Form::text('facebook_id', null, ['class' => 'form-control', 'placeholder' => 'Facebook Id']) !!}
        </div>

        <div class="form-group has-feedback">
          <label>Skype Id</label>
          {!! Form::text('skype_id', null, ['class' => 'form-control', 'placeholder' => 'Skype Id']) !!}
        </div>

        <div class="form-group has-feedback">
          <label>Google Plus Id</label>
            {!! Form::text('google_plus_id', null, ['class' => 'form-control', 'placeholder' => 'Google Plus Id']) !!}
        </div>
      </div>
      <hr>
      <div class="col-lg-12">
        <h2>Settings</h2>
        <hr>
        <div class="col-lg-3">
          <label class="form-check-label">{!! Form::checkbox('is_admin', 'Y') !!} Is Admin</label>
        </div>
        <div class="col-lg-3">
          <label class="form-check-label">{!! Form::checkbox('is_active','Y', true) !!} Active User </label>
        </div>
        <div class="col-lg-3">
          <label class="form-check-label">{!! Form::checkbox('is_visible','Y', true) !!} Is Visible To Home Page</label>
        </div>
        <div class="col-lg-3">
          <label class="form-check-label">{!! Form::checkbox('share_whatsapp_number','Y', true) !!} Share Whatsapp Number</label>
        </div>
        <div class="col-lg-3">
          <label class="form-check-label"> {!! Form::checkbox('share_facebook_id','Y', true) !!} Share Facebook Id</label>
        </div>
        <div class="col-lg-3">
          <label class="form-check-label">{!! Form::checkbox('share_skype_id','Y', true) !!} Share Skype Id</label>
        </div>
        <div class="col-lg-3">
          <label class="form-check-label">{!! Form::checkbox('share_google_plus_id','Y', true) !!} Share Google Plus Id</label>
        </div>
      </div>
      <div class="col-lg-12">
           {!! Form::submit($buttonText, ['class' => 'btn btn-primary submit']) !!}
      </div>
  </div>
</div>

@push('scripts')
  <script src="{{ asset("js/lib/bootstrap-datepicker.min.js") }}"></script>
  <script>
  $(document).ready(function(){
		var date_input=$('input[name="dob"]');
  	date_input.datepicker({
			format: 'dd-mm-yyyy',
			todayHighlight: true,
			autoclose: true,
      clearBtn:true,
      endDate:'0d'
		})
	})
  </script>
@endpush
