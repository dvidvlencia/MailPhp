<?php 
$para = "dvidvlencia@gmail.com"; //"dvidvlencia@gmail.com";
$nombre = $_POST["Nombre"];
$asunto = " desde: Web DIMEI, enviado por: $nombre , asunto: " .$_POST["asunto"];
$mensaje = $_POST["comentarios"];
$de = $_POST["email"];

$headers = "MIME-Version:1.0; \r\n";
$headers .= "Content-type: text/html; \r\n charset= utf-8;";
$headers .= "From: $de; \r\n";
$headers .= "To: $para; \r\n Subjet:$de; \r\n";

if (mail($para, $asunto, $mensaje, $headers))

	echo "<label>envio exitoso</label>";
else
	echo "envio sin exito";
?>
<html>
<head>
	<title></title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-lg-12">
			<div class="alert alert-success" role="alert">
			  <a href="http://www.ingenieria.unam.mx/dimei/" class="alert-link">Regresar a INICIO</a>
			  <!--Notese que en el header de To se anexa la variable $de, en lugar de la variable $asunto, pero solo asi podemos obtener elcorreo de la persona que manda el mensaje-->
			</div>
		</div>
	</div>
</div>
</body>
</html>
