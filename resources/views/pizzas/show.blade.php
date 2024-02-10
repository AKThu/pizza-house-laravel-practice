@extends('layouts.layout')

@section('content')
<!-- <h1 class="text-5xl font-bold text-primary text-center pt-5">Pizza House</h1> -->
<div class="flex flex-col items-center pt-20 pb-10 min-h-screen">
    <div class="w-3/5">
        <h2 class="text-2xl text-center">Order for {{ $pizza->name }}</h2>
        <div class="mt-5 bg-stone-100 py-5 px-10 rounded-lg drop-shadow-lg  flex flex-col justify-center">
            <div class="mb-3">
                <p class="font-medium text-lg">Type</p>
                <p class="px-3 py-2 bg-stone-200 rounded-md">{{ $pizza->type }}</p>
            </div>
            <div class="mb-3">
                <p class="font-medium text-lg">Base</p>
                <p class="px-3 py-2 bg-stone-200 rounded-md">{{ $pizza->base }}</p>
            </div>
            <div class="mb-3">
                <p class="font-medium text-lg">Toppings<p>
                <ul class="list-disc list-inside px-3 py-2 bg-stone-200 rounded-md">
                    @foreach($pizza->toppings as $topping)
                        <li>{{ $topping }}</li>
                    @endforeach
                </ul>
            </div>
            <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-primary text-white py-2 px-3 rounded-lg ml-[50%] -translate-x-1/2 mt-4 hover:drop-shadow-lg w-full relative hover:right-1 hover:bottom-1">Complete Order</button>
            </form>
        </div>
    </div>

    <a href="{{ route('pizzas.index') }}" class="text-clifford mt-5 hover:text-primary">>Back<</a>
</div>
@endsection

