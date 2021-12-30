@extends('layouts.admin')

@section('main_container')
{!! Form::model($volunteer, ['method' => 'POST', ' enctype' => 'multipart/form-data', 'action' => ['Admin\VolunteersController@update',$volunteer->id]]) !!}
    @include('partials/forms/register', ['buttonText' => 'update profile'])
  {!! Form::close() !!}

@endsection
