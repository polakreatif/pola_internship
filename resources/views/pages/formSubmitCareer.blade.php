@extends('layouts.lp')

@section('career')
    <div class="bg-white">
        <div class="container py-5">
            {!! Form::open(['action' => 'SubmitCareerController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group">
                {!! Form::label('nama', 'Nama Lengkap') !!}
                {!! Form::text('nama', '', ['class' => 'form-control','placeholder' => 'Nama Lengkap']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', '', ['class' => 'form-control','placeholder' => 'Email']) !!} 
            </div>
            <div class="form-group">
                {!! Form::label('alamat', 'Alamat') !!}
                {!! Form::textarea('alamat', '', ['class' => 'form-control','placeholder' => 'Alamat : tolong lengkapi dengan kabupaten dan provinsi']) !!} 
            </div>
            <div class="form-group">
                {!! Form::label('pengalaman', 'Pengalaman Kerja') !!}
                {!! Form::textarea('pengalaman', '', ['class' => 'form-control','placeholder' => 'Pengalaman Kerja Photography/Videography']) !!} 
            </div>
            <div class="form-group">
                {!! Form::label('portofolio', 'Portofolio') !!}
                {!! Form::file('portofolio') !!}
                <br><small>File bisa berupa gambar maupun pdf</small>
            </div>
            <div class="form-group">
                {!! Form::label('cv', 'Curriculum Vitae') !!}
                {!! Form::file('cv') !!}
                <br><small>File bisa berupa gambar maupun pdf</small>
            </div>
            {{-- <div class="form-group custom-control custom-switch">
                {!! Form::label('publish', 'Publish Artikel', ['class' => 'switch custom-control-label']) !!}
                {!! Form::checkbox('publish', array(1 => 'true', 0 => 'false'), ['class' => 'form-control']) !!}
            </div> --}}
            {!! Form::submit('Daftar', ['class' => 'btn btn-gradient']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection