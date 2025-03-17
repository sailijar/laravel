<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/galeri">Galeri</a>
                </li>

                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

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

    <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
        Copyright &copy; Maulian Saputra - 2025
    </footer>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
