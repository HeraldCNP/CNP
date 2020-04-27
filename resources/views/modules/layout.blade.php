<!DOCTYPE html>
<html lang="es-Bo" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="google-site-verification" content="3E8-lLeZyFYiZnRo4fBOT229lBaN7ulH_Gh0AwX6U3I" />
	<title>@yield('title') | Colegio Nacional Pichincha</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	{{-- Meta tags --}}
	@yield('meta-tags')
	{{-- FIN Meta tags --}}

	<!-- LLAMADAS CSS -->
	<link type="image/x-icon" href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118089406-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-118089406-1');
	</script>

</head>

<body class="contenido">
<header id="top">
	{{-- Header --}}
	@yield('header')
	{{-- Fin Header --}}
</header>

<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark" id="menu">
  <div class="container"> 
  <a class="navbar-brand" href="{{ route('inicio') }}">
    <img src="{{ asset('images/logo_pichincha_oficial.png') }}" width="50px" alt="Logo Colegio Nacional Pichincha"> Pichincha
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-auto text-center">
      <li class="nav-item">
        <a href="{{ route('inicio') }}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navcnp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ingresar
          </a>
          <div class="dropdown-menu" aria-labelledby="navcnp">
            <a href="http://www.colegiopichincha.com/RegCal/main.php?cole=COLEGIO%20NACIONAL%20PICHINCHA&ciudads=POTOSI&sr=iniciando" target="_blank" class="nav-link">Docentes</a>
            <a href="http://www.colegiopichincha.com/RegCal/main.php?cole=COLEGIO%20NACIONAL%20PICHINCHA&ciudads=POTOSI&sr=iniciando" target="_blank" class="nav-link">Estudiantes</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navcnp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Historia
          </a>
          <div class="dropdown-menu" aria-labelledby="navcnp">
            <a class="dropdown-item" href="{{ route('colegio') }}">Colegio</a>
            <a class="dropdown-item" href="{{ route('banda') }}">Banda</a>
            <a class="dropdown-item" href="{{ route('calche') }}">Ck´alcheños</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navcnp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Multimedia
        </a>
        <div class="dropdown-menu" aria-labelledby="navcnp">
          <a class="dropdown-item" href="{{ route('audio') }}">Audio</a>
          <a class="dropdown-item" href="http://pichincha-powerful.blogspot.com/" target="_blank">Imagenes</a>
          <a class="dropdown-item disabled" href="radio">Pichincha Radio</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('cnp') }}">+Pichincha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<div class="container">
	{{-- Contenido --}}
	@yield('contenido')
	{{-- FIN Contenido --}}
</div>

<footer class="footer">
    <div class="container">
        <p><a class="text-white" href="{{ route('team') }}">Team TiC Pichincha</a> &copy; 2020 Todos los derechos reservados</p>
        <ul class="redes">
            <li><a href="https://www.facebook.com/ColNalPichincha/" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="https://youtube.com/c/ColegioNacionalPichincha" target="_blank"><i class="icon-youtube"></i></a></li>
            <li><a href="https://twitter.com/ColNalPichincha" target="_blank"><i class="icon-twitter"></i></a></li>
        </ul>
    </div>
</footer>
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
	<script src="{{ asset('js/sitio.js') }}"></script>
</body>
</html>