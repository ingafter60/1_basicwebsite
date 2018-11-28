<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basicwebsite</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	@include('partial.navbar')

	<div class="container">
		@if(Request::is('/'))
			@include('partial.showcase')
		@elseif(Request::is('about'))
			@include('partial.aboutshowcase')
		@else(Request::is('contact'))
			@include('partial.contactshowcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('partial.sidebar')
			</div>
		</div>	
	</div>

	<div id="footer" class="text-center">
		<p>Copyright 2018 &copy; ingafter60</p>
	</div>
	
</body>
</html>