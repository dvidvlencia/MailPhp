<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<title>PHP MAIL</title>


 
</head>
<body>
	<section class="contenedor">
		<div>
			
		</div>
		<div class="menu">
			
		</div>
		<div class="secundaria">
			
			<div class="col-lg-12">
				<h2 class="encabezado1">Formulario de Contacto</h2>
				<p class="textos">Si no encontró la información que buscaba
				o desea enviarnos sus comentarios o sugerencias
				contáctenos por medio del siguiente formulario:</p>
				 <form action="mail.php" method="POST">

						  <div class="form-group">
						  	<span class="label">(*) Nombre:</span></h3>
						    <input type="text" class="form-control" placeholder="Usuario" name="Nombre" title="Se necesita un nombre usuario" required>
						  </div>
							<span class="label">(*) E-mail:</span></h3>
							<div class="input-group">
							  
							  <span class="input-group-addon">@</span>
							  <input type="email" class="form-control" placeholder="e-mail@unam.com" title="Es necesario ingresar un e-mail" name="email"required>
							</div>
							<span class="label">(*) Asunto:</span></h3>
							<input type="text" class="form-control" placeholder="Importante, información, etc..." title="Se requiere una direccion de correo electronico" name="asunto" required>
							<span class="label">(*) Comentarios:</span></h3>
							<textarea class="form-control" rows="3" name="comentarios" placeholder="Anota aqui tu comentario o sugerencia" title="Ingrese aqui sus comentarios" required></textarea>
							<br>
							<button type="submit" class="btn btn-default">Enviar | <span class="glyphicon glyphicon-ok"></span></button>
				</form><br>

				<div class="alert alert-danger" role="alert">(*)Todos los campos son obligatorios</div>
			</div>
		</div>
		
		<footer>
			
		</footer>
	</section>
	<div>
		
	</div>	
</body>
</html>
