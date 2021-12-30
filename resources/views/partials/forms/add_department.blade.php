
{!! csrf_field() !!}
<div class="panel-body">
  <div class="row">
      <div class="col-lg-6">
        <h2>Personal information</h2>
        <hr>
        <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
          <label>Department Name <small>*</small></label>
            {!! Form::text('department_name', null, ['class' => 'form-control', 'placeholder' => 'enter the department']) !!}
            @if ($errors->has('department_name'))
              <span class="help-block">
                <strong>{{ $errors->first('department_name') }}</strong>
              </span>
            @endif
        </div>

        
    
      <div class="col-lg-12">
           {!! Form::submit($buttonText, ['class' => 'btn btn-primary submit']) !!}
      </div>
  </div>
</div>


