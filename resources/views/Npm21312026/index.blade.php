@extends('layout.master')

@section('judul')
Daftar Data
@endSection

@push('script')
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(function(){
        $('#example1').DataTable();
    })
    </script>
@endpush

@push('style')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush
@section('content')

<a href="/Npm21312026/create" class="btn btn-secondary mb-3">Tambah data</a>
<table class="table" id="example1">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">No Mahasiswa</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($Uas as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{$item->no_mahasiswa}}</td>
            <td>{{$item->nama_mahasiswa}}</td>
            <td>{{$item->program_studi}}</td>
            <td>
                <form action="/Npm21312026/{{ $item->id }}" method="POST">
                <a href="/Npm21312026/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah anda yakin menghapus data ini')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <h2>Data tidak ada</h2>
        @endforelse
    </tbody>
</table>
@endsection
