@extends('layout.master')
@section('title','Ubah Data | Student')
@section('content')
<div class="container" style="background: white;">
    <form method="post" action="{{ url('/actionubah') }}/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Nama" value="{{$student->nama}}">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="190***" value="{{$student->nim}}">
            @error('nim')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input Email" value="{{$student->email}}">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="jurusan">jurusan</label>
          <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Input Jurusan" value="{{$student->jurusan}}">
          @error('jurusan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>    
@endsection