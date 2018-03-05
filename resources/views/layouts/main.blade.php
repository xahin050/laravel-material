<!DOCTYPE html>
<html>

@include('partials.head')

<body>
	
	@include('partials.nav')

	<div class="container">
		
		@yield('contents')

	</div>

	@include('partials.footer')
	
	@include('partials.footerjs')
</body>
</html>