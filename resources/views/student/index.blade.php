@extends('layout.master')
@section('title','Student | Data')
@section('content')
<div class="container" style="background: white;">
    <a href="{{url('/tambahdatastudent')}}" class="btn btn-primary btn-sm mb-4">Tambah</a>
    @if (session('message'))
    <div class="alert alert-success my-3">
        {{ session('message') }}
    </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($student as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $item->nim }}</td>
            <td>{{$item->nama}}</td>
            <td>
                <a href="{{ url('ubah') }}/{{$item->id}}" class="btn btn-warning btn-sm">Ubah</a>
                <form method="post" action="{{ url('/hapus') }}/{{$item->id}}" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus')">Hapus</button>
                </form>
                <a href="{{ url('/detailstudent') }}/{{ $item->id }}" class="btn btn-success btn-sm">Lihat</a>
            </td>
          </tr>     
        @endforeach
        </tbody>
    </table>
</div>
@endsection