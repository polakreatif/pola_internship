@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    @if($infoinfocompanies->isNotEmpty())
                                        <div class="col-lg-9">
                                            <h2 class="title-1 m-b-25">Detail Perusahaan</h2>
                                        </div>
                                    @else
                                        <div class="col-lg-2">
                                            <a href="{{ url('/admin/company/create') }}" title="Back">
                                                <button class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Detail</button>
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
                                            <th></th>
                                            <th>Informasi</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <td>{{ $companies->nama_company }}</td>
                                            </tr>
                                            <tr>
                                                <th>slogan Perusahaan</th>
                                                <td>{!! ($companies->slogan) !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Tentang Perusahaan</th>
                                                <td>{!! $companies->about !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Whatsapp</th>
                                                <td>{{ $companies->whatsapp }}</td>
                                            </tr>
                                            <tr>
                                                <th>Instagram</th>
                                                <td>{!! ($companies->instagram) !!}</td>
                                            </tr>
                                            <tr>
                                                <th>facebook</th>
                                                <td>{{ $companies->facebook }}</td>
                                            </tr>
                                            <tr>
                                                <th>twitter</th>
                                                <td>{{ $companies->twitter }}</td>
                                            </tr>
                                            <tr>
                                                <th>youtube</th>
                                                <td>{{ $companies->youtube }}</td>
                                            </tr>
                                            <tr>
                                                <th>Logo</th>
                                                <th><img src="/storage/img/company/{{ $companies->logo }}" style="height: 100px; width: 100px;" alt="{{ $companies->nama_company }}"></th>
                                            </tr>
                                            <tr>
                                                <th>Gambar About</th>
                                                <th><img src="/storage/img/company/{{ $companies->about_image }}" style="height: 100px; width: 100px;" alt="{{ $companies->nama_company }}"></th>
                                            </tr>
                                            <tr>
                                                <th>Ubah Detail</th>
                                                <td>
                                                        <a href="{{ url('/admin/company/' . $companies->id_company . '/edit') }}" title="Edit Detail Company"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Klik Disini!</button></a>
                                                    </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')