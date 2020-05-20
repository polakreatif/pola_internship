@include('layouts.backend.header')

@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Pengguna</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Lihat</strong> Pengguna
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Id User</label>
                                                <input placeholder="{{ $user->id }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama Pengguna</label>
                                                <input placeholder="{{ $user->name }}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input placeholder="{{ $user->email }}" class="form-control" readonly>
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
                                                @if($user->id == 1)
                                                <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User">
                                                    <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                </a>
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'url' => ['/admin/users', $user->id],
                                                        'style' => 'display:inline'
                                                    ]) !!}
                                                        {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i> Delete', array(
                                                                'type' => 'submit',
                                                                'class' => 'btn btn-danger btn-sm',
                                                                'title' => 'Delete User',
                                                                'onclick'=>'return confirm("Apakah kamu yakin mau menghapus user ini?")'
                                                        ))!!}
                                                    {!! Form::close() !!}
                                                @else
                                                <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User">
                                                    <button class="btn btn-primary btn-sm"><i class="fas fa-cog" aria-hidden="true"></i> Edit</button>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
@include('layouts.backend.footer')