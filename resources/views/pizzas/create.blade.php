@extends('layouts.layout')

@section('content')
<!-- <h1 class="text-5xl font-bold text-primary text-center pt-5">Pizza House</h1> -->
<div class="flex flex-col items-center min-h-screen pt-20 pb-10">
    <h2 class="text-2xl">Make a pizza order!</h2>

    <form action="{{ route('pizzas.store') }}" method="POST" class="p-8 mt-5 w-11/12 sm:w-3/5 text-xl bg-stone-100 rounded-lg drop-shadow-lg flex flex-col justify-center">
        @csrf
        <div class="flex flex-col">
            <div class="mb-6 flex flex-row justify-between">
                <label for="name">Your name</label>
                <input type="text" id="name" name="name" class="border-2 border-stone-300 py-1 px-3 rounded-lg w-3/5 mr-0 hover:drop-shadow-lg">
            </div>
            <div class="my-6 flex flex-row justify-between">
                <label for="type">Choose pizza type</label>
                <select id="type" name="type" class="bg-stone-100 hover:bg-primary hover:text-white drop-shadow ml-3 py-1 px-3 rounded-lg w-3/5">
                    <option value="margherita">Margherita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg Supreme</option>
                    <option value="volcano">Volcano</option>
                </select>
            </div>
            <div class="my-6 flex flex-row justify-between">
                <label for="base">Choose base type</label>
                <select id="base" name="base" class="bg-stone-100 hover:bg-primary hover:text-white drop-shadow ml-3 py-1 px-3 rounded-lg w-3/5">
                    <option value="cheesy crust">Cheesy Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                    <option value="thin & crispy">Thin & Crispy</option>
                    <option value="thick">Thick</option>
                </select>
            </div>
            <div class="mt-6">
                <fieldset class="flex flex-row justify-between items-center">
                    <label>Extra toppings</label>
                    <div class="ml-10 accent-primary w-3/5">
                        <label for="mushrooms" class="my-3 px-3 py-1 w-full bg-stone-100 hover:bg-primary hover:text-white drop-shadow rounded-lg flex flex-row items-center">
                            <input type="checkbox" name="toppings[]" value="mushrooms" id="mushrooms">
                            <p class="ml-2">Mushrooms</p>
                        </label>
                        <label for="peppers" class="my-3 px-3 py-1 w-full bg-stone-100 hover:bg-primary hover:text-white drop-shadow rounded-lg flex flex-row items-center">
                            <input type="checkbox" name="toppings[]" value="peppers" id="peppers">
                            <p class="ml-2">Peppers</p>
                        </label>
                        <label for="garlic" class="my-3 px-3 py-1 w-full bg-stone-100 hover:bg-primary hover:text-white drop-shadow rounded-lg flex flex-row items-center">
                            <input type="checkbox" name="toppings[]" value="garlic" id="garlic">
                            <p class="ml-2">Garlic</p>
                        </label>
                        <label for="olives" class="my-3 px-3 py-1 w-full bg-stone-100 hover:bg-primary hover:text-white drop-shadow rounded-lg flex flex-row items-center">
                            <input type="checkbox" name="toppings[]" value="olives" id="olives">
                            <p class="ml-2">Olives</p>
                        </label>
                    </div>
                </fieldset>
            </div>
        </div>

        <input type="submit" value="Order Pizza" class="bg-primary hover:bg-orange-600 text-white font-bold py-2 px-5 rounded-lg mt-10 drop-shadow-lg relative hover:right-1 hover:bottom-1">
    </form>

    <a href="/" class="text-clifford mt-5">>Back<</a>
</div>
@endsection

