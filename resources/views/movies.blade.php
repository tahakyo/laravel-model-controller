<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    

    <h1>Lista dei film</h1>
    <div class="container">
        <ul>
            @foreach ($movies as $item)
                <li>
                    <h3>{{ $item->title }}</h3>
                    <h4>{{ $item->original_title }}</h4>
                    <p>{{ $item->nationality }}</p>
                    <p>Release date: {{ \Carbon\Carbon::parse($item->date)->format('d/M/Y') }}</p>
                    <p>vote: {{ $item->vote }}</p>
                </li>
            @endforeach
        </ul>
    </div>




</body>
</html>




