@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Lowongan Pekerjaan</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Lihat</strong> Lowongan
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-id" class=" form-control-label">Id Lowongan</label>
                                                <input placeholder="{{ $careers->id_career }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-jenis" class=" form-control-label">Jenis Lowongan</label>
                                                <input placeholder="{{ $careers->nama_career }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-desc" class=" form-control-label">Deskripsi Lowongan</label>
                                                <textarea name="jenis" id="konten" cols="30" rows="10" readonly>{!! $careers->desc_career !!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-status" class=" form-control-label">Status Lowongan</label>
                                                <input placeholder="{{ $careers->status }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-lokasi" class=" form-control-label">Tempat Penempatan</label>
                                                <input placeholder="{{ $careers->lokasi_career }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-lokasi" class=" form-control-label">Batas Pendaftaran</label>
                                                <input placeholder="{{ $careers->apllication_deadline }}" class="form-control" readonly>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-md-12 col-xl-6">
                                                <a href="{{ url('/admin/career') }}" title="Back">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-sm-12" style="text-align: right;">
                                                <a href="{{ url('/admin/career/' . $careers->id . '/edit') }}" title="Edit Career">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                </a>
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'url' => ['/admin/career', $careers->id_career],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                    {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i> Delete', array(
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-danger btn-sm',
                                                            'title' => 'Delete User',
                                                            'onclick'=>'return confirm("Apakah kamu yakin mau menghapus Lowongan ini?")'
                                                    ))!!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')