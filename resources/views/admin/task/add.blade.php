@extends('layouts.admin')

@section('main_container')

  {!! Form::model($department,['action' => 'Admin\TaskController@store', ' enctype' => 'multipart/form-data', 'method' =>'POST']) !!}
    @include('partials/forms/add_task', ['buttonText' => 'Submit'])
  {!! Form::close() !!}



@endsection