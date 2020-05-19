@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Artikel</h2>
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
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit</strong> Lowongan Pekerjaan
                                    </div>
                                    <div class="card-body card-block">
                                        {!! Form::open(['action' => ['Admin\CareerController@update', $careers->id_career], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="form-group">
                                                {{ Form::label('jenis',  'Jenis Lowongan') }}
                                                {{ Form::text('jenis', $careers->nama_career, ['class' => 'form-control', 'placeholder' => 'Masukkan jenis lowongan', 'autocomplete' => 'off']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('desc',  'Deskripsi Pekerjaan') }}
                                                {{ Form::textarea('desc', $careers->desc_career, ['id' => 'konten', 'class' => 'form-control', 'placeholder' => 'Masukkan deskripsi pekerjaan']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('status',  'Status Lowongan (Magang / Pegawai Tetap)') }}
                                                {{ Form::text('status', $careers->status, ['class' => 'form-control', 'placeholder' => 'Masukkan status lowongan', 'autocomplete' => 'off']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('lokasi',  'Lokasi Lowongan') }}
                                                {{ Form::text('lokasi', $careers->lokasi_career, ['class' => 'form-control', 'placeholder' => 'Masukkan lokasi lowongan', 'autocomplete' => 'off']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('expired',  'Batas Pendaftaran') }}
                                                {{ Form::date('expired', $careers->apllication_deadline, ['class' => 'form-control', 'placeholder' => 'Masukkan batas lowongan', 'autocomplete' => 'off']) }}
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                                                <a href="javascript:history.go(-1)" title="Back">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6" style="text-align: right;">
                                                {{ Form::hidden('_method', 'PUT') }}
                                                {{ Form::submit('Ubah',  ['class'=>'btn btn-primary']) }}
                                            </div>
                                        </div>
                                    </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')