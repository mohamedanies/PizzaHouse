@extends('layouts.app')

@section('content')
    
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <img class="pizzahouse" src="/img/neon.jpg" alt="pizzahouse">
                <div class="title m-b-md">
                     Pizzas House Resturant
                </div>
                <p class="mssg"> {{ session('mssg')}} </p>
                <a href="/pizzas/create" ><h2>Order a Pizza</h2></a>
            </div>
        </div>
        @endsection
    