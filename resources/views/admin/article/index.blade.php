@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h2 class="title-1 m-b-25">Artikel</h2>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="{{ url('/admin/article/create') }}" title="Back">
                                            <button class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Article</button>
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
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($articles as $article)
                                                <tr>
                                                    <td>{{ $article->id_artikel }}</td>
                                                    <td><a href="{{ url('/admin/article/' . $article->id) }}">{{ $article->judul }}</a></td>
                                                    <td>{!! ($article->isi) !!}</td>
                                                    <td><img src="/storage/img/article/{{ $article->gambar }}" style="height: 100px; width: 100px;" alt="{{ $article->judul }}"></td>
                                                    <td>@if($article->is_published == 0)
                                                            <p>Telah Diterbitkan</p>
                                                        @else
                                                            <p>Disimpan sebagai draft</p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('/admin/article/' . $article->id_artikel) }}" title="View Artikel"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                        <a href="{{ url('/admin/article/' . $article->id_artikel . '/edit') }}" title="Edit Artikel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'url' => ['/admin/article', $article->id_artikel],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i>', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-sm',
                                                                    'title' => 'Delete Article',
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