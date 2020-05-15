@extends('layouts.dashboard')

@section('content')
    <div class="text-center m-5">
        <h2>Form Portofolio</h2>
    </div>
    <div class="container form">
        {!! Form::open(['action' => ['PortofolioController@update', $portofolio->id_portofolio], 'method' => 'PUT', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group">
                {!! Form::label('judul', 'Judul Portofolio') !!}
                {!! Form::text('judul', $portofolio->judul, ['class' => 'form-control','placeholder' => 'Judul Portofolio']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('teks', 'Kalimat Pendukung') !!}
                {!! Form::textarea('teks', $portofolio->teks, ['class' => 'form-control','placeholder' => 'Masukan text pendukung']) !!} 
            </div>
            <div class="form-group">
                {!! Form::select('publish', [0 => 'Not Publish', 1 => 'Publish'], $portofolio->is_published, ['class' => 'form-control']) !!}
                {{-- {!! Form::checkbox('publish', 1, null) !!}
                {!! Form::label('publish', 'Publish', ['class' => '']) !!} --}}
            </div>
            <div class="form-group">
                {!! Form::label('gambar', 'Gambar Portofolio') !!}
                {!! Form::file('gambar') !!}
                <br><small>Ukuran file maksimal 2mb</small>
            </div>
            {{-- <div class="form-group custom-control custom-switch">
                {!! Form::label('publish', 'Publish Portofolio', ['class' => 'switch custom-control-label']) !!}
                {!! Form::checkbox('publish', array(1 => 'true', 0 => 'false'), ['class' => 'form-control']) !!}
            </div> --}}
            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection