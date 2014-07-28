<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="///netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

			@yield('main')
		</div>
	</body>
</html>
