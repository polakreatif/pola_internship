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
        @foreach ($headers as $header)
            <tr class="border-bottom">
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{$header->judul}} </td>
                <td> {{$header->teks}} </td>
                <td> {{$header->gambar}} </td>
                <td> {{$header->tanggal_dibuat}} </td>
                <td> {{$header->tanggal_diperbarui}} </td>
                @if ($header->is_published == 0)
                    <td> <button class="btn btn-primary">Not Published</button> </td>
                @else
                    <td> <button class="btn btn-warning">Published</button></td>
                @endif
                <td>
                    <a href="/dashboards/headers/{{$header->id_header}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['HeaderController@destroy', $header->id_header], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <a href="/dashboards/headers/create" class="btn btn-primary">Tambah Header</a>
@endsection