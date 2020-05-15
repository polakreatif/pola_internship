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
        @foreach ($artikels as $artikel)
            <tr class="border-bottom">
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{$artikel->judul}} </td>
                <td> {{$artikel->teks}} </td>
                <td> {{$artikel->gambar}} </td>
                <td> {{$artikel->tanggal_dibuat}} </td>
                <td> {{$artikel->tanggal_diperbarui}} </td>
                @if ($artikel->is_published == 0)
                    <td> <button class="btn btn-primary">Not Published</button> </td>
                @else
                    <td> <button class="btn btn-warning">Published</button></td>
                @endif
                <td>
                    <a href="/dashboards/artikels/{{$artikel->id_artikel}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['ArtikelController@destroy', $artikel->id_artikel], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <a href="/dashboards/artikels/create" class="btn btn-primary">Tambah Artikel</a>
@endsection