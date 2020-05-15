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
        @foreach ($portofolios as $portofolio)
            <tr class="border-bottom">
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{$portofolio->judul}} </td>
                <td> {{$portofolio->teks}} </td>
                <td> {{$portofolio->gambar}} </td>
                <td> {{$portofolio->tanggal_dibuat}} </td>
                <td> {{$portofolio->tanggal_diperbarui}} </td>
                @if ($portofolio->is_published == 0)
                    <td> <button class="btn btn-primary">Not Published</button> </td>
                @else
                    <td> <button class="btn btn-warning">Published</button></td>
                @endif
                <td>
                    <a href="/dashboards/portofolios/{{$portofolio->id_portofolio}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['PortofolioController@destroy', $portofolio->id_portofolio], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <a href="/dashboards/portofolios/create" class="btn btn-primary">Tambah Portofolio</a>
@endsection