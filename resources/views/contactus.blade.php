@extends('layouts.default')

@section('main_container')
@push('stylesheets')
<style>
#samidhaMap{
    height: 0;
    padding-bottom: 33%;
}
</style>
@endpush
<div id="samidhaMap"></div>
<div class="container">
	<div class="row">
    <br>
			<div class="col-12 col-lg-8">
        <h3 class="">
  				<i class="icon-envelope main-color"></i>How to reach us
  			</h3>
  			<span class="under-line"></span>
        <br>
        <div class="col-lg-6">
				<div class="panel">
					<div class="panel-heading">
						<h4><i class="icon-pushpin main-color"></i>1 Official Communication</h4>
						<span class="under-line"></span>
					</div>
					<div class="panel-body" style="margin-top: -20px;">
						<address class="md-margin-bottom-40">
  						Samidha Bahuddeshiya Sanstha <br />
  						C/o Sachin Mohan Mohite,<br />
              C602, Chandralok Nagari, Opp Muktai Garden<br />
              Dhayari, Pune 411 041.<br />
  						Phone: (+91) 93727 44039 <br />
  						Maharashtra, India.
						</address>
					</div>
				</div>
      </div>
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h4><i class="icon-pushpin main-color"></i>2. Pune Center</h4>
            <span class="under-line"></span>
          </div>
          <div class="panel-body" style="margin-top: -20px;">
            <address class="md-margin-bottom-40">
        			<b>Samidha Bahuddeshiya Sanstha </b><br />
        			Muktachhand(Samidha),<br />
        			C/o, Balaji Jadhvar,<br />
        			Mauli Raddi Depot, Gasavi Wasti,<br>
        			Lane from ThatBat Hotel, Near Happy Colony,<br>
        			Karve Nagar, Pune 411 052.<br />
        			Email: <a href="mailto:helping2help@samidha.org" class="">helping2help@samidha.org</a>
        		</address>
          </div>
        </div>
      </div>
        <div class="col-lg-6">
        <div class="panel" style="margin-top: -20px;">
          <div class="panel-heading">
            <h4><i class="icon-pushpin main-color"></i>3 Nagpur Center</h4>
            <span class="under-line"></span>
          </div>
          <div class="panel-body">
            <address class="md-margin-bottom-40">
              <b>Samidha Learning-Community Center </b><br />
          			ZP Primary School,<br />
          			Maragsur,Post Metpanjara,<br />
          			Taluka Katol, Dist Nagpur,<br>
          			Maharashtra, India.<br />
                Email: <a href="mailto:helping2help@samidha.org" class="">helping2help@samidha.org</a>
            </address>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h4><i class="icon-pushpin main-color"></i>4 Samidha Nagpur Residence</h4>
            <span class="under-line"></span>
          </div>
          <div class="panel-body" style="margin-top: -20px;">
            <address class="md-margin-bottom-40">
              <b>"Vihang" Samidha Farms</b><br />
                Maragsur,Post Metpanjara,<br />
                Taluka Katol, Dist Nagpur,<br>
                Maharashtra, India.<br />
                Email: <a href="mailto:helping2help@samidha.org" class="">helping2help@samidha.org</a>
            </address>
          </div>
        </div>
      </div>
			</div>
       <div class="col-12 col-lg-4" id="fixright">
          @include('partials/forms/contact')
		</div>
  </div>
</div> <!-- /container -->

@push('scripts')
<!-- gMap PLUGIN -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnZ_lV6N5NQrOcbahXr3hEIOB-IolfDss&callback=initializemap" type="text/javascript"></script>

<script type="text/javascript">
      var map;
      function initializemap() {
				var map = new google.maps.Map(document.getElementById('samidhaMap'), {
				 zoom: 7,
				 center: {lat:20.388794, lng: 78.120407},
			 });
			 setMarkers(map);
		}
		var locations = [
			['Pune center', 18.4955635, 73.8155826, 2],
			['Nagpur center', 21.2064361, 78.7069773, 1]
		];

    var pune_center = '<div class="media" style="width:360px"><br>'+
      	'<img class="media-object pull-left" src="logo.png" style="max-hight:150px; max-width:150px">'+
      	'<div class="media-body">'+
      	 	'<address class="md-margin-bottom-40">'+
      			'<b>Samidha Bahuddeshiya Sanstha </b><br />'+
      			'Muktachhand(Samidha),<br />'+
      			'C/O, Balaji Jadhvar,<br />'+
      			'Mauli Raddi Depot, Gasavi Wasti,<br>'+
      			'Lane from ThatBat Hotel, Near Happy Colony,<br>'+
      			'Karve Nagar, Pune 411 052.<br />'+
      			'Email: <a href="mailto:helping2help@samidha.org" class="">helping2help@samidha.org</a>'+
      		'</address>'+
      	'</div>'+
      '</div>';
  var nagpur_center = '<div class="media" style="width:360px"><br>'+
  	'<img class="media-object pull-left" src="logo.png" style="max-hight:150px; max-width:150px">'+
  	'<div class="media-body">'+
  	 	'<address class="md-margin-bottom-40">'+
  			'<b>Samidha Learning-Community Center </b><br />'+
  			'ZP Primary School,<br />'+
  			'Maragsur,Post Metpanjara,<br />'+
  			'Taluka Katol, Dist Nagpur,<br>'+
  			'Maharashtra, India.<br />'+
  			'Email: <a href="mailto:helping2help@samidha.org" class="">helping2help@samidha.org</a>'+
  		'</address>'+
  	'</div>'+
  '</div>';
var addresses = [pune_center, nagpur_center];

		var marker, i;
		function setMarkers(map) {
			//Create and open InfoWindow.
        var infoWindow = new google.maps.InfoWindow();
				for (i = 0; i < locations.length; i++) {
					var location = locations[i];
          var address = addresses[i];
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(location[1], location[2]),
						map: map,
						title: location[0],
						zIndex: location[3]
					});

					//Attach click event to the marker.
          (function (marker, address) {
              google.maps.event.addListener(marker, "click", function (e) {
                  infoWindow.setContent(address);
                  infoWindow.open(map, marker);
              });
          })(marker, address);
			}
		}
    </script>
  @endpush
@endsection
