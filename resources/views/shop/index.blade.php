@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

<div class="row">

	<div class="col-sm-6">

		<div class="card">

			<div class="card-body">

				<div class="row">

					<img 
						class="img-responsive mx-auto" 
						style="max-height: 150px"
						src="https://images-na.ssl-images-amazon.com/images/I/61GMn0FD3IL._SX361_BO1,204,203,200_.jpg" 
						alt="Card image cap"
					>
					
				</div>

				<h5 class="card-title">Product Title</h5>

				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates a odit nemo sapiente. Eos, quo.</p>

				<div>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>

			</div>

		</div>

	</div>

</div>

@endsection