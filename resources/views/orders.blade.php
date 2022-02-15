@extends('layouts.layout')

@section('content')


<section class="orders flex justify-center">
    <div class="order-content">
        <h2 class="text-blue-400 text-4xl font-semibold">Order List</h2>

        {{-- @for ($i = 0; $i < count($orders); $i++)
            <p>{{ $orders[$i]['type'] }}</p>
        @endfor --}}

        <div class="container mt-8">
        
            <table class="order-list">
                <thead class="bg-blue-900 flex text-white w-full">
                    <tr class="flex w-full">
                        <th class="p-4 w-1/6 border-2 border-black">Order ID</th>
                        <th class="p-4 w-1/2 border-2 border-black">Customer</th>
                        <th class="p-4 w-1/6 border-2 border-black">Type</th>
                        <th class="p-4 w-1/4 border-2 border-black">Base</th>
                        <th class="p-4 w-1/4 border-2 border-black">Price</th>
                    </tr>
                </thead>
                <tbody class="bg-grey-light flex flex-col items-center overflow-y-auto w-full mb-10">
                    
                    
                    @foreach ($orders as $order)
                    {{-- <div>
                        {{ $loop->index }} {{ $order['type'] }} - {{ $order['base'] }}
                    </div> --}}
                    <tr class="flex w-full bg-blue-800">
                        <td class="p-4 w-1/6 border-2 border-black">{{ $order->id }}</td>
                        <td class="p-4 w-1/2 border-2 border-black">{{ $order->name }}</td>
                        <td class="p-4 w-1/6 border-2 border-black">{{ $order->type }}</td>
                        <td class="p-4 w-1/4 border-2 border-black">{{ $order->base }}</td>
                        <td class="p-4 w-1/4 border-2 border-black">{{ $order->price }}</td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

        
    </div>
</section>

@endsection
