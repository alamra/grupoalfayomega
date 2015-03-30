<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Felicidades</title>
</head>
<body>
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
</body>
</html>