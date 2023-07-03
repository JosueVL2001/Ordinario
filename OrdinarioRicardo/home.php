<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles8.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Universidad del Istmo</title>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous">    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="contenedor">
      <img src="Imagenes\logo.png" alt="imagen" class="logo">
    </div>
  </head>
  <body>
<header>




  <!-- Menu -->
<a href="#" class="logos">LOGO</a>

<nav class="navbar">
<ul>
  <li><a href="home.php">home</a></li>
  <li><a href="#">Carrera > </a>
    <ul>
      <li><a href="MisionVision.php" >Mision y Vision</a> </li>
      <li><a href="PerfilIngreso.php">Perfil de ingreso</a> </li>
      <li><a href="perfilEgresado.html">Perfil de egreso</a> </li>
      <li><a href="#">Plan de estudios</a> </li>
      <li><a href="calendario.html">Calendario Escolares</a> </li>
      <li><a href="planeacion.html">Planeación</a> </li>
      <li><a href="#">Actividades complementarias</a> </li>
    </ul>
  </li>
  <li><a href="#">Alumnos > </a>
    <ul>
      <li> <a href="informacionadicional.html">Información adicional</a> </li>
      <li> <a href="reglamentos.html">Reglamentos</a> </li>
      <li> <a href="horarios.html">Horarios </a> </li>
      <li> <a href="CalendarioExamenes.html">Calendario Examnes</a> </li>
      <li> <a href="cuadrohonor.html">Cuadro de honor </a> </li>
      <li> <a href="eventosacademicos.html">Eventos Academicos </a> </li>
      <li> <a href="#">Plataforma MIL Aulas </a> </li>
    </ul>
  </li>
  <li><a href="#">Profesores > </a>
    <ul>
      <li> <a href="profesores.html">Profesores</a> </li>
    </ul>
  </li>
  <li><a href="#">Egresados ></a>
    <ul>
      <li> <a href="Egresados.html">Nuestros egresados</a> </li>
      <li> <a href="">Examnes profesionales</a> </li>
      <li> <a href="ceneval.html">Titulados por CENEVAL</a> </li>
      <li> <a href="tesis.html">Titulados por Tesis</a> </li>
    </ul>
  </li>
  <li><a href="#">Aspirantes > </a>
    <ul>
      <li> <a href="requisitosingreso.html">Requisitos de Ingreso</a> </li>
      <li> <a href="preguntas.html">Preguntas frecuentes</a> </li>
      <li> <a href="instalaciones.html">Instalaciones</a> </li>
    </ul>
  </li>
  <li> <a href="encuentranos.html">Encuentranos</a>    </li>
</ul>
</nav>
<br><br><br><br>
  <!-- fin MENU -->
</header>
<br><br><br><br>




<div class="" id="contenido">



  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="Imagenes/uni1.jpg" width="100%" height="400">
      <div class="text">Centro de idiomas</div>
    </div>

    <div class="mySlides fade">
      <img src="Imagenes/uni2.jpg"width="100%" height="400">
      <div class="text" style="color: #000000">Entrada a la Universidad</div>
    </div>

    <div class="mySlides fade">
      <img src="Imagenes/OIG3.jpg" width="100%" height="400">
      <div class="text" style="color:black">Puro informatico de calidad </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <br><br>
  <div class="animacion"></div>
</div>

<footer class="pie-pagina">
  <div class="grupo1">
    <div class="box">
      <figure>
        <h2>Sitios de Interes</h2>
        <a href="#">
          <img src="Imagenes/logo.png" alt="">
        </a>

      </figure>
      <a href="#">Universidad del Istmo</a>
      <br>
      <a href="#">Servicios Escolares</a>
      <br>
      <a href="#">Biblioteca</a>
    </div>
    <div class="box">
      <h2>Visitanos</h2>
      <p>Ciudad Universitaria S/N, Barrio Santa Cruz, 4a. Sección
        Sto. Domingo Tehuantepec, Oax., México C.P. 70760</p>
      <br>
      <p>Teléfono: (971) 522 4050 extensiones 111 y 123.</p>
    </div>
    <div class="box">
      <h2>Siguenos</h2>
      <div class="red-social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
    </div>
  </div>
</footer>


  </body>
</html>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}



function misionvision(){
      // document.getElementById('pregunta').innerHTML = "apoco no";
      var data = {
        caso : 'mision',
        dato : 'josue'
      }
      $.ajax({
        url: 'controlador.php',
        method: 'POST',
        data: { json: JSON.stringify(data) },
        success: function(response) {

          console.log(response);
          document.getElementById('contenido').innerHTML = response;
          // contador++;
        }
      });
    }
</script>
