<nav class="navbar navbar-expand-lg navbar-light bg-secondary">

	{{-- Brand --}}
	<a class="navbar-brand text-white" href="#">Navbar</a>

	{{-- Collapse Toggle --}}
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

		<span class="navbar-toggler-icon"></span>

	</button>

	{{-- Collapse Content --}}
	<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav ml-auto">

			{{-- Shopping Cart --}}
			<li class="nav-item">
				<a class="nav-link text-white" href="#">
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

					<a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>

					<a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>

					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="#">Something else here</a>
					
				</div>

			</li>

		</ul>

	</div>

</nav>