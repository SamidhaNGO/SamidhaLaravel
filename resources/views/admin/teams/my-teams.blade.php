@extends('layouts.admin')

@section('main_container')
@push('stylesheets')
<style>
  .panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}
.actionnavbar a {
  padding: 7px 0 3px;
  text-align: center;
  width: 25%;
  font-size: 17px;
  display: block;
  float: left;
  cursor: pointer;
  background-color: #EDEDED;
}
.actionnavbar a:hover {
  border: 1px solid #374A5E;
}

span.title {
    font-weight:bold;
    word-wrap: break-word;
}
  </style>
<link href="{{ asset("css/our-team.css") }}"  rel="stylesheet">
@endpush
<div class="row">
  <div class="col-lg-12">
    <h2>My Team information</h2>
    <div class = "container">
      <div class="panel-group" id="accordion">
        @forelse($teams as $team)
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$team['id']}}">
            {{$team['name']}}
              @if($team['parent_team'])
              <small style="color:#5CB85C"> <b> Core Team - {{$team['parent_team']}}</b></small>
              @else
              <span class="label label-success">Core Team</span>
              @endif
            </a>
            </h4>
          </div>
          <div id="collapse{{$team['id']}}" class="panel-collapse collapse">
            <div class="panel-body">
              {{$team['description']}}
              <hr>
              <p>Team Members</p>
              <div class="row">
                <div class="meet-our-team">
                  <div class="members row-eq-height">
                @foreach($team['member'] as $member)
                <div class="col-sm-4 col-md-3">
                  <article class="member-article">
                    <div class="member-thumbnail">
                      <span class="member-thumbnail-link">
                        <img class="wp-post-image" width="158" height="158" src="{{asset($member['profile_image'])}}"
                        alt="{{$member['name']}}" srcset="{{asset($member['profile_image'])}} 158w, {{asset($member['profile_image'])}} 150w, {{asset($member['profile_image'])}} 200w" sizes="(max-width: 158px) 100vw, 158px"/>
                      </span>
                    </div>
                    <div class="member-text-content">
                        </br>
                      <span class="title">{{$member['name']}}
                        @if ($userId === $member['id'])
                           (YOU)
                          @endif
                        </span>
                        @if ('Y' === $member['is_teamlead'])
                      </br>
                        <span class="badge" style="font-weight:bold;">Team Lead</span>
                        @endif
                    </div>
                  </article>
                </div>
                @endforeach
              </div>
            </div>
            </div>
            </div>
            <div class="panel-footer">
                <a href="/admin/team/edit/{{$team['id']}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Edit">
                  <span class="glyphicon glyphicon-pencil"></span> Edit
                </a>
            </div>
          </div>
        </div>
        @empty
        <p>There is no team available for you. To add team <a href="/admin/team/add" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Team">
          <span class="glyphicon glyphicon-pencil"></span> Click Here
        </a></p>
        @endforelse
      </div>
    </div> <!-- end container -->
  </div>
</div>
@endsection
