@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    @if($jumbotrons->isNotEmpty())
                                        <div class="col-lg-9">
                                            <h2 class="title-1 m-b-25">Jumbotron</h2>
                                        </div>
                                    @else
                                        <div class="col-lg-9">
                                            <h2 class="title-1 m-b-25">Jumbotron</h2>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="{{ url('/admin/jumbotron/create') }}" title="Back">
                                                <button class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Jumbotron</button>
                                            </a>
                                        </div>
                                    @endif
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
                                                <th></th>
                                                <th>Informasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($jumbotrons as $jumbotron)
                                                <tr>
                                                    <th>ID</th>
                                                    <td>{{ $jumbotron->id_jumbo }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Header</th>
                                                    <td><a href="{{ url('/admin/jumbotron/' . $jumbotron->id) }}">{{ $jumbotron->header }}</a></td>
                                                </tr>
                                                <tr>
                                                    <th>Konten</th>
                                                    <td>{!! ($jumbotron->konten) !!}</td>
                                                </tr>
                                                <tr>
                                                    <th>Link</th>
                                                    <td>{{ ($jumbotron->link) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gambar Jumbotron</th>
                                                    <td><img src="/storage/img/jumbotron/{{ $jumbotron->gambar_jumbo }}" style="height: 250px; width: 250px;" alt="{{ $jumbotron->header }}"></td>
                                                </tr>
                                                <tr>                                                
                                                    <th>Gambar Background</th>
                                                    <td><img src="/storage/img/jumbotron/{{ $jumbotron->background }}" style="height: 250px; width: 250px;" alt="{{ $jumbotron->header }}"></td>
                                                </tr>
                                                <tr>
                                                    <th>Action</th>
                                                    <td>
                                                        <a href="{{ url('/admin/jumbotron/' . $jumbotron->id_jumbo . '/edit') }}" title="Edit Jumbotron"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')