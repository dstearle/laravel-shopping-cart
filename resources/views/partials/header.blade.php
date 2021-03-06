<nav class="navbar navbar-expand-lg navbar-light bg-secondary">

	{{-- Brand --}}
	<a class="navbar-brand text-white" href="{{ route('product.index') }}">Legendary Books</a>

	{{-- Collapse Toggle --}}
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

		<span class="navbar-toggler-icon"></span>

	</button>

	{{-- Collapse Content --}}
	<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav ml-auto">

			{{-- Shopping Cart --}}
			<li class="nav-item">

				<a class="nav-link text-white" href="{{ route('product.shopping-cart') }}">

					{{-- Item Counter --}}
					<span class="badge badge-danger">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>

					{{-- Icon --}}
					<i class="fas fa-shopping-cart"></i> Shopping Cart

				</a>

			</li>

			{{-- User Account --}}
			<li class="nav-item dropdown">

				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user"></i> User Account
				</a>

				{{-- Dropdown --}}
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					{{-- If Use Is Logged In --}}
					@if(Auth::check())

						<a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>

						<div class="dropdown-divider"></div>

						<a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>

					{{-- If User Is Not Logged In --}}
					@else

						<a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>

						<a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>

					@endif
					
				</div>

			</li>

		</ul>

	</div>

</nav>