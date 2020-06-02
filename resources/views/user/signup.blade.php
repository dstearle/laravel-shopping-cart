@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4 col">

            {{-- Title --}}
            <h1>Sign Up</h1>

            {{-- If errors exist dispaly error message --}}
            @if(count($errors) > 0)

                <div class="alert alert-danger">

                    {{-- Loops through all errors --}}
                    @foreach($errors->all() as $error)

                        <p>{{ $error }}</p>

                    @endforeach

                </div>

            @endif

            {{-- Form --}}
            <form method="post">

                {{-- Email --}}
                <div class="form-group">

                    <label for="email">Email</label>

                    <input type="text" id="email" name="email">

                </div>

                {{-- Password --}}
                <div class="form-group">

                    <label for="password">Password</label>

                    <input type="password" id="password" name="password">
                    
                </div>

                {{-- Submit Button --}}
                <button class="btn btn-primary" type="submit">Sign Up</button>

            </form>
            
        </div>

    </div>

@endsection