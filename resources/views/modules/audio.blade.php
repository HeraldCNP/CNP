@extends('modules.layout')

@section('title')
Audio
@endsection

@section('meta-tags')
	<meta name="description" content="Distintas Actividades relacionadas con el Colegio Nacional Pichincha"/>
	<meta name="keywords" content="pichincha, potosí, bolivia, 7 de mayo"/>
	<meta name="author" content="HeraldCNP - Herald Choque Vargas" />

	<!-- OPENGRAPH -->
	<meta property="og:title" content="Audio | Colegio Nacional Pichincha" />
	<meta property="og:type" content="College" />
	<meta property="og:site_name" content="Colegio Nacional Pichincha" />
	<meta property="og:description" content="Canciones dedicadas al glorioso Colegio Nacional Pichincha"/>
	<meta property="og:image" content="{{ asset('images/banner/audio.jpg') }}" />
@endsection

@section('header')
	<section class="container-fluid d-flex flex-column justify-content-center align-items-center" id="audio">
		<h1 class="display-4 text-white text-center"><p>AUDIO</p></h1>
		<div class="flechaAbajo text-center mt-5 pt-2">
			<a href="#menu" data-scroll><i class="icon-angle-down"></i></a>
		</div>
	</section>
@endsection

@section('contenido')
	<div class="row">
		<div class="col-12">
	    	<h2 class="text-center"><p>Música dedicada al Colegio Nacional Pichincha</p></h2>
	    </div>
	</div>
	<div class="row mt-y3">
		<div class="col-md-8 text-center">
			<img src="{{ asset('images/logo_pichincha_oficial.png') }}" width="200px" alt="">				    	
		</div>
		<div class="col-md-4">
			<!-- Goole Adsence -->
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- CNP -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-7125877501142047"
				 data-ad-slot="2476893175"
				 data-ad-format="auto"
				 data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>		
	</div>
	<div class="row my-4">
		<div class="col-md-6 text-center">
			<img class="img-fluid  my-2" src="{{ asset('images/3.png') }}" id="img-album" width="300px" alt="">
			<audio id="player" controls></audio>
		</div>

		<div class="col-md-6 text-center">
			<button class="btn btn-danger" id="shuffle"><i class="icon-random"></i></button>
			<ul class="list-group" id="playlist"></ul>
		</div>
	</div>
@endsection