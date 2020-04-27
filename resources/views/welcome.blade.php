<!DOCTYPE html>
<html lang="es-Bo" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="3E8-lLeZyFYiZnRo4fBOT229lBaN7ulH_Gh0AwX6U3I" />
    <meta name="description" content="Página oficial del colegio nacional pichincha. Fundado en la ciudad de Potosí un 2 de marzo de 1826 por el Mariscal de Ayacucho Antonio José de Sucre, cuyo acto inaugural fue el 7 de mayo del mismo año" />
    <meta name="keywords" content="pichincha, potosí, bolivia, 7 de mayo, colegio"/>
    <meta name="author" content="HeraldCNP - Herald Choque Vargas" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Colegio Nacional Pichincha</title>
    <!-- OPENGRAPH -->
    <meta property="og:title" content="Colegio Nacional Pichincha" />
    <meta property="og:type" content="web" />
    <meta property="og:url" content="https://cnp.colegiopichincha.com" />
    <meta property="og:site_name" content="Colegio Nacional Pichincha" />
    <meta property="og:description" content="Página oficial del Colegio Nacional Pichincha. Fundado en la ciudad de Potosí un 2 de marzo de 1826 por el Mariscal de Ayacucho Antonio José de Sucre, cuyo acto inaugural fue el 7 de mayo del mismo año" />
    <meta property="og:image" content="{{ asset('images/logo_pichincha_oficial.png') }}" />

    <link type="image/x-icon" href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" />

    <!-- LLAMADAS CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta name="google-site-verification" content="3E8-lLeZyFYiZnRo4fBOT229lBaN7ulH_Gh0AwX6U3I" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118089406-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118089406-1');
    </script>
    {{-- PWA --}}
    @laravelPWA
</head>
<body class="contenido">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0&appId=228328260544003&autoLogAppEvents=1"></script>
<header  id="top">
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner banner d-flex flex-column justify-content-center align-items-center" role="listbox">
                <div class="carousel-item active my-5">
                    <div><img class="d-block img-fluid img-slide" src="{{ asset('images/logo_pichincha_oficial.png') }}" alt="First slide"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="titulo">Pichincha</h3>
                        <p class="subti">Colegio Nacional Pichincha 1826 - 2018</p>
                    </div>
                </div>
                <div class="carousel-item my-5">
                    <img class="d-block img-fluid img-slide" src="{{ asset('images/2.png') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="titulo">Honor y Gloria</h3>
                        <p class="subti">¡Pichincha seguirás haciendo historia!</p>
                    </div>
                </div>
                <div class="carousel-item my-5">
                    <img class="d-block img-fluid img-slide" src="{{ asset('images/3.png') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="titulo">¡Pichincha Glorioso!</h3>
                        <p class="subti">¡Por siempre Victorioso!</p>
                    </div>
                </div>
                <div class="carousel-item my-5">
                    <img class="d-block img-fluid img-slide" src="{{ asset('images/4.png') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="titulo">Honor y Gloria</h3>
                        <p class="subti">¡Pichincha seguirás haciendo historia!</p>
                    </div>
                </div>
                <div class="flechaAbajo text-center mt-5 pt-2">
                    <a data-scroll href="#menu"><i class="icon-angle-down"></i></a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
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
                        <a href="http://www.colegiopichincha.com/RegCal/main.php?cole=COLEGIO%20NACIONAL%20PICHINCHA&ciudads=POTOSI&sr=iniciando" target="_blank" class="dropdown-item">Docentes</a>
                        <a href="http://www.colegiopichincha.com/RegCal/main.php?cole=COLEGIO%20NACIONAL%20PICHINCHA&ciudads=POTOSI&sr=iniciando" target="_blank" class="dropdown-item">Estudiantes</a>
                        <a class="dropdown-item" href="{{ route('login') }} " target="_blank">Admin</a>
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

<main class="container">
    <!-- PRESENTACION -->
    <h1 class="d-none">Colegio Nacional Pichincha</h1>
    <div class="row mt-3">
        <div class="col-md-8">
            <article>
                <h2 class="text-center font-weight-bold" id="bienvenido">¡PICHINCHEÑOS DEL MUNDO ,BIENVENIDOS!</h2>
                <div class="audio text-center"><audio id="intro" src="{{ asset('music/intro.mp3') }}" type="audio/mpeg" controls="controls" autoplay="true"></audio></div>
                <div class="lead conta text-center">
                    <div class="marquee">
                        <p> A vísperas de compartir los doscientos años de vida institucional de nuestra vieja casona, tenemos el grato honor de darles la bienvenida, a la página oficial de información y comunicación de nuestra pontificia institución educativa.</p>
                        <p>
                            A las varias generaciones de pichincheños, nos ha tocado construir y escribir la historia, desde “El beso del ídolo” de Guzmán de Rojas, hasta las sagradas notas del himno nacional de Bolivia, que Ignacio Sanjinés sancionó inspirado en los pétreos muros de la vieja casona, han tenido de una u otra forma un paso naciente en rojo y blanco, haciéndose espacio de entre las entrañas de la casona inmortal.</p>
                        <p>
                            Hablar de las múltiples, personas, hechos, y relaciones que encuentran su paso o su nacimiento en el Colegio Nacional Pichincha, exige algo más que las certeras letras de bienvenida, por lo que esperamos que éste espacio motive y despierte la curiosidad de las nuevas generaciones de pichincheños interesados en conocer el árbol genealógico que une las viejas generaciones y tradiciones de pichincheños que han pasado los fríos inviernos entre las arquerías, hablando cada recreo de política, deporte, tecnología, desarrollo, cultura, etc.</p>
                        <p>
                            Éste es un encuentro, una reconciliación responsable, con nuestra historia, cultura y principios que se han forjado en el espíritu de cada pichincheño.</p>
                        <p>
                            El desarrollo socio-cultural nos exige, generar un ambiente de armonía, y equilibrio entre la acepción cultural de antaño, y forjarla con las nuevas formas culturales post-modernas que generen síntesis que caractericen a cada generación productora de cultura y conocimiento, promocionarlas y perpetuarlas en un sin fin de sincretismos que construyan cada día la cultura pichincheña.</p>
                        <p>
                            Cada vez que vean un pichincheño, haciendo rap con charango, a un futbolista bailando C’kalcheños como celebración de un gol, o a las letras de un poeta rimar rojo y blanco, con la lírica acida y dura de la poesía pop moderna, ahí está un pichincheño, innovando.</p>
                        <p>
                            Pichincheños del mundo, de corazón, ex alumnos, padres de familia, docentes, y quienes nos acompañan en espíritu desde el más allá.</p>
                        <p>
                            Sean bienvenidos.
                        </p>
                        <br>
                    </div>
                </div>
            </article>

        </div>

        <div class="col-md-4 hidden-sm-down">
            <aside">
            <h2 class="text-center">Redes Sociales</h2>
            <div class="face">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FColNalPichincha%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=228328260544003" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div class="face">
                <a href="https://twitter.com/intent/tweet?screen_name=ColNalPichincha&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @ColNalPichincha</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="face">
                <script src="https://apis.google.com/js/platform.js"></script>
                <div class="g-ytsubscribe" data-channelid="UCEXHFzASZm1yde8dgy_qEwg" data-layout="full" data-count="default"></div>
            </div>
            <div class="face">
                <a href="{{ asset('Pichincha.apk') }}" target="_blank">
                    <img class="img-fluid rounded " src="{{ asset('images/PichinchaEnTuCelular.jpg') }}" alt="Pichincha en tu celular" width="75%">
                </a>
            </div>
            </aside>
        </div>
    </div>
    <!-- FIN PRESENTACION -->
    <!-- ARTICULOS -->
    {{--<div class="row">--}}
        {{--<div class="col-md">--}}

            {{--<h1 class="text-center mb-5 font-weight-bold">NOTICIAS EN <span style="color:red;text-shadow: black 1px 1px;">ROJO</span> Y <span style="color:white;text-shadow: black 1px 1px;">BLANCO</span></h1>--}}


            {{--<div class="card-deck text-center my-2">--}}
                {{--@foreach($posts as $post)--}}
                    {{--<div class="card ">--}}
                        {{--<div class="card-body">--}}
                            {{--<h3 class="card-title">{{ $post->title }}</h3>--}}
                            {{--<span class="card-subtitle text-muted tag">{{ $post->published_at->format('Y M d') }} - {{ $post->category->name }}</span>--}}
                            {{--<p class="card-text">--}}
                                {{--{{ $post->excerpt }}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--@if($post->photos->count() === 1)--}}
                            {{--<img class="img-fluid" src="{{ $post->photos->first()->url }}" alt="Card image">--}}
                            {{--<figure class=""><img class="img-fluid" src="{{ $post->photos->first()->url }}" alt=""></figure>--}}
                        {{--@elseif($post->photos->count() > 1)--}}
                            {{--<div class="gallery-photos masonry">--}}
                                {{--@foreach($post->photos->take(1) as $photo)--}}
                                    {{--<figure class="gallery-image">--}}
                                        {{--@if($loop->iteration === 1)--}}
                                            {{--<div class="overlay">{{ $post->photos->count() }} Fotos</div>--}}
                                        {{--@endif--}}
                                        {{--<img src="{{ url($photo->url) }}" class="img-fluid" alt="">--}}
                                    {{--</figure>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--@elseif($post->iframe)--}}
                            {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                {{--{!! $post->iframe !!}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--<div class="mt-2">--}}
                            {{--<a href="blog/{{ $post->url }}" class="btn btn-danger">Leer más</a>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer text-muted">--}}
                            {{--@foreach($post->tags as $tag)--}}
                            {{--<span class="tag">#{{ $tag->name }}</span>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}

                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Card title</h4>--}}
                        {{--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                        {{--<p class="card-text">--}}
                            {{--Some quick example text to build on the card title--}}
                            {{--and make up the bulk of the card's content.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<img class="img-fluid" src="{{ asset('images/club.jpg') }}" alt="Card image">--}}
                    {{--<div class="mt-2">--}}
                        {{--<a href="#!" class="btn btn-danger">Go somewhere</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Publicidad</h4>--}}
                        {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
                        {{--<!-- publicidad -->--}}
                        {{--<ins class="adsbygoogle"--}}
                             {{--style="display:block"--}}
                             {{--data-ad-client="ca-pub-7125877501142047"--}}
                             {{--data-ad-slot="4059388114"--}}
                             {{--data-ad-format="auto"></ins>--}}
                        {{--<script>--}}
                            {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
                        {{--</script>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- FIN ARTICULOS -->
    <!-- SORTEOS -->

    <!-- FIN SORTEOS -->
    <div class="row mt-4">
        <div class="col-md text-center ">
        <h1 class="m1-2 font-weight-bold"><span style="color:red;text-shadow: black 1px 1px;">CONCURSO</span>  <span style="color:white;text-shadow: black 2px 2px;">PICHINCHA 2020</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card mb-3 d-inline-block text-center" style="max-width: 100%;">
                <div class="card-header">CONCURSO DE CREACIÓN ARTÍSTICA
                </div>
                <div class="card-body">
                    <h4 class="card-title">CXCIV ANIVERSARIO DEL COLEGIO NACIONAL PICHINCHA</h4>
                    <img class="img-fluid" src="{{ asset('images/concurso.jpg') }}" alt="Card image">
                    <p class="card-text">Si tienes dudas o alguna consulta puedes contactarte con el #: <a href="https://api.whatsapp.com/send?phone=59172418381&text=Deseo%20mas%20informaci%C3%B3n%20sobre%20el%20concurso" target="_blank">72418381</a></p>

                    <a href="{{ asset('convocatoriaCNP.pdf') }}" target="_blank"><button type="button" class="btn btn-danger btn-lg">Descargar Convocatoria</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center">
                    Preguntas Frecuentes
                </div>
                <div class="card-body">
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ¿Como puedo participar?
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Para ser participe solo tienes que enviar tu trabajo (arte creado).
                                        en cualquiera de las siguientes categorias.
                                        Poesía, Música, Pintura y/o dibujo, Fotografía, Video, Arte digital.
                                        a la página de Facebook <a href="https://www.facebook.com/ColNalPichincha" target="_blank">Colegio Nacional Pichincha</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        ¿En qué formato debo enviar mi trabajo?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    En la categoría dibujo y/o pintura con una fotografía a la página de <a
                                            href="https://www.facebook.com/ColNalPichincha" target="_blank">Facebook</a> del colegio, en las categorías música, poesía, fotografía, video o arte digital, necesitamos el trabajo original enviado a la misma página.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        ¿Mi archivo pesa mucho como puedo enviarlo?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Si tu archivo pesa demasiado para enviarlo por Facebook, puedes subirlo a Google drive y pasarnos el link de descarga.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        ¿Hasta cuándo puedo enviar mi trabajo?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    Los trabajos se recepcionaran hasta las 23:59 del día Lúnes 4 de mayo del 2020.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFive">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        ¿Quienes pueden participar en el concurso?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    Cualquier Alumno, Ex Alumno del Colegio Nacional Pichincha y cualquier persona afin al mismo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <p class="card-text">Si tienes dudas o alguna consulta contactate con el #: <a href="https://api.whatsapp.com/send?phone=59172418381&text=Deseo%20mas%20informaci%C3%B3n%20sobre%20el%20concurso" target="_blank">72418381</a></p>
                </div>
            </div>



        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col-md-4">--}}
{{--            <div class="fb-post" data-href="https://www.facebook.com/ColNalPichincha/posts/2868889663160284" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/ColNalPichincha/videos/2564088606993601/" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/ColNalPichincha/">Colegio Nacional Pichincha</a> en&nbsp;<a href="https://developers.facebook.com/ColNalPichincha/videos/2564088606993601/">Martes, 10 de diciembre de 2019</a></blockquote></div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <div class="fb-post" data-href="https://www.facebook.com/ColNalPichincha/videos/2564088606993601/" data-show-text="true" data-width="350"><blockquote cite="https://developers.facebook.com/ColNalPichincha/videos/2564088606993601/" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/ColNalPichincha/">Colegio Nacional Pichincha</a> en&nbsp;<a href="https://developers.facebook.com/ColNalPichincha/videos/2564088606993601/">Martes, 10 de diciembre de 2019</a></blockquote></div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="section-title-header text-center">--}}
{{--                <h2 class="section-title">Auspiciadores</h2>--}}
{{--            </div>--}}
{{--            <div class="owl-carousel owl-theme">--}}
{{--                <div class="item" style="height:200px">--}}
{{--                    <h4>1</h4>--}}
{{--                </div>--}}
{{--                <div class="item" style="height:200px">--}}
{{--                    <h4>2</h4>--}}
{{--                </div>--}}
{{--                <div class="item" style="height:200px">--}}
{{--                    <h4>3</h4>--}}
{{--                </div>--}}
{{--                <div class="item" style="height:200px">--}}
{{--                    <h4>4</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="row">
        <div class="col-md-12">
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
</main>
<footer class="footer">
    <div class="container">
        <span><a class="text-white" href="{{ route('team') }}">Team TiC Pichincha</a> &copy; 2020 Todos los derechos reservados - </span>
        <span>@include('conta')</span>
        <ul class="redes">
            <li><a href="https://www.facebook.com/ColNalPichincha/" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="https://youtube.com/c/ColegioNacionalPichincha" target="_blank"><i class="icon-youtube"></i></a></li>
            <li><a href="https://twitter.com/ColNalPichincha" target="_blank"><i class="icon-twitter"></i></a></li>
        </ul>
    </div>
</footer>
<a class="ir-arriba" data-scroll href="#top"><i class="icon-arrow-circle-up"></i></a>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/sitio.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 2,
            margin: 10,
            autoHeight: true,
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
        });
    })
</script>
</body>
</html>