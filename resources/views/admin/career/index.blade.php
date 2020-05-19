@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h2 class="title-1 m-b-25">Lowongan Pekerjaan</h2>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="{{ url('/admin/career/create') }}" title="Back">
                                            <button class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Lowongan</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-12">
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{session('success')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Pekerjaan</th>
                                                <th>Deskripsi Pekerjaan</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Batas Pendaftaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($careers as $career)
                                                <tr>
                                                    <td>{{ $career->id_career }}</td>
                                                    <td><a href="{{ url('/admin/career/' . $career->id_career) }}">{{ $career->nama_career }}</a></td>
                                                    <td>{!! ($career->desc_career) !!}</td>
                                                    <td>{{ $career->status }}</td>
                                                    <td>{{ $career->lokasi_career }}</td>
                                                    <td>{{ $career->apllication_deadline }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/career/' . $career->id_career) }}" title="View Artikel"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                        <a href="{{ url('/admin/career/' . $career->id_career . '/edit') }}" title="Edit Artikel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'url' => ['/admin/career', $career->id_career],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i>', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-sm',
                                                                    'title' => 'Delete Article',
                                                                    'onclick'=>'return confirm("Apakah kamu yakin mau menghapus lowongan ini?")'
                                                            )) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')