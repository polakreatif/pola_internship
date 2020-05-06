@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="javascript:history.go(-1)" title="Kembali">
                                            <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-8">
                                        <h2 class="title-1 m-b-25">Tambah Pengguna</h2>
                                    </div>
                                </div>
                                <div class="card">
                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <div class="card-body card-block">
                                        @include ('admin.users.form', ['formMode' => 'create'])
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')