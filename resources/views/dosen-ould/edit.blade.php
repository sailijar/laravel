@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Dosen</h1>

    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nidn">NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ $dosen->nidn }}" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $dosen->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
