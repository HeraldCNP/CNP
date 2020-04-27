@extends('modules.layout')

@section('title')
Team TiC
@endsection

@section('meta-tags')
	<meta name="description" content="Equipo de Tecnologias de Informacion y Comunicación Pichincha" />
	<meta name="keywords" content="Team TiC, bandapichincha, potosí, bolivia, 7 de mayo"/>
	<meta name="author" content="HeraldCNP - Herald Choque Vargas" />

	<!-- OPENGRAPH -->
	<meta property="og:title" content="Team TiC | Colegio Nacional Pichincha" />
	<meta property="og:type" content="escuela" />
	<meta property="og:site_name" content="Team TiC Colegio Nacional Pichincha" />
	<meta property="og:description" content="Equipo de Tecnologias de Informacion y Comunicación Pichincha" />
	<meta property="og:image" content="{{ asset('images/banner/banda1.jpg') }}"/>
@endsection

@section('header')
    <section class="container-fluid d-flex flex-column justify-content-center align-items-center" id="audio">
        <h1 class="display-4 text-white text-center"><p>Equipo de Tecnologías de Información y Comunicación PICHINCHA</p></h1>
        <div class="flechaAbajo text-center mt-5 pt-2">
            <a href="#menu" data-scroll><i class="icon-angle-down"></i></a>
        </div>
    </section>
@endsection

@section('contenido')
	<div class="row">
		<div class="col-12">
	    	<h2 class="text-center"><p>Team TiC Pichincha</p></h2>
	    </div>
	</div>
	<div class="row">
        <div class="col-md-4 text-center my-2">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Herald Choque Vargas</h2>
            <p class="text-muted">Diseño y Desarrollo Web</p>
            <div class="team">
                <ul class="redes">
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-youtube"></i></a></li>
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                </ul>
            </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 text-center my-2">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Cristian Flores</h2>
            <p class="text-muted">Escritor</p>
            <div class="team">
                <ul class="redes">
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-youtube"></i></a></li>
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                </ul>
            </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 text-center my-2">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Jhonathan Campos</h2>
            <p class="text-muted">Diseño Gráfico y Video</p>
            <div class="team">
                <ul class="redes">
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-youtube"></i></a></li>
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center my-2">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Cris Pocholito</h2>
            <p class="text-muted">Diseño Gráfico</p>
            <div class="team">
                <ul class="redes">
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-youtube"></i></a></li>
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center my-2">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Kevin No esta!!!</h2>
            <p class="text-muted">Edición de Audio</p>
            <div class="team">
                <ul class="redes">
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-youtube"></i></a></li>
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center my-2">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Marco Alurralde</h2>
            <p class="text-muted">Diseño Gráfico</p>
            <div class="team">
                <ul class="redes">
                    <li><a href=""><i class="icon-facebook"></i></a></li>
                    <li><a href=""><i class="icon-youtube"></i></a></li>
                    <li><a href=""><i class="icon-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- /.row -->
@endsection