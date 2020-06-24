@extends('layouts.admin')

@section('title','Halaman Daftar Kategori')

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
      <h1 class="h3 mb-0 text-gray-800">Daftar Kategori</h1>
      <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori
      </a>
    </div>


    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori Sepatu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kategori as $kategoris)
                            <tr>
                                <td>{{ $kategoris->id }}</td>
                                <td>{{ $kategoris->nama }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $kategoris->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('kategori.destroy', $kategoris->id) }}" method="post" class="d-inline">
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
                                <td colspan="3" class="text-center">
                                    Data Tidak Ada atau Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex flex-row-reverse">
                    {{$kategori->links()}}
                </div>
            </div>
        </div>
    </div>


  </div>
  <!-- /.container-fluid -->
@endsection