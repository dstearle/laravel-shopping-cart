@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

<div class="row">

	<div class="col-sm-6">

		<div class="card">

			<div class="card-body">

				<div class="row thumbnail">

					<img 
						class="img-responsive mx-auto" 
						src="https://images-na.ssl-images-amazon.com/images/I/61GMn0FD3IL._SX361_BO1,204,203,200_.jpg" 
						alt="Card image cap"
					>
					
				</div>

				<h5 class="card-title">Product Title</h5>

				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates a odit nemo sapiente. Eos, quo.</p>

				<a href="#" class="btn btn-primary bg-success float-right">Add To Cart</a>

			</div>

		</div>

	</div>

</div>

@endsection