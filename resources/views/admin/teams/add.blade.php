@extends('layouts.admin')

@section('main_container')

  {!! Form::open(['action' => 'Admin\TeamsController@store', 'method' =>'POST']) !!}
    @include('partials/forms/team', ['buttonText' => 'Create'])
  {!! Form::close() !!}

@endsection
