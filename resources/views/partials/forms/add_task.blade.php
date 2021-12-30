
{!! csrf_field() !!}
<div class="panel-body">
  <div class="row">
      <div class="col-lg-6">
        <h2>Personal information</h2>
        <hr>
        <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
          <label>Task Name <small>*</small></label>
            {!! Form::text('task_name', null, ['class' => 'form-control', 'placeholder' => 'enter the Task']) !!}
            @if ($errors->has('task_name'))
              <span class="help-block">
                <strong>{{ $errors->first('task_name') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group has-feedback{{ $errors->has('department_id') ? ' has-error' : '' }}">
          <label>Department Name <small>*</small></label>
            {!! Form::select('department_id',[
              foreach($department as $list)
              
                '$list->id' => '$list->department_name',
              
              endforeach
              ], null, ['class' => 'form-control']) !!}
            @if ($errors->has('department_id))
              <span class="help-block">
                <strong>{{ $errors->first('department_id') }}</strong>
              </span>
            @endif
        </div>

        
    
      <div class="col-lg-12">
           {!! Form::submit($buttonText, ['class' => 'btn btn-primary submit']) !!}
      </div>
  </div>
</div>


