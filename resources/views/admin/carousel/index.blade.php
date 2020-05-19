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
                                        <h2 class="title-1 m-b-25">Carousel</h2>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="{{ url('/admin/carousel/create') }}" title="Back">
                                            <button class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Carousel</button>
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
                                                <th>Nama</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($carousels as $carousel)
                                                <tr>
                                                    <td>{{ $carousel->id }}</td>
                                                    <td><a href="{{ url('/admin/carousel/' . $carousel->id) }}">{{ $carousel->nama }}</a></td>
                                                    <td><img src="/storage/img/carousel/{{ $carousel->gambar }}" style="height: 100px; width: 100px;" alt="{{ $carousel->nama }}"></td>
                                                    <td>
                                                        <a href="{{ url('/admin/carousel/' . $carousel->id . '/edit') }}" title="Edit Artikel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'url' => ['/admin/carousel', $carousel->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i>', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-sm',
                                                                    'title' => 'Delete carousel',
                                                                    'onclick'=>'return confirm("Apakah kamu yakin mau menghapus artikel ini?")'
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