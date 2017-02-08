<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es_MX">
	<head>
		<title>Sign Up Form</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Sign Up</h2>

		<form role="form" name="registro" action="php/signup.php" method="post">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Name</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirm Password</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña">
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valid_signup.js"></script>
	</body>
</html>