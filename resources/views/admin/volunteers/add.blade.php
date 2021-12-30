@extends('layouts.admin')

@section('main_container')

  {!! Form::open(['action' => 'Admin\VolunteersController@store', ' enctype' => 'multipart/form-data', 'method' =>'POST']) !!}
    @include('partials/forms/register', ['buttonText' => 'Register'])
  {!! Form::close() !!}

@endsection
