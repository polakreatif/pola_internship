@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Detail Perusahaan</h2>
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
                                        <strong>Edit</strong> Detail Perusahaan
                                    </div>
                                    <div class="card-body card-block">
                                        {!! Form::open(['action' => ['Admin\CompanyController@update', $companies->id_company], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="form-group">
                                                {{ Form::label('nama_company', 'Nama Perusahaan') }}
                                                {{ Form::text('nama_company', $companies->nama_company, ['class' => 'form-control', 'placeholder' => 'Masukkan nama perusahaan', 'autocomplete' => 'off']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('slogan', 'Slogan Perusahaan') }}
                                                {{ Form::text('slogan', $companies->slogan, ['class' => 'form-control', 'placeholder' => 'Masukkan slogan perusahaan']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('about', 'Tentang Perusahaan') }}
                                                {{ Form::textarea('about', $companies->about, ['id' => 'konten', 'class' => 'form-control', 'placeholder' => 'Masukkan tentang perusahaan']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('whatsapp', 'Nomer Whatsapp (bila tidak ada, silahkan tulis "#")') }}
                                                {{ Form::text('whatsapp', $companies->whatsapp, ['class' => 'form-control', 'placeholder' => 'Contoh : 6281234567890']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('instagram', 'Masukkan Username Instagram (bila tidak ada, silahkan tulis "#")') }}
                                                {{ Form::text('instagram', $companies->instagram, ['class' => 'form-control', 'placeholder' => 'Contoh : insmed']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('facebook', 'Masukkan Username Fanspage Facebook (bila tidak ada, silahkan tulis "#")') }}
                                                {{ Form::text('facebook', $companies->facebook, ['class' => 'form-control', 'placeholder' => 'Contoh : insmed']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('twitter', 'Masukkan Username Twitter (bila tidak ada, silahkan tulis "#")') }}
                                                {{ Form::text('twitter', $companies->twitter, ['class' => 'form-control', 'placeholder' => 'Contoh : insmed']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('youtube', 'Masukkan Channel Youtube (bila tidak ada, silahkan tulis "#")') }}
                                                {{ Form::text('youtube', $companies->youtube, ['class' => 'form-control', 'placeholder' => 'Contoh : insmed']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('logo', 'Logo Perusahaan') }}<br>
                                                {{ Form::file('logo') }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('about_image', 'About Images') }}<br>
                                                {{ Form::file('about_image') }}
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