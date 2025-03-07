<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark text-white p-3 d-inline-block"> {{ $nama }} </h1>
        <h1 class="bg-success text-white p-3 d-inline-block"> {{ $nilai }} </h1>

        @if(($nilai > 85) and ($nilai <=100))
        <h1 class="alert alert-success d-inline-block">A</h1>
        @elseif(($nilai > 70) and ($nilai <=84))
        <h1 class="alert alert-success d-inline-block">B</h1>
        @elseif(($nilai > 55) and ($nilai <=69))
        <h1 class="alert alert-warning d-inline-block">C</h1>
        @elseif(($nilai > 40) and ($nilai <=54))
        <h1 class="alert alert-danger d-inline-block">D</h1>
        @elseif(($nilai > 0) and ($nilai <=39))
        <h1 class="alert alert-danger d-inline-block">E</h1>
        @endif



        <br>
        @if(($nilai > 0) and ($nilai <=50))
        <div class="alert alert-danger d-inline-block">Tidak Lulus</div>
        @elseif(($nilai > 50) and ($nilai <=100))
        <div class="alert alert-success d-inline-block">Lulus</div>
        @else
        <div class="alert alert-danger d-inline-block">Tidak Valid</div>
        @endif

        <br>

        {{-- @foreach ($nilai2 as $value)
            <div class="alert alert-info d-inline-block">{{ $value }}</div>
        @endforeach --}}

        @forelse ( $nilai2 as $value )
            @if (($value >=0)and($value <=50))
            <div class="alert alert-danger d-inline-block">{{ $value }} </div>
            @elseif (($value >=50)and($value <=100))
            <div class="alert alert-success d-inline-block">{{ $value }} </div>
            @endif
            @empty
            <div class="alert alert-danger d-inline-block">Data Nilai Tidak Ada</div>
        @endforelse
    </div>
        <hr>

        <div class="text-center">
            @for($i=1;$i<=50;$i++)
                <div class="alert alert-info d-inline-block"> {{ $i }}</div>
            @endfor

        </div>












    <script src="{{ asset('/js/bootstrap.bundle.js')}}"><script>
    <script src="{{ asset('/js/bootstunrap.js')}}"><script>

</body>
</html>
