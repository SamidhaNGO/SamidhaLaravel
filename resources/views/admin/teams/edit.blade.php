@extends('layouts.admin')

@section('main_container')
{!! Form::model($team, ['method' => 'POST', 'action' => ['Admin\TeamsController@update',$team->id]]) !!}
    @include('partials/forms/team', ['buttonText' => 'Update team'])
  {!! Form::close() !!}

@endsection
