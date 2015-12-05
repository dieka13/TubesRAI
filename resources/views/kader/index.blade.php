@extends('master_layout')

@section('content')
<div class="row">
	<div class="small-12">
		<h1>Selamat Datang</h1>
		<div class="callout"> 
			{{ Auth::user()->nama }}
			{{ Auth::user()->hak_akses }}
		</div>
	</div>
</div>
@stop