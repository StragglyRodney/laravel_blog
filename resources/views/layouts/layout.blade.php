<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<title>Cover Template for Bootstrap</title>

		<!-- Custom styles for this template -->
		<link href="/css/cover.css" rel="stylesheet">
	</head>
	<body class="text-center">
		<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
			<header class="masthead mb-auto">
				<div class="inner">
					<h3 class="masthead-brand">Cover</h3>
					<nav class="nav nav-masthead justify-content-center">
						<a class="nav-link active" href="#">Home</a>
						<a class="nav-link" href="#">Features</a>
						<a class="nav-link" href="#">Contact</a>
					</nav>
				</div>
			</header>
			@include('layouts.maintext')
			@include('layouts.footer')
		</div>
	</body>
</html>