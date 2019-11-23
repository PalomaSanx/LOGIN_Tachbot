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
 <!--Navegación-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/LOGIN_Tachbot/vista/homePage.php">
                <p>TACHBOT</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a id="1" class="nav-item nav-link" href="#about">SOBRE NOSOTROS</a>
                    <a class="nav-item nav-link" href="homePage.php">SERVICIOS</a>
                    <a class="nav-item nav-link" href="#blog">BLOG</a>
                    <a class="nav-item nav-link" href="#contact">CONTACTO</a>
                    <a class="nav-item nav-link active" href="#carrito">CARRITO</a>
                    <a class="nav-item nav-link" href="micuenta.php">MI CUENTA<span class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>

<form action="https://www.sandbox.paypal.com/es/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value='tachbot-buyer@personal.example.com'>
<input type="hidden" name="item_name" value="Compra con prueba mínima">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="amount" value="81.18">
<input type="image"
src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.p
ng" alt="PayPal Checkout" name="submit" >
</form>



</html>