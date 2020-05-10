
        @extends('layouts.app')

        @section('content')
                <!-- using blade interpolation to read data sent by  routes directly -->
                {{-- <p>{{ $type }} | {{ $base }} | {{ $price }}</p> --}}
<!-- using blade condition directives to control data-->

                {{-- <!-- @if ($price >15) --}}
                {{-- <p>this pizza is expensive</p> --}}
                {{-- @elseif ($price < 5)      --}}
                {{-- <p>this pizza is cheap</p> --}}
                {{-- @else
                <p>this pizza is normal priced</p>
                @endif

                @php 
                   $str="also u can write pure php code between this blade dirctives  ";
                   echo $str;
                @endphp --> --}}

<!-- using blade loops directives to control data-->

                {{-- @for($i = 0; $i < 5; $i++)
                    <p>the value is {{ $i }}</p>
                @endfor  --}}
                
                {{-- @for($i = 0; $i < count($some); $i++)
                    <p> {{ $some[$i]['type'] }}</p>
                    <p> {{ $some[$i]['base'] }}</p>
                @endfor --}}
                {{-- @if($name != null || $age !=null)
                <p>Name:  {{ $name }} | Age: {{ $age }}</p>
                </hr>
                @endif --}}
            <div class="wrapper pizza-index">
                <h1>Pizza Orders</h1>
                @foreach($pizzas as $pizza)
                    <div class="pizza-item">
                        <img src="/img/pizza.png" alt="pizza icon">
                    <h3><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name}}</a></h3>
                </div>
                  
                    @endforeach
            </div>
                    
                
                  <p> {{ session('msg')}} </p>
            </div>
        </div>
        

        @endsection
    
