@extends('layouts.layout')

@section('content')
<div class="flex flex-col items-center justify-center h-screen pt-10">
    @if (session('message'))
        <p  id="noti" onclick="notiHandler()"
            class="px-3 py-2 rounded-md text-white bg-primary absolute top-20 cursor-pointer">
            {{ session('message'); }}
        </p>
    @endif
    <img src="img/pizza-house.png" alt="pizza house logo" class="w-1/2"/>
    <h1 class="text-8xl font-extralight text-primary text-center mt-3">
        Pizza House
    </h1>
    <a href="{{ route('pizzas.create') }}" class="text-clifford mt-5 hover:text-primary">>Order a Pizza<</a>
    @guest
    @else
        <a href="{{ route('pizzas.index') }}" class="text-clifford mt-3 hover:text-primary">>See Orders<</a>
    @endguest
</div>
</div>

@endsection

