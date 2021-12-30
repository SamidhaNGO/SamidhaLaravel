<div class="row">
  <div class="col-lg-12">
  @if ($errors->any())
       <div class="has-error">
      <span class="help-block">
        @foreach($errors->all() as $error)
        <strong >{{ $error }}</strong><br>
        @endforeach
      </span>
    </div>
    @endif
      <div class="panel panel-default">
        <div class="panel-heading">
        <h2>Total number of nominations for samidha trustee: {{count($volunteers)}}</h2>
        <h4>{!! Form::submit($buttonText, ['class' => 'btn btn-primary submit', 'data-toggle' => 'tooltip', 'title' => 'Please select candidate before submit!']) !!} You have select <span id="candidatesCnt">{{count($voting['candidates'])}}</span> candidates
          <div id="getting-started" class="counter">
            <h3>Time left
           <span id="hours" ></span><span id="minutes"></span><span id="seconds"></span></h3>
          </div>
        </h4>
        @push('stylesheets')
        <style>
        .counter {
          background: #2C2C2C;
          -moz-box-shadow:    inset 0 0 5px #000000;
          -webkit-box-shadow: inset 0 0 5px #000000;
          box-shadow:         inset 0 0 5px #000000;
          min-height: 30px;
          text-align: center;
        }

        .counter h3 {
          color: #E5E5E5;
          font-size: 14px;
          font-style: normal;
          font-variant: normal;
          font-weight: lighter;
          letter-spacing: 1px;
        }

        #countdown {
          color: #FFFFFF;
        }

        #getting-started span {
          color: #E5E5E5;
          font-size: 26px;
          font-weight: normal;
          margin-left: 20px;
          margin-right: 20px;
          text-align: center;
        }
        </style>
        @endpush
        @push('scripts')
        <script src="{{ asset("js/lib/jquery.countdown.min.js") }}"></script>
          <script>
            $(document).ready(function() {
              $("#getting-started").countdown("2017/05/01 11:59:59",
              function(event) {
                $('#hours').html(
                  event.strftime('%H') + ' Hrs'
                );
                $('#minutes').html(
                  event.strftime('%M') + ' Min'
                );
                $('#seconds').html(
                  event.strftime('%S') + ' Sec'
                );
              });
            })
          </script>
        @endpush
          <div class="input-group">
            <span class="input-group-addon">
              NOTA
            </span>
            <span class="input-group-addon">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::checkbox('nota', 'Y', $voting['nota'], ['id' => 'notaChkBox']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span>
            <textarea class="form-control" readonly>As of now NOTA is only symbolic. Any number (percentage) of votes in NOTA does not affect results of election, I mean though NOTA got majority of vote then also it will not have any impact on candidate who won the election.

ie if out 100 votes, NOTA got 60, candidate A got 30 and other candidates got totally 10 votes then candidate A will be announced as winner.</textarea>
          </div>
      </div>

      <div class="panel-body" style="overflow-y: scroll; height:400px;">
        @foreach($volunteers as $volunteer)
         @if ($profileImage = $volunteer->profile_image ? "/images/profileimages/".$volunteer->profile_image : "/images/dafault-".$volunteer->gender.".jpg")  @endif
          <div class="row">
            <div class="col-md-1">
              #{{++$loop->index}}
            </div>
            <div class="col-lg-1">
              <label class="form-check-label">
                {!! Form::checkbox('candidates[]', $volunteer->nominationId, in_array($volunteer->nominationId, $voting['candidates']), ['class' => 'candidates',  ($voting['nota'] === true ? 'disabled' : '')]) !!}</label>
            </div>
              <div class="col-md-2">
              <img class="img-circle" width="100" height="100" src="{{ asset($profileImage)}}" alt="{{$volunteer->first_name}} {{$volunteer->last_name}}" />
              </div>
              <div class="col-md-8">
                <p>Name : {{$volunteer->first_name}} {{$volunteer->last_name}}<p>
                <p>Number :  {{$volunteer->contact_number}}</p>
                <p>About :  {{$volunteer->about}}</p>
              </div>
            </div>
            <hr>
          @endforeach
      </div><!-- /.col-lg-12 -->
      </div>
      </div>
    </div><!-- /.row -->
@push('scripts')
  <script>
    $(document).ready(function() {
      $(':input[type="submit"]').prop('disabled', true);
      $('#notaChkBox').change(function() {
        if(true === $(this).is(':checked')) {
          $('.candidates').prop('disabled', true);
          $('#candidatesCnt').html('0');
           $(':input[type="submit"]').prop('disabled', false);
        } else {
          $('.candidates').prop('disabled', false);
          var candidatesCnt = $('.candidates:checked').size();
          $('#candidatesCnt').html(candidatesCnt);
          $(':input[type="submit"]').prop('disabled', true);
          if (candidatesCnt > 0) {
            $(':input[type="submit"]').prop('disabled', false);
          }
        }
      });
      $('.candidates').change(function() {
        if(true === $(this).is(':checked')) {
          if($('.candidates:checked').size() > 7) {
            $(this).attr('checked', false);
            alert('Sorry, you can not select more then 7 candidates');
          }
        }
        var candidatesCnt = $('.candidates:checked').size();
        $('#candidatesCnt').html(candidatesCnt);
        $(':input[type="submit"]').prop('disabled', true);
        if (candidatesCnt > 0) {
          $(':input[type="submit"]').prop('disabled', false);
        }
      });

    })
  </script>
@endpush
