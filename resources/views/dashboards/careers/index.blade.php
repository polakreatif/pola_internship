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
        @foreach ($careers as $career)
            <tr class="border-bottom">
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{$career->judul}} </td>
                <td> {{$career->teks}} </td>
                <td> {{$career->gambar}} </td>
                <td> {{$career->tanggal_dibuat}} </td>
                <td> {{$career->tanggal_diperbarui}} </td>
                @if ($career->is_published == 0)
                    <td> <button class="btn btn-primary">Not Published</button> </td>
                @else
                    <td> <button class="btn btn-warning">Published</button></td>
                @endif
                <td>
                    <a href="/dashboards/careers/{{$career->id_career}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['CareerController@destroy', $career->id_career], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <a href="/dashboards/careers/create" class="btn btn-primary">Tambah Career</a>
@endsection