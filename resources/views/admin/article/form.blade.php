<div class="form-group{{ $errors->has('judul') ? ' has-error' : ''}}">
    {!! Form::label('judul', 'Judul Article : ', ['class' => 'control-label']) !!}
    {!! Form::text('judul', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('isi') ? ' has-error' : ''}}">
    {!! Form::label('isi', 'Isi Article : ', ['class' => 'control-label']) !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('isi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('gambar') ? ' has-error' : ''}}">
    {!! Form::label('gambar', 'Silahkan upload gambar (Link) : ', ['class' => 'control-label']) !!}
    {!! Form::text('gambar', null, ['class' => 'form-control']) !!}
    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
