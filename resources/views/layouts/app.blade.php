<!DOCTYPE html>
<html>
<head>
	<title>BattleC19</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/datta-able/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/dist/css/demo.css') }}">
	<style type="text/css">
		body{
            background-color: black;
            color: white;
        }
		.blue-navbar {
			background-color: #06264D !important;
		}
		.collapse ul li a{
			padding: 15px 25px !important;
		    color: white !important;
		    font-size: 16px !important;
		    display: block;
		    -webkit-transition: all 0.3s ease;
		    -moz-transition: all 0.3s ease;
		    transition: all 0.3s ease;
		}
		.lab-btn {
			;
    		display: block;
		}
		.lab-btn.style-2 {
		    background: transparent;
		    border: 2px solid #fff;
		    border-radius: 35%;
		}
		.lab-btn.style-2 span {
		    color: #fff;
		}
	</style>
	@yield('css')
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top blue-navbar">
		<div class="container">
			<a href="{{ url('/') }}"><img src="{{asset('public/images/logo.png')}}" alt="logo" style="height: 60px;"></a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
	    		<ul class="navbar-nav ml-auto">
	      			<li class="nav-item">
	        			<a class="nav-link" href="{{url('/')}}#home">Home</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="{{url('/')}}#contact">Contact</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="{{url('/')}}#activities">Activities</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="{{url('/')}}#gallery">Gallery</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="{{url('/')}}#beside-us">Partners</a>
	      			</li>
	      			<li>
	      				<a href="{{url('/')}}#donation" target="blank" class="lab-btn style-2" style="padding: 15px 40px !important"><span>Donate</span></a>
	      			</li>
	    		</ul>
	  		</div>
		</div>
	</nav>
	@include('layouts.banner')
	@yield('content')
</body>
<script src="{{ asset('public/datta-able/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('public/datta-able/js/pcoded.min.js') }}"></script>
<script src="{{ asset('public/dist/js/bootstrap.min.js') }}"></script>
@yield('js')
</html>