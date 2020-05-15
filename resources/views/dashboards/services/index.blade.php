@extends('layouts.dashboard')

@section('content')
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Judul</th>
        <th scope="col">Teks</th>
        <th scope="col">Gambar</th>
        <th scope="col">Tanggal dibuat</th>
        <th scope="col">Tanggal diperbaharui</th>
        <th scope="col">Published</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
            <tr class="border-bottom">
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{$service->judul}} </td>
                <td> {{$service->teks}} </td>
                <td> {{$service->gambar}} </td>
                <td> {{$service->tanggal_dibuat}} </td>
                <td> {{$service->tanggal_diperbarui}} </td>
                @if ($service->is_published == 0)
                    <td> <button class="btn btn-primary">Not Published</button> </td>
                @else
                    <td> <button class="btn btn-warning">Published</button></td>
                @endif
                <td>
                    <a href="/dashboards/services/{{$service->id_service}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['ServiceController@destroy', $service->id_service], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <a href="/dashboards/services/create" class="btn btn-primary">Tambah Layanan</a>
@endsection