<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $name=request('name');
        $age=request('age');
        $pizzas= Pizza::all();
        // $pizzas=pizza::orderBy('name')->get();
        // $pizzas=pizza::orderBy('name', 'desc')->get();
        // $pizzas=pizza::orderBy('name', 'asc')->get();
        // $pizzas=pizza::where('type', 'huwain')->get();
        // $pizzas= Pizza::latest()->get();
        return view('pizzas.index', [
        'pizzas'=>$pizzas,
        'name'=>$name,
        'age'=>$age
        
        ]);
        
    
    }
     

    public function show($id){
        // $mypizza=Pizza::find($id);
        $mypizza=Pizza::findOrFail($id);
        return view('pizzas.show', ['pizzabyid' => $mypizza]);

    }


    public function create(){
        return view('pizzas.create');
    }

    public function store(){
     $pizza= new Pizza();

     $pizza->name=request('name');
     $pizza->type=request('type');
     $pizza->base=request('base');
     $pizza->toppings=request('toppings');
     $pizza->save();

        return redirect('/')->with('mssg','Thank You For Order');
    }

    public function destroy($id){
        $pizza= Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas')->with('msg', "Order number $id deleted");
    }
}
