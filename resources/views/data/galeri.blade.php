@extends('layout.master')
@section('title')
Galeri Foto
@endsection
@section('MenuGal','active')

@section('konten')
    <div class="container text-center mt-3 bg-white">
        <h2 class="mb-3">Galeri Foto</h2>
        <div class="row">
            <div class="col-4">
                <img src="{{asset('/image/1.jpg')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/2.jpg')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/3.jpg')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/4.jpg')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/5.jpg')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/6.jpg')}}" class="img-thumbnail img-fluid" alt="">
            </div>
        </div>

        {{-- konten --}}
    </div>
    @endsection
