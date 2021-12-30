@extends('layouts.admin')

@section('main_container')
{!! Form::model($department, ['method' => 'POST', ' enctype' => 'multipart/form-data', 'action' => ['Admin\DepartmentController@update',$department->id]]) !!}
    @include('partials/forms/add_department', ['buttonText' => 'update department'])
  {!! Form::close() !!}

@endsection
