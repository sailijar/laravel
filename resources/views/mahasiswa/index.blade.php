<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>


      <h2> List Mahasiswa Kelas {{ $kelas }}</h2>

    <ol>
        @foreach ($data as $nama)
        <li>{{ $nama }}</li>
            
        @endforeach
    </ol>
    {{-- <ol>
        <li>sailijar</li>
        <li>zikra</li>
        <li>lijar</li>
    </ol> --}}

    <script src="{{ asset('/js/bootstrap.bundle.js') }}"><script>
    <script src="{{ asset('/js/bootstunrap.js') }}"><script>
</body>
</html>