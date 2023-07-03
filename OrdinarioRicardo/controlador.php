<?php
$json = $_POST['json'];
$data = json_decode($json, true);

$caso = $data['caso'];

if($caso == 'mision'){
  $contenido = "<div class='slideshow-container'>

    <div class='mySlides fade'>
      <img src='Imagenes/OIG.jpg' width='100%'  height='400'>
      <div class='text'>Puede ver todas sus lamparas disponibles</div>
    </div>
  </div>
  <h2>HISTORIA DE LA CARRERA</h2>
  <p>La carrera de Ingeniería en Computación fue creada en el año 2002 en el
     campus Ixtepec, posteriormente, en el año 2006 fue trasladada al campus Tehuantepec en donde se encuentran las carreras orientadas a la ciencia y la tecnología. A sus más de dieciocho años del inicio de sus actividades académicas, se ha visto el pasar de dieciséis generaciones de egresados que han dado testimonio del compromiso del programa educativo con la formación de profesionales con conocimientos sólidos para el desarrollo de software, hardware de sistemas de cómputo, con habilidades para el desarrollo tecnológico e investigación de las ciencias computacionales, basado en criterios de calidad, disciplina y ética profesional , lo cual ha permitido contar con egresados laborando en empresas trasnacionales y en destacadas instituciones de educación superior, constatando con ello la formación de recursos humanos de alto nivel. Además, en 2016 y 2021 el organismo CIEES (Comités Interinstitucionales para la Evaluación de la Educación Superior) dictaminó favorablemente a nuestra carrera con el Nivel 1 de calidad de los CIEES, una distinción que pocos programas educativos en el área de computación poseen en el país.
   </p>";
  echo $contenido;
}

?>
