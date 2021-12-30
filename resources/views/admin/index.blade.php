@extends('layouts.admin')

@section('main_container')
<div role="main">
  <br />
  <div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="count">{{$userData->volunteersCnt}}</div>
          <h3>Our Volunteers</h3>
          <p class="text-right"><a href="/admin/volunteers">View more <i class="fa fa-angle-right"></i></a> &nbsp;</p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-birthday-cake"></i></div>
          <div class="count">{{$userData->bithCntOfMonth}}</div>
          <h3>Birthday in {{ date('M.') }}</h3>
          <p class="text-right"><a href="/admin/notifications">View more <i class="fa fa-angle-right"></i></a> &nbsp;</p>
        </div>
      </div>
      <!--
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="count">179</div>
          <h3>New Sign ups</h3>
          <p class="text-right"><a href="">View more <i class="fa fa-angle-right"></i></a> &nbsp;</p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-check-square-o"></i></div>
          <div class="count">179</div>
          <h3>New Sign ups</h3>
          <p>Lorem ipsum psdea itgum rixt.</p>
        </div>
      </div>
    -->
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Upcoming Birthdays</h2>
            <ul class="nav navbar-right panel_toolbox" style="min-width: 0px;">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            @foreach($volunteers AS $volunteer)
            <article class="media event">
              <a class="pull-left date">
                <p class="month">{{date('M', strtotime($volunteer->dob))}}</p>
                <p class="day">{{date('d', strtotime($volunteer->dob))}}</p>
              </a>
              @if (date("m-d") == date("m-d", strtotime($volunteer->dob)))
              <div class="icon pull-right"><i class="fa fa-birthday-cake fa-3x" style="color: #0099CC;"></i></div>
              @endif
              @if ($userId != $volunteer->id)
              <div class="media-body">
                <a class="title" href="#">{{$volunteer->name}}</a>
                <br><br>
                <p><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; {{$volunteer->contact_number}} &nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a href="mailto:{{$volunteer->email}}">{{$volunteer->email}}</a></p>
              </div>
              @else
              <div class="media-body">
                <a class="title" href="#">Heyy {{$volunteer->name}}</a>
                @if (date("m-d") == date("m-d", strtotime($volunteer->dob)))
                <p>Count your blessings day by day and you will realize that it is more than the years of your life. Have a great Birthday!</p>
                @else
                <p>Who says birthday must celebrated for just one day? Let’s start the party right now! Advance happy birthday!</p>
                @endif
              </div>
              @endif
              <hr>
            </article>
             @endforeach
          </div>
        </div>
      </div>
<!--
      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Top Profiles <small>Sessions</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item One Tittle</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    -->
    </div>
  </div>
</div>
@endsection
