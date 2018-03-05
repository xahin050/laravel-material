	<nav>
		<div class="nav-wrapper blue lighten-1">
			<a href="/" class="brand-logo">&nbsp;&nbsp;BrandText<!-- <img src="brand.png"> --></a>
			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				@if(Auth::check())
					<li><a href="{{ route('logout') }}"><i class="material-icons left">call_made</i> Logout</a></li>
				@else
					<li><a href="{{ route('login') }}"><i class="material-icons left">input</i> Login</a></li>
					<li><a href="{{ route('register') }}"><i class="material-icons left">person_add</i>Register</a></li>
				@endif
			</ul>
			<ul class="side-nav" id="mobile-nav">
				@if(Auth::check())
					<li><a href="{{ route('logout') }}"><i class="material-icons left">call_made</i> Logout</a></li>
				@else
					<li><a href="{{ route('login') }}"><i class="material-icons left">input</i> Login</a></li>
				@endif
			</ul>
		</div>
	</nav>