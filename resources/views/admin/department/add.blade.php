@extends('layouts.admin')

@section('main_container')

  {!! Form::open(['action' => 'Admin\DepartmentController@store', ' enctype' => 'multipart/form-data', 'method' =>'POST']) !!}
    @include('partials/forms/add_department', ['buttonText' => 'Submit'])
  {!! Form::close() !!}

@endsection