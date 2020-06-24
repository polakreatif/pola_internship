@extends('layouts.admin')

@section('title','Halaman Daftar Produk')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    @if (session()->has('success'))
        <div class="alert alert-success"> {{ session()->get('success') }} </div>
    @endif
    @if (session()->has('update'))
        <div class="alert alert-success"> {{ session()->get('update') }} </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Daftar Produk</h1>
      <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk
      </a>
    </div>


    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Kategori Sepatu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($item->deskripsi_produk, 15) }}</td>
                                <td>@currency( $item->harga_produk )</td>
                                <td>
                                    <img src="{{ Storage::url($item->gambar_produk) }}" alt="{{ $item->gambar_produk }}" class="img-responsive" style="width:80px" >
                                </td>
                                <td>{{ $item->kategori->nama }}</td>
                                <td>
                                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('produk.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td> 
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Tidak Ada atau Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex flex-row-reverse">
                    {{$items->links()}}
                </div>
            </div>
        </div>
    </div>


  </div>
  <!-- /.container-fluid -->
@endsection