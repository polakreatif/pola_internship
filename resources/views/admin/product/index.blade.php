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
                                        <h2 class="title-1 m-b-25">Produk</h2>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="{{ url('/admin/product/create') }}" title="Back">
                                            <button class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Produk</button>
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
                                                <th>Nama Produk</th>
                                                <th>Deskripsi Produk</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{ $product->id_product }}</td>
                                                    <td><a href="{{ url('/admin/product/' . $product->id) }}">{{ $product->name_product }}</a></td>
                                                    <td>{!! ($product->desc_product) !!}</td>
                                                    <td><img src="/storage/img/product/{{ $product->product_image }}" style="height: 100px;" alt="{{ $product->name_product }}"></td>
                                                    <td>
                                                        <a href="{{ url('/admin/product/' . $product->id_product) }}" title="View Artikel"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                        <a href="{{ url('/admin/product/' . $product->id_product . '/edit') }}" title="Edit Artikel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'url' => ['/admin/product', $product->id_product],
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