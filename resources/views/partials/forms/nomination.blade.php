<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
  <div class="panel-body">
     <h2>Want to nominate yourself for trustee candidate</h2>
     <div class="form-group has-feedback{{ $errors->has('nomination') ? ' has-error' : '' }}">
     <div>
        <label><input name="nomination" type="radio" aria-label="Yes" value="Y" @if(old('nomination') === 'Y' || $nomination['status'] === 'Y') checked @endif> Yes<label>
      </div>
    <div>
     <label><input name="nomination" type="radio" aria-label="No" value="N" @if(old('nomination') === 'N'  || $nomination['status'] === 'N') checked @endif> No</label>
   </div>
   @if ($errors->has('nomination'))
     <span class="help-block">
       <strong>{{ $errors->first('nomination') }}</strong>
     </span>
   @endif
     <div>
    </div>
    <button class="btn btn-success submit">Submit!</button>
  </div>
  </div>
</div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
