@extends('layouts.app')

        @section('content')
        <div class="wrapper create-pizza">
            <h1>Create New Pizza Order</h1>
            <form action="/pizzas" method="POST">
                @csrf
                 <label for="name">Your Name: </label>
                 <input type="text" name="name" id="name">
                 <label for="type">Choose pizza type: </label>
                 <select name="type" id="type" >
                     <option value="super suprerm">Super supreme</option>
                     <option value="volcano">Volcano</option>
                     <option value="margirita">Margirita</option>
                     <option value="hwaiin">Hwaiin</option>
                 </select>
                 <label for="base">Choose pizza type: </label>
                 <select name="base" id="base" >
                     <option value="cheesy crust"> cheesy crust</option>
                     <option value="garlic crust">Garlic crust</option>
                     <option value="thin $ crispy">thin & crispy</option>
                     <option value="thick">Thick</option>
                 </select>
                </br>
                 </br>
                 <fieldset>
                     <label for="toppings">Choose Extra Toppings</label></br>
                     <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms</br>
                     <input type="checkbox" name="toppings[]" value="Peppers">Peppers</br>
                     <input type="checkbox" name="toppings[]" value="Garlics">Garlics</br>
                     <input type="checkbox" name="toppings[]" value="Olives">Olives</br>
                 </fieldset>
                 <input type="submit" value="Order Pizza">
            </form>
        @endsection