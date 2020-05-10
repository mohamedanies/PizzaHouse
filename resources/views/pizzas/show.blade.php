@extends('layouts.app')

        @section('content')
        <div class="container">
            <table class="table border border">
                <thead>
                    <tr>
                        <th>Name of Client</th>
                        <th>Pizza type</th>
                        <th> pizza base</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $pizzabyid->name }}</td>
                        <td>{{ $pizzabyid->type }}</td>
                        <td>{{ $pizzabyid->base }}</td>
                        
                    </tr>
                
                </tbody>
            </table>
            <h3>Extra Toppings</h3>
            @foreach($pizzabyid->toppings as $topping)
                
                <ul>
                    <li>{{ $topping }}</li>
                </ul>
            @endforeach
            <form action="/pizzas/{{ $pizzabyid->id}}" method="POST">
                @csrf

                @method('DELETE')
                <button>Delete the Order</button>
                
            </form>
            <a href="/pizzas" class="back"> <- Back to pizzas</a>
        </div>
        @endsection