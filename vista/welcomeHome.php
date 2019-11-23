<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage(servicios)</title>
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
                    <a class="nav-item nav-link active" href="/LOGIN_Tachbot/vista/welcomeHome.php">WELCOME</a>
                    <a class="nav-item nav-link" href="#blog">BLOG</a>
                    <a class="nav-item nav-link" href="#contact">CONTACTO</a>
                    <a class="nav-item nav-link" href="/LOGIN_Tachbot/vista/login.php">LOGIN <span
                            class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    
        echo '<div align="center" class="card" style="background-color:lightblue">';
        echo '
        <div class="row" >
            <div class="col-sm-11" >
                    <div class="card-body" style="background-color:lightblue">
                        <h5 class="card-title">Bienvenid@ a chatbot.</h5>
                    </div>
            </div>
        </div>
        ';
    
    ?>
        


</body>

</html>