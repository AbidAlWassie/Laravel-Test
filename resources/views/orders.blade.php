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
        <section class="orders flex justify-center ">
            <div class="order-content">
                <h2 class="text-blue-400 text-4xl font-semibold">Order List</h2>

                {{-- @for ($i = 0; $i < count($orders); $i++)
                    <p>{{ $orders[$i]['type'] }}</p>
                @endfor --}}

                <div class="container mt-8">
                
                    <table class="text-left w-full">
                        <thead class="bg-gray-900 flex text-white w-full">
                            <tr class="flex w-full">
                                <th class="p-4 w-1/4 border-2 border-black">Order</th>
                                <th class="p-4 w-1/4 border-2 border-black">Type</th>
                                <th class="p-4 w-1/4 border-2 border-black">Base</th>
                                <th class="p-4 w-1/4 border-2 border-black">Price</th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light flex flex-col items-center overflow-y-auto w-full mb-10">
                            
                            
                            @foreach ($orders as $order)
                            {{-- <div>
                                {{ $loop->index }} {{ $order['type'] }} - {{ $order['base'] }}
                            </div> --}}
                            <tr class="flex w-full bg-gray-800">
                                <td class="p-4 w-1/4 border-2 border-black">{{ $loop->index }}</td>
                                <td class="p-4 w-1/4 border-2 border-black">{{ $order['type'] }}</td>
                                <td class="p-4 w-1/4 border-2 border-black">{{ $order['base'] }}</td>
                                <td class="p-4 w-1/4 border-2 border-black">{{ $order['price'] }}</td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>
