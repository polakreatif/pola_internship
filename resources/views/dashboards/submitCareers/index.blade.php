@extends('layouts.dashboard')

@section('content')
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Alamat</th>
        <th scope="col">Pengalaman Kerja</th>
        <th scope="col">Portofolio</th>
        <th scope="col">CV</th>
        <th scope="col">Tanggal dibuat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($submitCareers as $submitCareer)
            <tr class="border-bottom">
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{$submitCareer->nama}} </td>
                <td> {{$submitCareer->email}} </td>
                <td> {{$submitCareer->alamat}} </td>
                <td> {{$submitCareer->pengalaman}} </td>
                <td> {{$submitCareer->portofolio}} </td>
                <td> {{$submitCareer->cv}} </td>
                <td> {{$submitCareer->tanggal_dibuat}} </td>
                <td>
                    {!! Form::open(['action' => ['SubmitCareerController@destroy', $submitCareer->id_submit], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection