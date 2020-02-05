@extends('layout.master')
@section('title','Student | Detail')
@section('content')
<div class="container" style="background: white;">
  <a href="{{ url('/students') }}" class="btn btn-primary btn-sm mb-4">Kembali</a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$student->nama}}</td>
            <td>{{$student->nim}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->jurusan}}</td>
          </tr>     
        </tbody>
    </table>
</div>
@endsection