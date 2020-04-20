@extends('layouts.admin')

@section('title','Halaman Daftar Produk')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="{{ old('nama_produk') }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi_produk">Deskripsi</label>
                    <textarea name="deskripsi_produk" rows="10" class="d-block w-100 form-control">{{ old('deskripsi_produk') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="harga_produk">Harga</label>
                    <input type="number" class="form-control" name="harga_produk" placeholder="Harga Produk" value="{{ old('harga_produk') }}">
                </div>
                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    <input type="file" name="gambar_produk" placeholder="Masukkan Gambar Produk" >
                </div>
                <div class="form-group">
                    <label for="kategori_id">Kategori Sepatu</label>
                    <select name="kategori_id" required class="form-control">
                        <option value="">Pilih Kategori Sepatu</option>
                        @foreach ($kategori as $kategori)
                            <option value="{{ $kategori->id }}">
                                {{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection