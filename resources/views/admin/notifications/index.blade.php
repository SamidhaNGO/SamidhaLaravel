@extends('layouts.admin')

@section('main_container')

<div class="row">
  <div class="col-lg-12">
    <h2>Notifications</h2>
    <div class = "container">
      <div class="panel-group" id="accordion">
        @foreach($volunteers AS $month =>  $volArray)
         <div class="panel panel-warning">
           <div class="panel-heading">
             <h4 class="panel-title">
               <a data-toggle="collapse" data-parent="#accordion" href="#{{ date("F", mktime(0, 0, 0, $month, 1)) }}">List of birth day in {{ date("F", mktime(0, 0, 0, $month, 1)) }}</a>
             </h4>
           </div>
           <div id="{{ date("F", mktime(0, 0, 0, $month, 1)) }}" class="panel-collapse collapse @if ($loop->first)in @endif">
               <ul class="list-group">
               @foreach($volArray as $volunteer)
                   <li class="list-group-item  @if ($volunteer['istoday'] == 'Y')alert-info @endif">
                   <a href="javascript:;"  class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       <img src="{{asset($volunteer['profile_image'])}}" alt="Avatar of ">
                       <span class="badge">{{date('F,d', strtotime($volunteer['dob']))}}</span> {{$volunteer['name']}} {{$volunteer['email']}}
                        @if ($volunteer['istoday'] == 'Y')
                        <i class="fa fa-birthday-cake"></i>
                        @endif
                   </a>
                   </li>
                 @endforeach
               </ul>
           </div>
         </div>
          @endforeach
       </div>
    </div> <!-- end container -->
  </div>
</div>

@endsection
