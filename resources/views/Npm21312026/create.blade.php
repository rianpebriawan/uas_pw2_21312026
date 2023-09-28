@extends('layout.master')

@section('judul')
Tambah Data
@endsection

@section('content')

<form action="/Npm213120" method="post">
    @csrf
    
    <div class="form-group">
        <label>No Mahasiswa</label>
        <input type="number" name="no_mahasiswa" value="{{ old('no_mahasiswa') }}" class="form-control @error('no_mahasiswa') is-invalid @enderror">
        @error('no_mahasiswa')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="{{ old('nama_mahasiswa') }}" class="form-control @error('nama_mahasiswa') is-invalid @enderror">
        @error('nama_mahasiswa')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Program Studi</label>
        <textarea type="text" name="program_studi" value="{{ old('program_studi') }}" class="form-control @error('program_studi') is-invalid @enderror"></textarea>
        @error('program_studi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
