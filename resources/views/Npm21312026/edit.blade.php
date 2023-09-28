@extends('layout.master')

@section('judul')
Tambah Cast
@endsection

@section('content')

@if ($Uas)
<form action="/Npm21312026/{{ $Uas->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>No Mahasiswa</label>
        <input type="number" name="no_mahasiswa" value="{{ $Uas->no_mahasiswa }}" class="form-control">
        @error('no_mahasiswa')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="{{ $Uas->nama_mahasiswa }}" class="form-control">
        @error('nama_mahasiswa')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Program Studi</label>
        <textarea name="program_studi" class="form-control">{{ $Uas->program_studi }}</textarea>
        @error('program_studi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@else
<p>Data tidak ditemukan.</p>
@endif

@endsection
