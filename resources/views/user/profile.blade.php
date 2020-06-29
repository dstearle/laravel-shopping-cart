@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8 offset-md-2">

            {{-- Title --}}
            <h1>Profile</h1>

            <hr>

            {{-- Orders --}}
            <h2>Your Orders</h2>

            <div class="card text-center">

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">First item</li>
                        
                    </ul>

                </div>

                <div class="card-footer text-muted">2 days ago</div>

            </div>
            
        </div>

    </div>

@endsection