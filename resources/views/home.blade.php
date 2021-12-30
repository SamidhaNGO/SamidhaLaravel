@extends('layouts.default')
@section('main_container')
@push('stylesheets')
<style>
.carousel-inner img {width: 100%;max-height: 450px;}
</style>
@endpush
@push('scripts')

   <script type="text/javascript">
    $(document).ready(function() {
    if($( document ).width() < 400) {
        $("#samidha-carousel-header .container").css({"display":"none"});
    }
    });
    </script>
    @endpush
	<br>
	<div class="container">
  <div class="container">
    <div class="alert alert-success fade in">
				<p><strong>Samidha</strong> is on a mission to create socially sensible world. Every individual in the society should think about happenings around them, and their personal actions. <strong>Samidha</strong> is building ‘Learning Communities’ of such active citizens in the urban slums and rural area.</p>
		</div>
  </div>
</div>
<!-- Full Page Image Background Carousel Header -->
<header id="samidha-carousel-header" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#samidha-carousel-header" data-slide-to="0" class="active"></li>
      <li data-target="#samidha-carousel-header" data-slide-to="1"></li>
      <li data-target="#samidha-carousel-header" data-slide-to="2"></li>
	  <li data-target="#samidha-carousel-header" data-slide-to="3"></li>
	  <li data-target="#samidha-carousel-header" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active"> <img src="/images/carousel/slide-1.jpg" alt="First slide">
        <div class="container">
         <!-- <div class="carousel-caption">
            <h1>Samidha</h1>
            <span class="badge badge-success" style="color:#72C02C"><h5><strong>Samidha</strong> is on a mission to create socially sensible world.</h5></span>
            <p><br>
           <a class="btn btn-lg btn-primary" href="{{ URL::to('/contactus')}}" role="button">Join Samidha</a></p>
          </div>-->
        </div>
      </div>
      <div class="item"> <img src="/images/carousel/slide-2.jpg" data-src="" alt="Second    slide">
        <div class="container">
          <!--<div class="carousel-caption">
            <h1>Samidha</h1>
            <span class="badge badge-success" style="color:#72C02C"><h5><strong>Samidha</strong> is on a mission to create socially sensible world.</h5></span>
            <p><br>
           <a class="btn btn-lg btn-primary" href="{{ URL::to('/contactus')}}" role="button">Join Samidha</a></p>
          </div>-->
        </div>
      </div>
	   <div class="item"> <img src="/images/carousel/slide-3.jpg" data-src="" alt="Third slide">
        <div class="container">
          <!--<div class="carousel-caption">
            <h1>Samidha</h1>
            <span class="badge badge-success" style="color:#72C02C"><h5><strong>Samidha</strong> is on a mission to create socially sensible world.</h5></span>
            <p><br>
           <a class="btn btn-lg btn-primary" href="{{ URL::to('/contactus')}}" role="button">Join Samidha</a></p>
          </div>-->
        </div>
      </div>
      <div class="item"> <img src="/images/carousel/slide-4.jpg" data-src="" alt="Fourth slide">
        <div class="container">
         <!-- <div class="carousel-caption">
            <h1>Samidha</h1>
            <span class="badge badge-success" style="color:#72C02C"><h5><strong>Samidha</strong> is on a mission to create socially sensible world.</h5></span>
            <p><br>
           <a class="btn btn-lg btn-primary" href="{{ URL::to('/contactus')}}" role="button">Join Samidha</a></p>
          </div>-->
        </div>
      </div>
	  <div class="item"> <img src="/images/carousel/slide-5.jpg" data-src="" alt="Fifth slide">
        <div class="container">
         <!-- <div class="carousel-caption">
            <h1>Samidha</h1>
            <span class="badge badge-success" style="color:#72C02C"><h5><strong>Samidha</strong> is on a mission to create socially sensible world.</h5></span>
            <p><br>
           <a class="btn btn-lg btn-primary" href="{{ URL::to('/contactus')}}" role="button">Join Samidha</a></p>
          </div>-->
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#samidha-carousel-header" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" style="color:#72C02C"></span>
    </a>
    <a class="right carousel-control" href="#samidha-carousel-header" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" style="color:#72C02C" ></span>
    </a>
</header>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
         <!-- <div class="row">
            <h2>About Us</h2>
            <span class="under-line"></span>
            <p>Come Join us in this proud journey and let us all make this world a place of heaven where everyone will understand every social element that one is interacting with, respond it with deep sensation in asserative and creative manner. </br></br>Over the period of decade, Samidha has grown into the matured organization and all Samidhians are fully committed to contribute "Samidha's" of out efforts towards making this world socially sensible.
            </p>
            </br></br>
            
          </div>-->

          <div class="row">
            <h2>Theory of Change</h2>
            <span class="under-line"></span>
            <p class="list-unstyled lists-v2 margin-bottom-30">
           Samidha through experience learned that children can get accustomed to suggested practices easily.
		   They are more open to experimenting and give thought to new ideas. Therefore, Children in the community are primary focus. Samidha treat holistic education (beyond schooling) as tool for transition.
            </p>
          </div>
        </div>
        <!--<div class="col-md-4" id="fixright">
            @include('partials/about-side-coloumn')
        </div>-->
    </div>
</div>
<!--=== Content ===-->
<hr max-width="500 align =left"/>

<div style="background-color:#F7F7F7;">
<div class="container">
	<div class="row">
		<!--<div class="col-md-3 md-margin-bottom-50">
      <br/>
      <img src="/images/images.jpg" alt="Samidha Learning Community Centers (SLCC)" class="img-thumbnail img-responsive" style="min-width: 200px; border:0px;">
		</div>-->
		<div class="col-md-9">
			<div class="headline-left margin-bottom-30">
				<h2 class="headline-brd"><strong>Samidha</strong> Learning Community Centers (SLCC)</h2>
        <hr max-width="500 align =left"/>
			</div>
    </div>
  </div>
<br/>
  <div class="row margin-bottom-30">
    <div class="col-md-4 slcc-box">
          <h4>Children as Responsible Citizens</h4>
          <p><strong>Samidha</strong> is focused towards children. There are three important intervention areas for holistic learning of the children.</p>
          <ul class="list-unstyled lists-v2 margin-bottom-30">
						<li><i class="fa fa-check"></i> Academic Support for children</li>
						<li><i class="fa fa-check"></i> Opportunities for self-actualization</li>
						<li><i class="fa fa-check"></i> Developing Social Sensibility</li>
					</ul>
    </div>
    <div class="col-md-4 slcc-box">
      <h4>Adults as Responsible Citizens</h4>
      <p>Children learn continuously, informally learn in the family and community. Therefore, adults are also essential part of the change process.</p>
      <ul class="list-unstyled lists-v2 margin-bottom-30">
        <li><i class="fa fa-check"></i> Support in occupational growth</li>
        <li><i class="fa fa-check"></i> Opportunities for self-actualization</li>
        <li><i class="fa fa-check"></i> Developing Social Sensibility</li>
        <li><i class="fa fa-check"></i> Developing responsible SMCs </li>
        <li><i class="fa fa-check"></i> Child Friendly Grampanchayat</li>
      </ul>
    </div>
    <div class="col-md-4 slcc-box">
      <h4>Support system for sustaining SLCC</h4>
      <ul class="list-unstyled lists-v2 margin-bottom-30">
        <li><i class="fa fa-check"></i> Adherence to Samidha Values</li>
        <li><i class="fa fa-check"></i> Adhere to Democratic Values</li>
        <li><i class="fa fa-check"></i> Sustainable consumption by minimalistic life style</li>
        <li><i class="fa fa-check"></i> Create Social Security: Commons, Guarantee scheme, SHG</li>
        <li><i class="fa fa-check"></i> Self-reliance for basic needs: Food, Shelter, Cloths</li>
        <li><i class="fa fa-check"></i> Precaution and Pre-work for increasing Happiness Index</li>
      </ul>
    </div>
  </div>
</div><!--/end row-->
<br/>
</div>
<hr max-width="500 align =left"/>
@endsection
