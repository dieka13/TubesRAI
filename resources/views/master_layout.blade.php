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

	<nav>
		<div class="top-bar">
		  <div class="top-bar-left">
		    <ul class="dropdown menu">
		      <li class="menu-text">Aplikasi Kaderisasi Al-Fath</li>
		    </ul>
		  </div>
		  <div class="top-bar-right">
		    <ul class="dropdown menu" data-dropdown-menu>
				<li class="has-submenu">
			        <a href="#">{{ Auth::user()->nama }} ({{ Auth::user()->hak_akses }})</a>
			        <ul class="submenu menu" data-submenu>
			          <li><a href="#">One</a></li>
			          <li><a href="#">Two</a></li>
			          <li><a href="#">Three</a></li>
			        </ul>
		      	</li>
		    </ul>
		  </div>
		</div>
	</nav>


	<div class="row">
		<div class="small-12 medium-3 columns">
			@section('sidebar')
			<h2>{{ Auth::user()->nama }}</h2>
			<ul class="vertical menu" data-accordion-menu>
			  <li>
			    <a href="#">Artikel</a>
			    <ul class="menu vertical nested">
			      <li>
			        <a href="#">Buat Artikel</a>
			      </li>
			  </ul>
			  </li>
			  <li>
			    <a href="#">Kegiatan</a>
			    <ul class="menu vertical nested">
			      <li><a href="#">Tambah Kegiatan</a></li>
			      <li><a href="#">Item 2B</a></li>
			    </ul>
			  </li>
			  <li>
			    <a href="#">Prestasi</a>
			    <ul class="menu vertical nested">
			      <li><a href="#">Tambah Prestasi</a></li>
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