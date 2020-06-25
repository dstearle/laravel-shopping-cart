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
            <h4 class="my-5">Your Total: ${{ $total }}</h4>

            {{-- Error Alert --}}
            <div id="change-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">

                {{ Session::get('error') }}
                
            </div>

            {{-- Form --}}
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">

                <div class="row">

                    {{-- Name --}}
                    <div class="col-sm-12">

                        <div class="form-group">

                            <label for="name">Name</label>

                            <input type="text" id="name" class="form-control" name="name" required>

                        </div>

                    </div>

                    {{-- Address --}}
                    <div class="col-sm-12">

                        <div class="form-group">

                            <label for="address">Address</label>

                            <input type="text" id="address" class="form-control" name="address" required>

                        </div>

                    </div>

                    {{-- Card Holder Name --}}
                    <div class="col-sm-12">

                        <div class="form-group">

                            <label for="card-name">Card Holder Name</label>

                            <input type="text" id="card-name" class="form-control" required>

                        </div>

                    </div>

                    {{-- Credit Card Number --}}
                    <div class="col-sm-12">

                        <div class="form-group">

                            <label for="card-number">Credit Card Number</label>

                            <input type="text" id="card-number" class="form-control" required>

                        </div>

                    </div>

                    {{-- Expiration Date --}}
                    <div class="col-sm-12">

                        <div class="row">

                            {{-- Month --}}
                            <div class="col-sm-6">

                                <div class="form-group">

                                    <label for="card-expiry-month">Expiration Month</label>

                                    <input type="text" id="card-expiry-month" class="form-control" required>

                                </div>

                            </div>

                            {{-- Year --}}
                            <div class="col-sm-6">

                                <div class="form-group">

                                    <label for="card-expiry-year">Expiration Year</label>

                                    <input type="text" id="card-expiry-year" class="form-control" required>

                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- CVC --}}
                    <div class="col-sm-12">

                        <div class="form-group">

                            <label for="card-cvc">CVC</label>

                            <input type="text" id="card-cvc" class="form-control" required>

                        </div>

                    </div>

                </div>

                {{-- Protection --}}
                {{ csrf_field() }}

                {{-- Purchase Button --}}
                <button type="submit" class="btn btn-success">Purchase</button>

            </form>

        </div>

    </div>

@endsection

@section('scripts')

    {{-- Stripe API --}}
    <script src="https://js.stripe.com/v3/"></script>
    {{-- Public JS --}}
    <script src="{{ URL::to('src/js/checkout.js') }}"></script>

@endsection