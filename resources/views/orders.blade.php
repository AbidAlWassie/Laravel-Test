<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="../css/app.css"> --}}
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    </head>
    <body class="antialiased">
        <section>
            <h2 class="text-blue-400 text-4xl font-semibold">Index</h2>
            <p>{{ $type }} - {{ $base }} - {{ $price }}</p>
            @if ($price > 15)
                <p>this pizza is expensive</p>
                @elseif ($price < 5) 
                <p>this pizza is cheap</p>
                @else
                <p>this price is normally priced</p>
                @endif

                @unless ($base == 'cheesy crust')
                    <p>you don't have a cheesy crust</p>
                @endunless
        </section>
    </body>
</html>
