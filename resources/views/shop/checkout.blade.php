@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

    <div class="row">

        <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mb-3">

            {{-- Title --}}
            <h1>Checkout</h1>

            {{-- Total --}}
            <h4>Your Total: ${{ $total }}</h4>

        </div>

    </div>

@endsection