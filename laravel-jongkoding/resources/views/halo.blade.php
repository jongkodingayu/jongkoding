<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    @php
    $isActive=false;
    $hasError=true;
    @endphp

    <span @class([ 'p-4' , 'font-bold'=> $isActive,
        'text-gray-500'=> !$isActive,
        'bg-danger'=> $hasError
        ])>{{$name}}</span>

    <span class="p-4 text-gray-500 bg-danger">{{$name}}</span>

    <hr>
    @foreach($array as $data)
    @if($loop->first)
    Ini adalah index pertama
    @endif

    @if($loop->last)
    Ini adalah index terakhir
    @endif

    <p>This is data {{$data}}</p>
    @endforeach


    <hr>

    @forelse($array as $data)
    <li>{{$data}}</li>
    @empty
    <p>No data</p>
    @endforelse

    <hr>
    @foreach($array as $data)
    <p>This data {{$data}}</p>
    @endforeach

    <hr>
    @for($i=0;$i<10;$i++) The current value is {{$i}} <br>
        @endfor
        <hr>
        @switch($name)
        @case("JongKoding")
        <h1>Halo, aku {{$name}}</h1>
        @break
        @case("")
        <h1>Maaf aku tidak punya nama</h1>
        @break
        @default
        <h1>Halo, aku bukan JongKoding</h1>
        @endswitch

        <hr>

        @auth
        user diautentikasi
        @endauth

        @guest
        user sebagai guest
        @endguest
        <hr>


        @if($name=="")
        <h1>Maaf aku tidak punya nama</h1>
        @elseif($name=="JongKoding")
        <h1>Halo, aku {{$name}}</h1>
        @else
        <h1>Halo, aku bukan JongKoding</h1>
        @endif

        <hr>
        <h1>Halo, aku {{$name}}</h1>
        <h1>Halo, aku <?= $name ?></h1>
        <h1>Halo, aku <?php echo $name ?></h1>

        <script>
            var app = <?php echo json_encode($array); ?>
            // var app_two = @json($array);
        </script>
</body>

</html>