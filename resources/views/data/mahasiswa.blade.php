@extends('layout.master')
@section('title')
    Data Mahasiswa
@endsection

@section('MenuMhs')
    active
@endsection

@section('konten')
<div class="container text-center mt-3 bg-white">
    <h2 class="mb-3">Data mahasiswa</h2>
    <div class="row">
        <div class="m-auto col-6">
            <ol class="list-group">
                @forelse ($data_mhs as $mhs)
                    <li class="list-group-item">{{$mhs}}</li>
                @empty
                <div class="alert alert-secondary" role="alert">
                    Maaf, Data Mahasiswa Tidak Tersedia
                </div>
                @endforelse
            </ol>
        </div>
    </div>

    {{-- konten --}}
</div>
@endsection
