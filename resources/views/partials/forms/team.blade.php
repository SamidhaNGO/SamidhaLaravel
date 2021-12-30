{!! csrf_field() !!}
<div class="panel-body">
  <div class="row">
      <div class="col-lg-6">
        <h2>Team information</h2>
        <hr>
        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
          <label>Team Name <small>*</small></label>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Team Name', ($canEdit == 'N' ? 'readonly' : '')]) !!}
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group has-feedback">
          <label>Core/Parent Team</label>
          {!! Form::select('parent_id', $parentTeam, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group has-feedback{{ $errors->has('description') ? ' has-error' : '' }}">
          <label>Description <small>*</small></label>
            {!! Form::textarea('description',null, ['size' => '10x2', 'class' => 'form-control', 'placeholder' => 'Team Description',  ($canEdit == 'N' ? 'readonly' : '')]) !!}
            @if ($errors->has('description'))
              <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group has-feedback">
          <label>Status</label><br>
          @if ($canEdit == 'N')
          {!! Form::hidden('is_active', $team['is_active']) !!}
          @endif
          <label class="radio-inline">{!! Form::radio('is_active', 'Y', true, [($canEdit == 'N' ? 'disabled' : '')]) !!} Active</label>
          <label class="radio-inline">{!! Form::radio('is_active','N', false, [($canEdit == 'N' ? 'disabled' : '')]) !!} In Active</label>
        </div>
        <hr>
      </div>
      <div class="col-lg-6">
        <h2>Team members</h2>
        <hr>
        <div class="panel-body" style="overflow-y: scroll; height:400px;">
          @foreach($volunteers as $volunteer)
            <div class="row">
              <div class="alert alert-success" role="alert" style="background-color:#E0EDFA; color: #24529B; padding:5px;">
                <b>{{$volunteer->name}}&nbsp;&nbsp;&nbsp;&nbsp;</b>
                <label class="form-check-label" style="color: #73879C;">
                  @if ($canEdit == 'N' && $userId != $volunteer->id && in_array($volunteer->id, $team['member']))
                  {!! Form::hidden('team[]', $volunteer->id) !!}
                  @endif
                  {!! Form::checkbox(
                    'team[]',
                     $volunteer->id,
                     in_array($volunteer->id, $team['member']),
                     ['class' => 'team', ($canEdit == 'N' && $userId != $volunteer->id ? 'disabled' : '')])
                   !!} Team Member
                </label>
                &nbsp;&nbsp;
                <label class="form-check-label" style="color: #73879C;">
                  @if ($canEdit == 'N' && $userId != $volunteer->id && in_array($volunteer->id, $team['lead'])))
                  {!! Form::hidden('lead[]', $volunteer->id) !!}
                  @endif
                  {!! Form::checkbox(
                    'lead[]',
                    $volunteer->id,
                    in_array($volunteer->id, $team['lead']),
                    ['class' => 'lead', ($canEdit == 'N' && $userId != $volunteer->id ? 'disabled' : '')])
                  !!} Team Lead
                </label>
              </div>
            </div>
          @endforeach
      </div><!-- /.col-lg-12 -->
      <hr>
    </div>
    <div class="col-lg-12">
      {!! Form::submit($buttonText, ['class' => 'btn btn-primary submit']) !!}
    </div>
  </div>
</div>

@push('scripts')
  <script>
    $(document).ready(function() {
      $('.lead').change(function() {
        if(true === $(this).is(':checked')) {
          $(':checkbox.team[value='+$(this).val()+']').prop('checked', true);
        }
      });
      $('.team').change(function() {
        if(false === $(this).is(':checked')) {
        $(':checkbox.lead[value='+$(this).val()+']').prop('checked', false);
        }
      });
    })
  </script>
@endpush
