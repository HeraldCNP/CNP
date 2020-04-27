@extends('modules.layout')

@section('title')
Colegio
@endsection

@section('meta-tags')
	<meta name="description" content="La Historia del Colegio Nacional Pichincha" />
	<meta name="keywords" content="historia, pichincha, potosí, bolivia, 7 de mayo"/>
	<meta name="author" content="HeraldCNP - Herald Choque Vargas" />

	<!-- OPENGRAPH -->
	<meta property="og:title" content="Historia | Colegio Nacional Pichincha" />
	<meta property="og:type" content="escuela" />
	<meta property="og:site_name" content="Historia Colegio Nacional Pichincha" />
	<meta property="og:description" content="La Historia del Colegio Nacional Pichincha" />
	<meta property="og:image" content="{{ asset('images/banner/portada1.jpg') }}"/>
@endsection

@section('header')
	<section class="container-fluid d-flex flex-column justify-content-center align-items-center" id="histo">
		<h1 class="display-4 text-white text-center">HISTORIA</h1>
		<div class="flechaAbajo text-center mt-5 pt-2">
			<a data-scroll href="#menu"><i class="icon-angle-down"></i></a>
		</div>
	</section>
@endsection

@section('contenido')
	<div class="row mt-4">
		<div class="col-md-12 d-flex flex-column align-items-center text-justify">
			<h1 class="display-4 text-center">Creación del Colegio Nacional Pichincha</h1 class="text-center">
			<blockquote class="text-center">
				<p class="mb-0 lead">Documentos para la Historia - Creación del Colegio Nacional Pichincha</p>
                <footer class="blockquote-footer"><cite title="Source Title">Wálter Zabala Ayllón</cite></footer>
            </blockquote>
            <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1000ms">Fundado en la ciudad de Potosí un 2 de marzo de 1826 por el Mariscal de Ayacucho Antonio José de Sucre, cuyo acto inaugural fue el 7 de mayo del mismo año, en interiores del secular convento de los Betlemitas, contiguo al templo de Nuestra Señora de Belén y con vista hacia la antigua plaza de la Misericordia. Fue en ese colonial edificio conventual donde quedó establecido el primer colegio de ciencias y artes de Potosí con el notable nombre de "Pichincha" (en conmemoración a la Batalla de Pichincha), a iniciativa o sugerencia del General escocés Guillermo Miller, el que recibió la instructiva del Mariscal Sucre, para elegir uno de los conventos de la ciudad, donde habría de establecerse el primer centro de formación educacional para beneficio de la juventud citadina. En este orden, el General Miller, siendo la más alta autoridad de la jurisdicción territorial, ostentando el título de "Presidente del Departamento de Potosí" y, cumpliendo con las instructivas de su excelencia, tomó la responsabilidad de hacer la visita personal a cada una de las casas conventuales, excepto la antoniana, regentada por los frailes franciscanos —a la que se guardaba todas las consideraciones—, para ver la que más convenía en el propósito señalado.</p>
            <img class="img-responsive img-thumbnail" src="{{ asset('images/histo/1.jpg') }}" alt="Fachada antigua del Colegio Nacional Pichincha" >
            <p><small>Fachada antigua del Colegio Nacional Pichincha</small></p>
                        
                        
            <p class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">Y, dentro de todas las examinadas, el General Miller se inclinó por el convento de los Betlemitas que, al margen de reunir las condiciones para adecuarse a un centro de enseñanza superior, encontrase en un lugar expectable de la ciudad. Esta casa que en principio fue el Hospital Real de la Vera Cruz, siendo de una construcción arcaica, ella fue reedificada en 1725 con la llegada de los religiosos pertenecientes a la Orden de Belén. Casona que en principio era de una sola planta, para luego ser enriquecida con una segunda, en estricta obediencia al diseño trabajado por el arquitecto José López Arango. Fue entonces cuando se levantaron los arcos de medio punto sobre columnas toscanas en sus dos plantas, formando los pasillos con cubierta de madera tallada y el piso con losa arenisca, manteniéndose el patio cuadrangular que era de su primogénita construcción, en cuyo centro se levantó un pedestal de piedra en forma de columna, sosteniendo al reloj del sol.</p>
            <img class="img-responsive img-thumbnail" src="{{ asset('images/histo/2.jpg') }}" alt="Fachada antigua del Colegio Nacional Pichincha" >
            <p><small>Fachada antigua del Colegio Nacional Pichincha</small></p>
            <h2 class="text-center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">Adecuación del edificio</h2>
            <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1000ms">Antes de instalarse el Colegio Pichincha el 7 de mayo de 1826 en el convento hospital de los Betlemitas, éste fue desalojado de todos los enseres, instrumental y otros que tenía el nosocomio, trasladándose a la Parroquia de San Roque. Separadamente, los ambientes que precisaban algunos arreglos, fueron inmediatamente refaccionados, con el apoyo económico de la Tesorería Nacional que hizo un préstamo de dos o tres mil pesos para habilitar el local. Finalmente, la portería del convento que hallábase próxima al portón del edificio, se convirtió en secretaria del colegio. La sala receptora que pertenecía al Prior de la Orden religiosa de los Betlemitas, fue dispuesta para el Rector del centro educativo. La sala de enfermería auxiliar, fue señalada para el primer curso de Retórica.</p>
           <img class="img-responsive img-thumbnail" src="{{ asset('images/histo/3.jpg') }}" alt="Fachada antigua del Colegio Nacional Pichincha" >
            <p><small>Fachada antigua del Colegio Nacional Pichincha</small></p>
            <p class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">Las otras habitaciones que servían de celdas para los religiosos, fueron fijadas en aulas para lecciones de "Lenguas Castellana y Latín", "Elocuencia y Oratoria", "Matemáticas y Arquitectura", "Botánica y Agricultura", "Moral y Derecho", "Filosofía", "Medicina", "Dibujo y Pintura". La sala que fue comedor de los religiosos, se mantuvo como tal, pero destinado a los alumnos internos del colegio, tomando en cuenta que este centro educativo, a sólo un año de su fundación, estableció su propio internado para albergar a los huérfanos de la Guerra de la Independencia, más a otros adolescentes que llegaban de las provincias, todos en condición de becados con el beneficio de recibir alimentación, vestimenta, uniformes y material de estudios. El internado también aceptaba a otros estudiantes pagantes que ocupaban la sala de la predicación ubicada en la planta alta del edificio.</p>
            <img class="img-responsive img-thumbnail" src="{{ asset('images/histo/4.jpg') }}" alt="Fachada antigua del Colegio Nacional Pichincha">
            <p><small>Fachada antigua del Colegio Nacional Pichincha</small></p>
            <h2 class="text-center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">Personalidades Destacadas</h2>
            <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1000ms">Como se sabe, la inauguración oficial del Colegio Pichincha tuvo lugar la mañana de aquel 7 de mayo de 1826, en homenaje al Gran Mariscal de Ayacucho Antonio José de Sucre, lo que permitió para que en el rectorado o dirección del colegio, se muestre en primera plana el retrato del Mariscal Sucre, sobre lienzo de 2,30 metros de alto, por 1,10 de ancho; pintura que fue realizada por el profesor Saturnino Pórcel y enmarcado con madera tallada, para tiempo después ser ubicada en el salón principal del establecimiento.</p>

            <p>Al instalarse el colegio en acto solemne, la ciudadanía potosina expresó su alborozo, aplaudiendo y participando de una procesión cívica que, luego de hacer su recorrido por las calles del casco histórico de la ciudad, remató en el frontispicio del colegio Pichincha. En ese entonces, se encontraba como Prefecto del Departamento el Dr. Casimiro Olañeta, uno de los gestores para la creación de la República de Bolivia.</p>
            <img class="img-responsive img-thumbnail" src="{{ asset('images/histo/sucre.jpg') }}" alt="Mariscal Antonio José de Sucre">
            <p ><small>Mariscal Antonio José de Sucre</small></p>
                        
            <p class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">Fue designado como primer Rector del colegio el abogado y sacerdote Juan Manuel Calero Vargas. Como Vice-Rector, fue nombrado el Dr. Manuel Anselmo Tapia y, Ministro Secretario, el Sr. Mariano La Torre. Cumplida la gestión rectora del cura Calero, tocó al abogado, poeta, orador y autor del Himno Nacional de Bolivia, Dr. José Ignacio de Sanjinés, constituirse en el segundo Rector del colegio entre 1830 a 1832. Seguidamente fue designado el jurisconsulto y destacado diplomático que fuera Presidente de Bolivia, Dr. José María Linares, como tercer Rector de este colegio en los años 1833 y 34. Sucesivamente dirigieron a este plantel educativo otras connotadas personalidades como el políglota, educador y escritor José David Berríos, al igual que don Macedonio Araujo, fundador y primer presidente de la Sociedad Geográfica y de Historia "Potosí"; el ilustre letrado en leyes, magnífico educador e historiador don Vicente Terán Erquicia; el reconocido "padre de la juventud potosina", destacado investigador historiógrafo Luis Subieta Sagárnaga; el polifacético artista, abogado, escritor y hombre público Dr. Ricardo Bohórquez Ramírez y tantas otras personalidades que tuvieron el honor de dirigir a esta vieja casona.</p>
            <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1000ms">Así mismo, se cobijaron en las aulas de este colegio ilustres intelectuales de reconocida trayectoria nacional en el campo de la enseñanza educativa. Por sus viejos pasadizos, aulas y patio, dejaron huellas de recuerdo, cientos y miles de estudiantes que en el curso del tiempo se constituyeron en hombres de bien y magníficos servidores de la patria.</p>
            <p>Este colegio que está a pocos años de celebrar su Bicentenario de creación tiene páginas brillantes en el marco de la historia educativa del país; colegio que elevó la cultura del pueblo potosino y sobre sus cimientos nació la Universidad "Tomás Frías" como superior culminación de sus actos. Por todo ello y con mucha justicia, el gobierno del Dr. Hernán Siles Zuazo, le otorgó en 1957, la máxima condecoración nacional del "Cóndor de los Andes". A esta premiación se sumaron otras instituciones del Estado, como el Senado de la República, la Prefectura del Departamento de Potosí, así como la H. Alcaldía Municipal. Finalmente haber sido reconocido como el principal colegio bolivariano y ser miembro de los colegios decanos de América del Sur.
            </p>
		</div>
	</div>
@endsection