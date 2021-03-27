<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
        return view('pizzas.index' , ['pizzas' =>  $pizzas]);
    }
    public function show($id) {
        $pizzas = Pizza::findOrFail($id);

        return view('pizzas.show' , ['pizzas' => $pizzas]);
    }
    public function create() {
        return view('pizzas.create');
    }
    public function store() {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();
        return redirect('/');
    }
    public function destroy($id){
        $pizza = Pizza::find($id);
        $pizza->delete();

        return redirect('/');
    }
}