@extends('layouts.layout')

@section('content')
<!-- <h1 class="text-5xl font-bold text-primary text-center pt-5">Pizza House</h1> -->
<div class="flex flex-col items-center pt-20 pb-10 min-h-screen">

@if (session('message'))
        <p  id="noti" onclick="notiHandler()"
            class="px-3 py-2 rounded-md text-white bg-primary absolute top-20 cursor-pointer">
            {{ session('message'); }}
        </p>
    @endif
    <p class="text-2xl">Current Orders</p>
    <div class="self-center flex flex-col items-start mt-5 mx-32 w-3/5">
        @foreach($pizzas as $pizza)
            <a href="/pizzas/<?= $pizza->id; ?>" class="flex flex-row justify-start items-center w-full h-full my-2">
                <p class="mr-3 text-2xl">
                    {{ $loop->index + 1 }}.
                </p>
                <div class="flex flex-row justify-start items-center bg-stone-100 hover:bg-primary hover:text-white text-lg font-medium drop-shadow-lg rounded-lg px-5 py-3 w-full relative hover:right-4 hover:bottom-2">
                    <img src="img/pizza.ico" alt="pizza" class="w-8 h-8 mr-2">
                    {{ $pizza->name }}
                </div>
            </a>
        @endforeach
    </div>

    <a href="/" class="text-clifford mt-2 hover:text-primary">>Home<</a>

</div>
@endsection
