@extends('layouts.admin')

@section('head')
  <title> ShopTronik | All Blogs </title>

  @include('components.admin.head_datatables')
@endsection

@section('script')
  @include('components.admin.script_datatables')
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">All Blogs</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Dasboard</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">   
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Slug</th>
                  <th>Created At</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  @for($i = 0; $i < 100; $i++)
                    <tr>
                      <td>
                        ATrident {{ $i }}
                      </td>
                      <td >
                        Internet
                        Explorer 4.0
                        {{ $i }}
                      </td>
                      <td >
                        Win 95+
                        {{ $i }}
                      </td>
                      <td> 
                        {{ $i }}
                      </td>
                      <td>
                        <a href="/blog/slug" class="btn btn-sm btn-outline-success">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="/blogs/slug/edit" class="btn btn-sm btn-outline-primary">
                          <i class="fas fa-edit"></i>
                        </a>
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="fas fa-trash"></i>
                        </button>
                      </td>
                    </tr>
                  @endfor
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    
          </div> <!-- End Card Body -->
        </div> <!-- End Card -->

      </div>
    </div>
  </div>
@endsection