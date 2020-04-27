@extends('modules.layout')

@section('title')
Pichincha+
@endsection

@section('meta-tags')
	<meta name="description" content="Distintas Actividades relacionadas con el Colegio Nacional Pichincha" />
	<meta name="keywords" content="banda, pichincha, potosí, bolivia, 7 de mayo"/>
	<meta name="author" content="HeraldCNP - Herald Choque Vargas" />

	<!-- OPENGRAPH -->
	<meta property="og:title" content="Pichincha+ | Colegio Nacional Pichincha" />
	<meta property="og:type" content="college" />
	<meta property="og:site_name" content="Pichincha+ Colegio Nacional Pichincha" />
	<meta property="og:description" content="Distintas Actividades relacionadas con el Colegio Nacional Pichincha" />
	<meta property="og:image" content="{{ asset('images/banner/pichincha+.jpg') }}"/>
@endsection

@section('header')
	<div class="container-fluid d-flex flex-column justify-content-center align-items-center" id="cnp">
		<h1 class="display-4 text-white text-center"><p>PICHINCHA+</p></h1>
		<div class="flechaAbajo text-center mt-5 pt-2">
			<a data-scroll href="#menu"><i class="icon-angle-down"></i></a>
		</div>
	</div>
@endsection

@section('contenido')
	<div class="row mt-4">
			<div class="col-sm-6 text-center">
				<div class="activite">
					<a href="{{ route('team') }}" target="_blank">
						<h3><strong>Tecnologías de Información y Comunicación TIC-PICHINCHA</strong></h3>
						<img class="img-fluid redondo" src="{{ asset('images/cnp/logotic.png') }}" width="300px" alt="Pichincha de Ayer Hoy y Siempre"></a>
					<p><small>Tecnologías de Información y Comunicación TIC-PICHINCHA</small></p>
					<p class="lead">Equipo de estudiantes y ex alumnos que se encargan de toda la imagen digital y distintas redes sociales del Colegio Nacional Pichincha</p>
				</div>
                <div class="activite">
	                <a href="https://www.facebook.com/Pichincha-de-Ayer-Hoy-y-Siempre-702198676569541/?ref=ts&fref=ts" target="_blank">
	                <h3><strong>Pichincha de Ayer Hoy y Siempre</strong></h3>
				    <img class="img-fluid redondo" src="{{ asset('images/cnp/cnp1.jpg') }}" width="300px" alt="Pichincha de Ayer Hoy y Siempre"></a>
				    <p><small>Pichincha de Ayer Hoy y Siempre</small></p>
				    <p class="lead">Programa de Television Pichincha de Ayer Hoy y Siempre emitida de lunes a viernes a horas 22:00 pm a 23:00 Cotap TV Cable 82 - Señal Abierta 45</p>
			    </div>
			    <div class="activite">
	                <a href="radio.php">
	                <h3><strong>Pichincha Radio</strong></h3>
				    <img class="img-fluid" src="{{ asset('images/cnp/cnp2.png') }}" width="300px" alt="Pichincha de Ayer Hoy y Siempre"></a>
				    <p><small>Logo Pichincha Radio</small></p>
				    <p class="lead">Radio-Online Pichincha Radio con emisiones especiales 2 veces por semana donde podremos enterarnos de todo lo que sucede en la vieja casona ademas de compartir buenos momentos y mucha música, hecho por pichincheños para pichincheños de corazón</p>
			    </div>
			</div>
			<div class="col-sm-6 text-center">
                <div class="activite">
                	<a href="https://www.facebook.com/Furia-Roja-Pichincha-957977190963704/?ref=ts&fref=ts" target="_blank">
                	<h3><strong>Furia Roja</strong></h3>
			    	<img class="img-fluid redondo" width="300px" src="{{ asset('images/cnp/cnp3.jpg') }}" alt="Pichincha de Ayer Hoy y Siempre"></a>bx
			    	<p><small>Furia Roja</small></p>
			    	<p class="lead">Furia Roja la gran barra brava del Club Deportivo Cultural Pichincha conformada por todo aquel hincha entusiasta del Colegio Nacional Pichincha</p>
			    </div>
                
			    <div class="activite">
                <a href="https://www.facebook.com/pichincha.imagenes/?fref=ts" target="_blank">
                <h3><strong>Pichincha Imágenes</strong></h3>
			    <img class="img-fluid" width="300px" src="{{ asset('images/cnp/cnp4.png') }}" alt="Pichincha de Ayer Hoy y Siempre"></a>
			    <p><small>Pichincha Imágenes</small></p>
			    <p class="lead">Blog de imagenes especialmente dedicadas al Colegio Nacional Pichincha</p>
			    </div>
			</div>
	</div>
@endsection