@extends('layouts.app2')

@section('artikel')
    <div class="container mx-auto">
        <table class="table-auto mx-auto">
            <thead>
              <tr>
                    <th class="px-4 py-2">Judul</th>
                    <th class="px-4 py-2">Isi</th>
                    <th class="px-4 py-2">Gambar</th>
                    <th class="px-4 py-2">Kategori</th>
                    <th class="px-4 py-2">Publish</th>
                    <th class="px-4 py-2">Viewer</th>
                    <th class="px-4 py-2">Tanggal Dibuat</th>
                    <th class="px-4 py-2">Tanggal Diperbaharui</th>
                    <th class="px-4 py-2">Action</th>
              </tr>
            </thead>
            <tbody class="text-center font-medium">
                @foreach ($articles as $article)
                <tr>
                    <td class="border border-teal-800 px-4 py-2">{{$article->judul}}</td>
                    <td class="border border-teal-800 px-4 py-2">{{$article->isi}}</td>
                    <td class="border border-teal-800 px-4 py-2"> <img src="/img/{{$article->gambar}}" alt="{{$article->gambar}}"> </td>
                    <td class="border border-teal-800 px-4 py-2"> {{$article->kategori}} </td>
                    <td class="border border-teal-800 px-4 py-2"> {{$article->is_published}} </td>
                    <td class="border border-teal-800 px-4 py-2"> {{$article->viewer_count}} </td>
                    <td class="border border-teal-800 px-4 py-2"> {{$article->tanggal_dibuat}} </td>
                    <td class="border border-teal-800 px-4 py-2"> {{$article->diperbarui}} </td>
                    <td class="border border-teal-800 px-4 py-2"> Edit Hapus </td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
