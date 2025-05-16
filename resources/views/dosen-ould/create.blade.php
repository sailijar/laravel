@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Data Dosen</h1>

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label for="nidn">NIDN</label>
            <input type="text" name="nidn" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
