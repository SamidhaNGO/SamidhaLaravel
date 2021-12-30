<div class="panel panel-default counter" style="max-width:40%; margin-top:20%; margin-left:30%; margin-right:auto;">
  <div class="panel-heading">
    <h3 style="color: #2C2C2C;">Thanks for your patient, voting will be start very shortly</h3>
  </div>
  <div class="panel-body">
    <div id="getting-started">
     <span id="hours" ></span><span id="minutes"></span><span id="seconds"></span>
    </div>
</div>
@push('stylesheets')
<style>
.counter {
  background: #2C2C2C;
  -moz-box-shadow:    inset 0 0 5px #000000;
  -webkit-box-shadow: inset 0 0 5px #000000;
  box-shadow:         inset 0 0 5px #000000;
  min-height: 150px;
  text-align: center;
}

.counter h3 {
  color: #E5E5E5;
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: lighter;
  letter-spacing: 1px;
  padding-top: 20px;
  margin-bottom: 30px;
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
      $("#getting-started").countdown("2017/04/30 10:00:00",
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
