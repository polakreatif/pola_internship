@extends('layouts.dashboard')

@section('content')
    <div class="text-center m-5">
        <h2>Form Artikel</h2>
    </div>
    <div class="container form">
        {!! Form::open(['action' => ['ArtikelController@update', $artikel->id_artikel], 'method' => 'PUT', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group">
                {!! Form::label('judul', 'Judul Artikel') !!}
                {!! Form::text('judul', $artikel->judul, ['class' => 'form-control','placeholder' => 'Judul Artikel']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('teks', 'Kalimat Pendukung') !!}
                {!! Form::textarea('teks', $artikel->teks, ['class' => 'form-control','placeholder' => 'Masukan text pendukung']) !!} 
            </div>
            <div class="form-group">
                {!! Form::select('publish', [0 => 'Not Publish', 1 => 'Publish'], $artikel->is_published, ['class' => 'form-control']) !!}
                {{-- {!! Form::checkbox('publish', 1, null) !!}
                {!! Form::label('publish', 'Publish', ['class' => '']) !!} --}}
            </div>
            <div class="form-group">
                {!! Form::label('gambar', 'Gambar Artikel') !!}
                {!! Form::file('gambar') !!}
                <br><small>Ukuran file maksimal 2mb</small>
            </div>
            {{-- <div class="form-group custom-control custom-switch">
                {!! Form::label('publish', 'Publish Artikel', ['class' => 'switch custom-control-label']) !!}
                {!! Form::checkbox('publish', array(1 => 'true', 0 => 'false'), ['class' => 'form-control']) !!}
            </div> --}}
            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection