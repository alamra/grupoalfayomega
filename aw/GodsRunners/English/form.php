<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MySlider</title>

	<!-- Fuentes de Google -->
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
		<nav>
  <ul>
    <li><a href="index.html">Inicio</a></li>
    <li><a href="nosotros.html">Nosotros</a></li>
    <li><a href="galeria.html">Galeria</a></li>
    <li><a href="form.html">Contactanos</a></li>
        <li id="lang_nav">
          <a href="#">English</a>
        </li> 
  </ul>
</nav>
	
	<h1 class="slider-title">God's Runners | <a href="http://creaticode.com/blog">atletas de Dios</a></h1>

	<!-- Slider Container -->
	<!--<section class="slider-container">
		<ul id="slider" class="slider-wrapper">
			<li class="slide-current">
				<img src="images/1.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Familia</h3>
					<p>Nos hemos convertido en Familia, como hijos de Dios.</p>
				</div>
			</li>

			<li>
				<img src="images/18.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Entrenamiento</h3>
					<p>Hacemos entrenamientos constantes, para mejorar gradualmente en nuestros objetivos Glorificando a nuestro creador</p>
				</div>
			</li>

			<li>
				<img src="images/19.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Preparación</h3>
					<p>Nos prepararnos sobre el terreno, para asimilar mejor las condiciones de l carrera que enfrentamos</p>
				</div>
			</li>

			<li>
				<img src="images/20.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Futuro</h3>
					<p>Integramos a nuestros hijos, para que sigan con el proposito de hacer conocer la palabra de Dios en nuestras vidas y nuestra forma de vivirla</p>
				</div>
			</li>
		</ul>

		*comentario: Sombras 
		<div class="shadow"></div>

		*comentario: Controles
		<ul id="slider-controls" class="slider-controls"></ul>

		*comentario: Autores de las Imagenes 
		<p class="authors">Imagenes tomadas por God's Runners <br><a href="#">lider: Juan Herrera</a></p>
	</section>-->
	
<!--<section id="box-form">
	<form action="formulario.php" id="formulario" method="post">
	<h5>Ingresa los siguientes datos, a la menor brevedad nos pondremos en contacto contigo</h5>
		<input type="text" name="nombre" placeholder="Nombre" required>
		<br><br>
		<input type="email" name="email" placeholder="E-mail" required>
		<br><br>
		<input type="text" name="telefono" placeholder="Celular" required>
		<br><br>
		<td><textarea cols="22" rows="5" name="mensaje" required></textarea>
		<br>
		<br>
	<input type="search" name="busqueda" placeholder="buscar">
		<br><br>
		<input type="url" name="url" placeholder="buscar url">
		<br><br>
		<input type="number" name="numero" min="0" max="30" step="3">
		<br><br>
		<input type="color" name="color">
		<br><br>
		<input type="month" name="mes">
		<br><br>
		<input type="submit" name"boton" value="Enviar">

	</form>







</section>-->



<?php  
		$nombre = $_post["nombre"];

		$correo = $_post["correo"];

		$edad = $_post["edad"];

		$fecha = $_post["fecha"];

		$contenido = $_post["contenido"];
		
		$para = "alexsys346@yahoo.com";

		$asunto = "Mensaje Nuevo";

		$mensaje = "

		Nombre del remitente: ".$nombre."
		E-mail: ".$correo."
		Edad: ".$edad."
		Fecha:".$fecha."
		Mensaje:".$contenido."
		";

		mail($para,$asunto,utf8_decode($mensaje));

		echo "<p><h2>Hemos recibido tu mensaje, pronto te contestaremos. Gracias</h2></p>;
	?>







	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>