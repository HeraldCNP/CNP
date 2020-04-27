@extends('modules.layout')

@section('title')
Contacto
@endsection

@section('meta-tags')
	<meta name="description" content="Contacto Colegio Nacional Pichincha" />
	<meta name="keywords" content="banda, pichincha, potosí, bolivia, 7 de mayo"/>
	<meta name="author" content="HeraldCNP - Herald Choque Vargas" />

	<!-- OPENGRAPH -->
	<meta property="og:title" content="Contacto | Colegio Nacional Pichincha" />
	<meta property="og:type" content="escuela" />
	<meta property="og:site_name" content="Contacto Colegio Nacional Pichincha" />
	<meta property="og:description" content="Contacto Colegio Nacional Pichincha" />
	<meta property="og:image" content="{{ asset('images/banner/contacto1.jpg') }}"/>
@endsection

@section('header')
	<section class="container-fluid d-flex flex-column justify-content-center align-items-center" id="contacto">
		<h1 class="display-4 text-white text-center"><p>CONTACTO</p></h1>
		<div class="flechaAbajo text-center mt-5 pt-2">
			<a data-scroll href="#menu"><i class="icon-angle-down"></i></a>
		</div>
	</section>
@endsection

@section('contenido')
    <div class="row">
    <div class="col-12">
    	<h2 class="text-center my-3"><p>CONTACTENOS</p></h2>
    </div>
        <div class="col-sm-6 text-center my-3">
            <div class="gmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.899734953792!2d-65.75521188509079!3d-19.588795786795842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e709d89b0c7%3A0xf1e85c41d4d12371!2sColegio+Nacional+Pichincha!5e0!3m2!1ses-419!2s!4v1492832396534" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-sm-6 my-3">
            <ul class="row">
                <li class="col-sm-6 text-center">
                    <address>
                        <h5>Colegio Nacional Pichincha</h5>
                        <p>Plaza 6 de Agosto <br>
                        Potosí - Bolivia</p>
                        <p>Telefono: 2 6223382 <br>
                    </address>

                    <img class="img-fluid" src="{{ asset('images/logo_pichincha_oficial.png') }}" alt="Logo oficial del Colegio Nacional Pichincha">
                </li>


                <li class="col-sm-6 text-center">
                    <address>
                        <h5>Seccion Tecnica Industrial Pichincha</h5>
                        <p>Calle Oruro S/N <br>
                        </p>
                        <p>Telefono: <br>
                    </address>
                    <img class="img-fluid" src="{{ asset('images/industrial_pichincha.png') }}" alt="Logo Seccion Tecnica Industrial Colegio Nacional Pichincha">
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6 text-center my-3">
    	<h2>Deja tu mensaje</h2>
        <div class="status alert alert-success" style="display: none"></div>
        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="enviar.php">
            <div>
                <br>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Nombre Completo" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Correo Electronico" required>
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono">
                </div>
                <div class="form-group">
                    <label>Asunto</label>
                    <input type="text" name="subject" class="form-control" placeholder="Asunto" required>
                </div>
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea name="message" id="message" placeholder="Mensaje" required class="form-control" rows="8"></textarea>
                </div>                        
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-danger btn-lg" required="required">Enviar Mensaje</button>
                </div>                    
            </div>
        </form>
    	</div>
            <div class="col-sm-6 text-center redes my-3">
                <h2>Redes Sociales</h2>
                <br>
                <a href="https://www.facebook.com/ColNalPichincha/" class="icon-facebook"  target="_blank"> <p>Colegio Nacional Pichincha</p></a>
                <br>
                <a href="https://youtube.com/c/ColegioNacionalPichincha" class="icon-youtube"  target="_blank"> <p>Canal del Colegio Nacional Pichincha</p>
                <br>
                <a href="https://twitter.com/ColNalPichincha" class="icon-twitter"  target="_blank"> <p>Colegio Nacional Pichincha</p></a>
            </div>
        
    </div><!--/.row-->
@endsection