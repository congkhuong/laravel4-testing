<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
    {{ Form::text('title', null, ['class' => 'form-control']); }}
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
    {{ Form::textarea('description', null, ['class' => 'form-control']); }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-default">Kun</button>
</div>
