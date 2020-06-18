@extends('layouts.master')

@section('title')

    Laravel Shopping Cart

@endsection

@section('content')

	{{-- Foreach loop for returning three products at a time --}}
	@foreach($products->chunk(3) as $productChunk)

		<div class="row my-3">

			{{-- Foreach loop for individual product items --}}
			@foreach($productChunk as $product)

				<div class="col-12 my-3 col-sm-6 col-md-4">

					<div class="card">

						<div class="card-body">

							{{-- Image --}}
							<div class="row thumbnail mb-3">

								<img 
									class="img-responsive mx-auto" 
									src="{{ $product->imagePath }}" 
									alt="Card image cap"
								>
								
							</div>

							{{-- Title --}}
							<h5 class="card-title">{{ $product->title }}</h5>

							{{-- Description --}}
							<p class="card-text description">{{ $product->description }}</p>

							{{-- Price & Add To Cart Button --}}
							<div class="row px-3">

								<div class="col-6 my-auto price">${{ $product->price }}</div>

								<a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary bg-success col-6">Add To Cart</a>

							</div>

						</div>

					</div>

				</div>

			@endforeach

		</div>

	@endforeach

@endsection