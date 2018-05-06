<!DOCTYPE html>
<html>
	<head>
		<title>Broadbrand</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                
		<link rel="stylesheet" href="{{url('/front/CSS/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{url('/front/CSS/slick.css')}}">
		<link rel="stylesheet" href="{{url('/front/CSS/slick-theme.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('/front/CSS/main.css')}}">
		<script src="{{url('/front/JS/fontawesome-all.js')}}"></script>
	</head>
	<body>
		<div class="container-fluid">

			<!-- Navigation Bar -->
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="{{url('front/index.html')}}">
			    <img src="Images/letter-b.PNG" width="30" height="30" class="d-inline-block align-top" alt="">
			    Broadband
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ">
			      <li class="nav-item active">
			        <a class="nav-link" href="{{url('front/index.html')}}">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{url('front/All Providers.html')}}">Providers</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{url('front/Search.html')}}">Broadband Plans</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{url('front/#')}}">DashBoard</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{url('front/Search.html')}}"><i class="fas fa-search"></i></a>
			      </li>
			    </ul>
			  </div>
			</nav>

                        
                        
            @yield('content')
                        

			<!-- footer -->
			<footer>
				<p>&#169; 2018 <span>Broadband</span>. All rights reserved</p>
			</footer>

		</div>

		<script src="{{url('front/JS/jquery-3.3.1.min.js')}}"></script>
		<script src="{{url('front/JS/bootstrap.min.js')}}"></script>
		<script src="{{url('front/JS/slick.min.js')}}"></script>
		<script src="{{url('front/JS/HomeScript.js')}}"></script>
	</body>
</html>