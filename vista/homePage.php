<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
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
                    <a class="nav-item nav-link active" href="/LOGIN_Tachbot/vista/homePage.php">BOTS</a>
                    <a class="nav-item nav-link" href="#blog">BLOG</a>
                    <a class="nav-item nav-link" href="#contact">CONTACTO</a>
                    <a class="nav-item nav-link" href="/LOGIN_Tachbot/vista/login.php">LOGIN <span
                            class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    if (!isset($_SESSION['correo'])) {
        echo '<div align="center" class="card" style="background-color:lightblue">';
        echo 'ERROR!! debe registrarse: <a href="login.php"> Login </a> </div>';
    } else { //si la sesión existe 
        if (isset($_SESSION['ultimoAcceso'])){ //comprueba que no haya pasado x tiempo desde la sesion
            $ahora=time();
            $antes=$_SESSION['ultimoAcceso'];
            $_SESSION['ultimoAcceso']=$ahora;
            if ($ahora-$antes > 60){
                $_SESSION=array(); //eliminamos las variables de sesión
                session_destroy();
                //eliminamos las cookies de sesión:
                $paramCookies= session_get_cookie_params();
                setcookie(session_name(),0,time()-3600,$paramCookies["path"]);
                echo '<script type="text/javascript">
                alert("Sesión expiró. Vuelve a loguearte");
                window.location.assign("/LOGIN_Tachbot/vista/login.php"); </script>';
            }
        }
        echo ' <div align="center" class="card" style="background-color:lightblue">';
        echo '<h1>Bienvenid@ a chatbot</h1>';
        echo $_SESSION['correo'] . '</br>';
        echo '<a href="logout.php"> Logout </a>';
    }         
    ?>
    </div>
</body>

</html>