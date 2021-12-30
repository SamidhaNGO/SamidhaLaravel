@extends('layouts.default')

@section('main_container')
@push('stylesheets')
<link href="{{ asset("css/our-team.css") }}"  rel="stylesheet">
    <link href="{{ asset("css/social-icon.css") }}"  rel="stylesheet">
@endpush
<div class="container">
  <div class="row">
      <div class="col-md-8 ">
        <div class="meet-our-team">
          <div class="members row-eq-height">
            @foreach($volunteers as $volunteer)
            @if ($profileImage = $volunteer->profile_image ? "/images/profileimages/".$volunteer->profile_image : "/images/dafault-".$volunteer->gender.".jpg")  @endif

            <div class="col-sm-6 col-md-4 col-lg-4">
            <article class="member-article">
            	<div class="member-thumbnail">
            		<a class="member-thumbnail-link" href="#" title="">
            			<img class="wp-post-image" width="158" height="158" src="{{ asset("/images/profileimages/".$volunteer->profile_image)}}"
                  alt="{{$volunteer->first_name}} {{$volunteer->last_name}}" srcset="{{ asset($profileImage)}} 158w, {{ asset($profileImage)}} 150w, {{ asset($profileImage)}} 200w" sizes="(max-width: 158px) 100vw, 158px"/>
            		</a>
            	</div>
            	<div class="member-text-content">
            		<h2 class="member-title">{{$volunteer->first_name}} {{$volunteer->last_name}}</h2>
            			<h3 class="member-position">Volunteer</h3>
            		<hr/>
              <!-- <nav class="nav icon-set">
                  <ul class="nav navbar-nav">
                    <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="instagram"><a href="#" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram fa-lg"></i></a></li>
                    <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin fa-lg"></i></a></li>
                    <!-- <li class="google-plus"><a href="#" data-toggle="tooltip" title="google-plus"><i class="fa fa-google-plus fa-lg"></i></a></li>
                  </ul>
            </nav> -->    
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    			<div class="bcolor">
                    <div class="social-network social-circle bcolor">
                        
                        <a href="https://facebook.com" class="icoFacebook" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/" class="icoLinkedin" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
						
                    </div>	
</div>	
<!--<div class="social">
            <ul class="social_icons text-center">
              <li class="facebook"><a href="#">facebook</a></li>
              <li class="twitter"><a href="#">twitter</a></li>
             <li class="insta"><a href="#">insta</a></li>
             <li class="linkedin"><a href="#">youtube</a></li>
            
         </ul>
     </div>	-->				
				

				
            	</div>
            </article>
            </div>
 @endforeach
          </div>
        </div>
      </div>

      <div class="col-md-4" id="fixright">
       @include('partials/forms/contact', array('label' => 'Get in Touch'))
      </div>
    </div>
</div>

    @push('scripts')
    <script>
    $(document).ready(function() {
      $("#samidhians-dialog").click(function()
          {
              var essay_id = $(this).attr('samidhiansId');
alert(essay_id);
  $('#samidhiansDialog').show();
          });
    } );
    </script>
    @endpush
@endsection
