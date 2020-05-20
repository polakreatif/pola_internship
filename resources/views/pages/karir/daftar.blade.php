@extends('layouts.frontend.master')

@section('content')

    <section class="blog-us-details">
        <div class="container">
            <h1>Daftar Pekerjaan</h1>
            <hr class="my-4" id="line-blog">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <div class="row">
              <div class="column-contact-us">
                <img src="{{ asset('/img/daftar.png') }}" style="width:100%">
              </div>
              <div class="column-contact-us">
                {!! Form::open(['action' => ['ViewCareerController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('kode', 'Pekerjaan Yang Anda Inginkan') !!}
                    <select id="kode" name="kode" class="form-control">
                        <option value="{{ $careers->id_career }}">{{ $careers->nama_career }}</option>
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('nama', 'Nama Lengkap') !!}
                    <small style="color: red;">* Harus sesuai dengan KTP</small>
                    {!! Form::text('nama', '', ['class' => 'form-control','placeholder' => 'Nama Lengkap']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email Anda') !!}
                    <small style="color: red;">* Pastikan email anda aktif</small>
                    {!! Form::email('email', '', ['class' => 'form-control','placeholder' => 'Email']) !!} 
                </div>
                <div class="form-group">
                    {!! Form::label('no_hp', 'No Handphone') !!}
                    <small style="color: red;">* Pastikan nomer anda dapat dihubungi</small>
                    {!! Form::text('no_hp', '', ['class' => 'form-control','placeholder' => 'Masukkan nomer handphone yang dapat dihubungi']) !!} 
                </div>
                <div class="form-group">
                    {!! Form::label('gambar', 'Portofolio') !!} 
                    <small style="color: red;">* Hanya dapat menerima .pdf</small>
                    {!! Form::file('gambar') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('cv', 'Curriculum Vitae') !!}
                    <small style="color: red;">* Hanya dapat menerima .pdf</small>
                    {!! Form::file('cv') !!}
                </div>
                {!! Form::submit('Daftar', ['class' => 'btn btn-primary', 'style' => 'float: right;']) !!}
                {!! Form::close() !!}
                </div>
              </div>
            </div>
        </div>
    </section>

@endsection