@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Produk</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Lihat</strong> Produk
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Id Produk</label>
                                                <input placeholder="{{ $products->id_product }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul Artikel</label>
                                                <input placeholder="{{ $products->name_product }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Isi Artikel</label>
                                                <textarea name="isi" id="konten" cols="30" rows="10" readonly>{!! $products->desc_product !!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Gambar</label><br>
                                                <img src="/storage/img/product/{{ $products->product_image }}" style="width: 250px; height: 250px;" alt="{{ $products->name_product }}">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-md-12 col-xl-6">
                                                <a href="javascript:history.go(-1)" title="Back">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-sm-12" style="text-align: right;">
                                                <a href="{{ url('/admin/product/' . $products->id_product . '/edit') }}" title="Edit User">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                </a>
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'url' => ['/admin/product', $products->id_product],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                    {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i> Delete', array(
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-danger btn-sm',
                                                            'title' => 'Delete User',
                                                            'onclick'=>'return confirm("Apakah kamu yakin mau menghapus produk ini?")'
                                                    ))!!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')