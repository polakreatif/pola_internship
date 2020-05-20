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
                                        <h2 class="title-1 m-b-25">Data Pendaftar</h2>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="btn btn-info">Terdapat {{ $submites->total() }} pendaftar</p>
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
                                                <th>Nama Pendaftar</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>CV</th>
                                                <th>Portofolio</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($submites as $submit)
                                                <tr>
                                                    <td>{{ $submit->id }}</td>
                                                    <td><a href="{{ url('/admin/submit/' . $submit->id) }}">{{ $submit->nama }}</a></td>
                                                    <td>{!! ($submit->email) !!}</td>
                                                    <td>{!! ($submit->no_hp) !!}</td>
                                                    <td><embed src="/storage/dataPendaftar/{{ $submit->cv }}" type="application/pdf" style="height: 100px; width: 100px;"></td>
                                                    <td><<embed src="/storage/dataPendaftar/portofolio/{{ $submit->gambar }}" type="application/pdf" style="height: 100px; width: 100px;"></td></td>
                                                    <td>
                                                        <a href="{{ url('/admin/submit/' . $submit->id) }}" title="View Artikel"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'url' => ['/admin/submit', $submit->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i>', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-sm',
                                                                    'title' => 'Delete Data Pendaftar',
                                                                    'onclick'=>'return confirm("Apakah kamu yakin mau menghapus pendaftar ini?")'
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