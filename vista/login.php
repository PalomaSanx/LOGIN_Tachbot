<html>

<head>
    <title>LOGIN TACHBOT</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/LOGIN_Tachbot/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="/LOGIN_Tachbot/img/icon.ico">
</head>

<body>

    <!--Navegación-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <p>TACHBOT</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a id="1" class="nav-item nav-link" href="#about">SOBRE NOSOTROS</a>
                    <a class="nav-item nav-link" href="#services">SERVICIOS</a>
                    <a class="nav-item nav-link" href="/LOGIN_Tachbot/vista/homePage.php">BOTS</a>
                    <a class="nav-item nav-link" href="#blog">BLOG</a>
                    <a class="nav-item nav-link" href="#contact">CONTACTO</a>
                    <a class="nav-item nav-link active" href="/LOGIN_Tachbot/vista/login.php">LOGIN <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/LOGIN_Tachbot/vista/registro.php">REGISTRO</a>
                </div>
            </div>
        </div>
    </nav>

    <!--tarjetas (contenido)-->
    <!--contenido LOGIN-->
    <div align="center" class="card" style="background-color:lightblue" id="box">
        <legend>LOGIN</legend>
        <form action="/LOGIN_Tachbot/controlador/consultalogin.php" method="POST">
            Introduzca su correo:<br>
            <input type="text" size="40" maxlength="64" name="correo" required id="correo" /><br><br>
            Introduzca su contraseña:<br>
            <input type="password" size="40" name="contrasena" id="contrasena" required /><br><br>
            <input type="checkbox" name="recordar" value="recordar"> Recordar durante 1 año<br><br>
            <input type="submit" name="btnlog" value="Enviar" class="btn btn-primary" id="Enviar" />
            <input type="reset" name="borrar" value="Borrar" class="btn btn-primary" />
            <div id="error"></div>

            <?php
			//FEEDBACK para incorrecto
			if (isset($_GET["fallo1"]) && $_GET["fallo1"] == 'true') {
				echo "</br><div align='center' style='color:red'>Usuario o contraseña invalido.<br>Vuelva a intentarlo</div>";
			}
			?>
        </form>

        <div align="center">
            <u> <a style="color:blue" href="registro.php">registrarme</a> </u>
        </div>
        <br>
    </div>


    <!--JAVA SCRIPT-->
    <!--<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> -->
    <script src="/LOGIN_Tachbot/js/jquery-3.4.1.min.js"></script>
    <script src="/LOGIN_Tachbot/js/bootstrap.min.js"></script>
    <script src="/LOGIN_Tachbot/js/main.js"></script>
    <!--
    <script>
    $(document).ready(function() {

        $('#Enviar').click(function() {
            var correo = $("#correo").val();
            var contrasena = $("#contrasena").val();
            var dataString = 'correo=' + correo + '&contrasena=' + contrasena;
            if ($.trim(correo).length > 0 && $.trim(contrasena).length > 0) {
                $.ajax({
                    type: "POST",
                    url: "/LOGIN_Tachbot/controlador/consultalogin.php",
                    data: dataString,
                    cache: false,
                    beforeSend: function() {
                        $("#Enviar").val('Connecting...');
                    },
                    success: function(data) {
                        if (data) {
                            $("body").load("/LOGIN_Tachbot/vista/homePage.php").hide()
                                .fadeIn(1500).delay(6000);
                            //or
                            window.location.href = "/LOGIN_Tachbot/vista/homePage.php";
                        } else {
                            //Shake animation effect.
                            $('#box').shake();
                            $("#Enviar").val('Enviar')
                            $("#error").html(
                                "<span style='color:#cc0000'>Error:</span> Invalid username and passworddd. "
                            );
                        }
                    }
                });

            }
            return false;
        });

    });
	</script>
-->

</body>


</html>