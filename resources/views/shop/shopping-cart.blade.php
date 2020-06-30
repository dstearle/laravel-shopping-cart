@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

    {{-- If cart has items --}}
    @if(Session::has('cart'))

        {{-- Shopping Cart --}}
        <div class="row my-3">

            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mb-3">

                <ul class="list-group">

                    {{-- Foreach loop for cart items --}}
                    @foreach($products as $product)

                        {{-- Cart Item --}}
                        <li class="list-group-item">

                            {{-- Item Title --}}
                            <strong>{{ $product['item']['title'] }}</strong>

                            {{-- Total Price --}}
                            <span class="badge badge-success">{{ $product['price'] }}</span>

                            {{-- Button --}}
                            <button type="button" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">
                                
                                Action

                                <span class="caret"></span>
                            
                            </button>

                            {{-- Dropdown Menu --}}
                            <ul class="dropdown-menu">

                                <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>

                                <li><a href="">Reduce All</a></li>

                            </ul>

                            {{-- Item Quantity --}}
                            <span class="badge badge-primary">{{ $product['qty'] }}</span>

                        </li>

                    @endforeach

                </ul>

            </div>

        </div>

        {{-- Totals Listing --}}
        <div class="row">

            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">

                <strong>Total: {{ $totalPrice }}</strong>

            </div>

        </div>

        <hr>

        {{-- Checkout Button --}}
        <div class="row">

            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">

                <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>

            </div>

        </div>

    {{-- Else display empty cart --}}
    @else

        {{-- Checkout Button --}}
        <div class="row my-3">

            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mb-3">

                <h2>No Items In Cart!</h2>

            </div>

        </div>

    @endif

@endsection