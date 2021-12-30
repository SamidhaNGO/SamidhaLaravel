@extends('layouts.default')

@section('main_container')
@push('stylesheets')
<link href="{{ asset("css/our-team.css") }}"  rel="stylesheet">
    <link href="{{ asset("css/social-icon.css") }}"  rel="stylesheet">
    <style>
.li-disabled {
    pointer-events:none;
    opacity:0.6;
}
</style>
@endpush
<div class="container">
  <div class="row">
      <div class="col-md-12 ">
          <h2>Meet the Samidhians</h2>
          <span class="under-line"></span>
        <div class="meet-our-team">
          <div class="members row-eq-height">
            @foreach($volunteers as $volunteer)
            @if ($profileImage = $volunteer->profile_image ? "/images/profileimages/".$volunteer->profile_image : "/images/dafault-".$volunteer->gender.".jpg")  @endif

            <div class="col-sm-6 col-md-3 col-lg-3">
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
            			   <!--
            		<hr/>

			<div class="bcolor">
                    <div class="social-network social-circle bcolor">
                        
                        <a href="https://facebook.com" class="li-disabled icoFacebook" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/" class="icoLinkedin" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        
                        <a href="https://www.linkedin.com/" class="icoLinkedin" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
						
                    </div>
                    
</div>	 -->
            	</div>
            </article>
            </div>
 @endforeach
          </div>
        </div>
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
