@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8 offset-md-2">

            {{-- Title --}}
            <h1>Profile</h1>

            <hr>

            <h2>Your Orders</h2>

            {{-- Orders --}}
            @foreach ($orders as $order)
                
                <div class="card text-center">

                    <div class="card-body">

                        <ul class="list-group">

                            {{-- Order Items --}}
                            @foreach ($order->cart->items as $item)
                                
                                <li class="list-group-item">
                                    
                                    ${{ $item['price'] }}
                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Units

                                </li>

                            @endforeach

                        </ul>

                    </div>

                    {{-- Total Price --}}
                    <div class="card-footer text-muted">Total Price: ${{ $order->cart->totalPrice }}</div>

                </div>

            @endforeach
            
        </div>

    </div>

@endsection