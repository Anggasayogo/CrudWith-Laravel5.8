@extends('layout.master')
@section('title','Home | Daftar Mahasiswa')
 @section('content')
        <div class="container-fluid" style="background: white;">
            <a href="" class="btn btn-primary btn-sm mb-4">Tambah</a>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($mahasiswa as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->nim}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->jurusan}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Ubah</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  </tr>     
                @endforeach
                </tbody>
            </table>
        </div>
@endsection