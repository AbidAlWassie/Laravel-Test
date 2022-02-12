@extends('layouts.layout')

@section('content')
<section class="orders flex justify-center">
    <div class="order-content">
        <h2 class="text-blue-400 text-4xl font-semibold">Order List</h2>

        <div class="container mt-8">

            <p>Your ID is {{ $id }}</p>

        </div>
    </div>
</section>
@endsection
