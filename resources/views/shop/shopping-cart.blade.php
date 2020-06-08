@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

    {{-- If cart has items --}}
    @if(Session::has('cart'))

        {{-- Shopping Cart --}}
        <div class="row">

            <div class="col-sm-6 col-md-6">

                <ul class="list-group">

                    {{-- Foreach loop for cart items --}}
                    @foreach($products as $product)

                        {{-- Cart Item --}}
                        <li class="list-group-item">

                            {{-- Item Quantity --}}
                            <span class="badge">{{ $product['qty'] }}</span>

                            {{-- Item Title --}}
                            <strong>{{ $product['item']['title'] }}</strong>

                            {{-- Total Price --}}
                            <span class="label label-success">{{ $product['price'] }}</span>

                            {{-- Button --}}
                            <button type="button" data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">
                                
                                Action

                                <span class="caret"></span>
                            
                            </button>

                            {{-- Dropdown Menu --}}
                            <ul class="dropdown-menu">

                                <li><a href="">Reduce by 1</a></li>

                                <li><a href="">Reduce All</a></li>

                            </ul>

                        </li>

                    @endforeach

                </ul>

            </div>

        </div>

        {{-- Totals Listing --}}
        <div class="row">

            <div class="col-sm-6 col-md-6">

                <strong>Total: {{ $totalPrice }}</strong>

            </div>

        </div>

        <hr>

        {{-- Checkout Button --}}
        <div class="row">

            <div class="col-sm-6 col-md-6">

                <button class="btn btn-success">Checkout</button>

            </div>

        </div>

    @else
    @endif

@endsection