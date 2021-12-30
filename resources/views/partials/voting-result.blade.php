@push('stylesheets')
<style>
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% { opacity: 0; }
}
.blink_it{
  animation: blinker 2s linear infinite;
}
</style>
@endpush
<div class="row">
  <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
        <span style="color:#54CC33; font-size:17px; font-family:Georgia"><b>Win or lose, all candidates deserve congratulations.
          We all trust you and your powers, we are sure that you are going to be a great leader.
           We wish you all the best for your future.<span style="color:#FF6600;font-weight:bold" class="blink_it"> Congratulations!</span></b>
       </span>
      </div>
      <div class="panel-body" style="overflow-y: scroll; height:500px;">
        @foreach($volunteers as $volunteer)
         @if ($profileImage = $volunteer->profile_image ? "/images/profileimages/".$volunteer->profile_image : "/images/dafault-".$volunteer->gender.".jpg")  @endif
          <div class="row" style="padding-top: 15px;background:#F1F1F1">
            <div class="col-md-1">
              <span style="color:#003399;font-weight:bold;">#{{++$loop->index}}</span>
            </div>
              <div class="col-md-3">
              <img class="img-circle" width="100" height="100" src="{{ asset($profileImage)}}" alt="{{$volunteer->first_name}} {{$volunteer->last_name}}" />
              </div>
              <div class="col-md-8">
                <p><span style="color:#990000;font-weight:bold">Name : </span><span style="color:#FF6600;font-weight:bold">{{$volunteer->first_name}} {{$volunteer->last_name}}</span><p>
                <p><span style="color:#990000;font-weight:bold">Contact Number :  </span><span style="color:#FF6600;font-weight:bold">{{$volunteer->contact_number}}</span></p>
                <p><span style="color:#990000;font-weight:bold">City : </span><span style="color:#FF6600;font-weight:bold"> {{$volunteer->city}}</span></p>
                <p><span style="color:#990000;font-weight:bold">Vote : </span><span style="color:#33CC33;font-weight:bold;font-size:20px"> {{$volunteer->vote}}</span> Out of <span style="color:#33CC33;font-weight:bold;font-size:20px">{{$count}}</span></p>
              </div>
            </div>
          </br>
          @endforeach
      </div><!-- /.col-lg-12 -->
      </div>
      </div>
      <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>
        </div>
        @push('scripts')
        <script src="{{ asset("js/lib/jquery.canvasjs.min.js") }}"></script>
        <script>
        $(function() {
        	$(".chartContainer").CanvasJSChart({
        		title: {
        			text: "Samidha trustee election - 2017"
        		},
        		axisY: {
        			title: "Number of votes",
        			includeZero: false
        		},
        		axisX: {
        			interval: 1
        		},
        		data: [
        		{
        			type: "line", //try changing to column, area
        			toolTipContent: "{label}: {y} vote",
        			dataPoints: [
                  @foreach($volunteers as $volunteer)
        				{ label: "{{$volunteer->first_name}} {{$volunteer->last_name}}",  y:{{$volunteer->vote}} },
                @endforeach
        			]
        		}
        		]
        	});
        });
        </script>
        @endpush
    </div><!-- /.row -->
