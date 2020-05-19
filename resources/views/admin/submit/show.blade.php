@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Data Pendaftar</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Lihat</strong> Data Pendaftar
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-id" class=" form-control-label">Id Pendaftar</label>
                                                <input placeholder="{{ $submites->id }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-nama" class=" form-control-label">Nama Pendaftar</label>
                                                <input placeholder="{{ $submites->nama }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email Pendaftar</label>
                                                <input placeholder="{{ $submites->email }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-no" class=" form-control-label">No Handphone</label>
                                                <input placeholder="{{ $submites->no_hp }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-cv" class=" form-control-label">CV</label><br>
                                                <embed src="/storage/dataPendaftar/{{ $submites->cv }}" type="application/pdf" style="width: 100%; height: 600px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-portofolio" class=" form-control-label">Portofolio</label><br>
                                                <embed src="/storage/dataPendaftar/{{ $submites->gambar }}" type="application/pdf" style="width: 100%; height: 600px;">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-md-12 col-xl-6">
                                                <a href="javascript:history.go(-1)" title="Back">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-sm-12" style="text-align: right;">
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'url' => ['/admin/submit', $submites->id],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                    {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i> Delete', array(
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-danger btn-sm',
                                                            'title' => 'Delete User',
                                                            'onclick'=>'return confirm("Apakah kamu yakin mau menghapus data ini?")'
                                                    ))!!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')