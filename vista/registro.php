<html>

<head>
	<title>REGISTRO TACHBOT</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="/LOGIN_Tachbot/css/bootstrap.css" rel="stylesheet">
	<link rel="shortcut icon" href="/img/icon.ico">
</head>

<body>

	  <!--Navegación-->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/LOGIN_Tachbot/vista/welcomeHome.php">
                <p>TACHBOT</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a id="1" class="nav-item nav-link" href="#about">SOBRE NOSOTROS</a>
                    <a class="nav-item nav-link" href="/LOGIN_Tachbot/vista/welcomeHome.php">WELCOME</a>
                    <a class="nav-item nav-link" href="#blog">BLOG</a>
                    <a class="nav-item nav-link" href="#contact">CONTACTO</a>
                    <a class="nav-item nav-link active" href="/LOGIN_Tachbot/vista/login.php">LOGIN <span
                            class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>

	<!--tarjetas (contenido)-->
	<!--contenido REGISTRO-->
	<div align="center" class="card" style="background-color:lightblue">
		<legend>REGISTRO</legend>
		<form action="/LOGIN_Tachbot/controlador/procesoregistro.php" method="POST">
			Introduzca su correo:<br>
			<input type="text" size="40" maxlength="64" name="correo" required /><br><br>
			Introduzca su contraseña:<br>
			<input type="password" size="40" name="contrasena" required /><br><br>
			Introduzca su Nombre:<br>
            <input type="text" size="40" maxlength="64" NAME="nombre" /><br><br> 
            Introduzca su Apellido:<br>
            <input type="text" size="40"  maxlength="64" NAME="apellido1" /><br><br> 
            Introduzca su Apellido2:<br>
            <input type="text" size="40" maxlength="64" NAME="apellido2" /><br><br> 
            Introduzca su Ciudad:<br>
            <input type="text" size="40" maxlength="64" NAME="ciudad" /><br><br> 
            Introduzca su Telefono:<br>
            <input type="text" size="40"  maxlength="64" NAME="telefono" /><br><br> 
			<input type="submit" name="btnlog" value="Enviar" class="btn btn-primary" />
			<input type="reset" name="borrar" value="Borrar" class="btn btn-primary" />
			<br>
			<?php
			//FEEDBACK para incorrecto
			if (isset($_GET["fallo1"]) && $_GET["fallo1"] == 'true') {
				echo "</br><div align='center' style='color:red'>Usuario ya registrado.<br>Vuelva a intentarlo</div>";
			}
			?>
		</form>
	</div>

	<!--JAVA SCRIPT-->
	<!-- <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> 
	-->
</body>


</html>