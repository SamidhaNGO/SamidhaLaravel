@extends('layouts.admin')

@section('main_container')
  {!! Form::open(['action' => ['Admin\VolunteersController@updatepassword', $id], 'method' =>'POST']) !!}
  <div class="panel-body">
    <div class="row">
        <div class="col-lg-6">
          {!! csrf_field() !!}
          <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <label>New Password <small>*</small></label>
              {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Enter new password']) !!}
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
          </div>

          <div class="form-group has-feedback{{ $errors->has('confirmed') ? ' has-error' : '' }}">
            <label>Confirm Password <small>*</small></label>
              {!! Form::password('confirmed', null, ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
              @if ($errors->has('confirmed'))
                <span class="help-block">
                  <strong>{{ $errors->first('confirmed') }}</strong>
                </span>
              @endif
          </div>
          <div class="form-grou">
               {!! Form::submit('Reset', ['class' => 'btn btn-primary submit']) !!}
          </div>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
@endsection
