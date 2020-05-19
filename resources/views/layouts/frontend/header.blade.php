<!-- Header Section Start -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widt=device-width, initial-scale=1.0">
	<title>{{ $companies->nama_company }} - {{ $companies->slogan }}</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&display=swap">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="menu-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="logo" href="/" style="text-decoration: none;">{{ $companies->nama_company }}</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fas fa-bars menu"></i>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="/"><i class="fas fa-home home"></i> Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="/#product"><i class="fab fa-buffer product"></i> Services</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="/blogs"><i class="far fa-newspaper blog"></i> Blogs</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="/#about-us" tabindex="-1" aria-disabled="true"><i class="fas fa-info-circle about"></i> About Us</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</div>
	<!-- Header Section End -->