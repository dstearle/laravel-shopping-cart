@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

<div class="row">

	<div class="col-sm-6 col-md-4">

		<div class="card">

			<div class="card-body">

				{{-- Image --}}
				<div class="row thumbnail">

					<img 
						class="img-responsive mx-auto" 
						src="https://images-na.ssl-images-amazon.com/images/I/61GMn0FD3IL._SX361_BO1,204,203,200_.jpg" 
						alt="Card image cap"
					>
					
				</div>

				{{-- Title --}}
				<h5 class="card-title">Product Title</h5>

				{{-- Description --}}
				<p class="card-text description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates a odit nemo sapiente. Eos, quo.</p>

				{{-- Price & Add To Cart Button --}}
				<div class="row px-3">

					<div class="col-6 my-auto price">$12</div>

					<a href="#" class="btn btn-primary bg-success col-6">Add To Cart</a>

				</div>

			</div>

		</div>

	</div>

</div>

@endsection