<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Aplikasi Kaderisasi Al-Fath</title>
	<link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
	<div class="row">
		<div class="small-12 medium-3 columns">
			@section('sidebar')
			<h2>{{ Auth::user()->nama }}</h2>
			<ul class="vertical menu" data-accordion-menu>
			  <li>
			    <a href="#">Account</a>
			    <ul class="menu vertical nested is-active">
			      <li>
			        <a href="{{ url('auth/logout') }}">Logout</a>
			      </li>
			  </li>
			  <li>
			    <a href="#">Kegiatan</a>
			    <ul class="menu vertical nested">
			      <li><a href="#">Item 2A</a></li>
			      <li><a href="#">Item 2B</a></li>
			    </ul>
			  </li>
			  <li>
			    <a href="#">Prestasi</a>
			    <ul class="menu vertical nested">
			      <li><a href="#">Item 2A</a></li>
			      <li><a href="#">Item 2B</a></li>
			    </ul>
			  </li>
			</ul>
			@show
		</div>

		<div class="small-12 medium-9 columns">
			@section('content')
			@show
		</div>
	</div>
	
	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/what-input.min.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>