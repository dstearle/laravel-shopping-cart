@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4 col">

            {{-- Title --}}
            <h1>Sign In</h1>

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
            <form method="post" action="{{ route('user.signup') }}">

                {{-- Email --}}
                <div class="form-group">

                    <label for="email">Email</label>

                    <input type="text" class="form-control" id="email" name="email">

                </div>

                {{-- Password --}}
                <div class="form-group">

                    <label for="password">Password</label>

                    <input type="password" class="form-control" id="password" name="password">
                    
                </div>

                {{-- Submit Button --}}
                <button class="btn btn-primary" type="submit">Sign In</button>

                {{ csrf_field() }}

            </form>
            
        </div>

    </div>

@endsection