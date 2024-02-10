<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pizza;


class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $pizzas = Pizza::all();

        $user = [
            'name' => request('name'),
            'age' => request('age')
        ];
    
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'user' => $user,
        ]);
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', [ 'pizza' => $pizza ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('message', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas')->with('message', 'Order Completed!');
    }
}
