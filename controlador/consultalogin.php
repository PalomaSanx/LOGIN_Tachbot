<?php
require 'conexionPDO.php';
session_start();

if (isset($_SESSION['usuario'])) { /* Comrpobamos si la sesión estaba iniciada */
	echo '<p> Sesión iniciada previamente </p>';
	header('Location:/LOGIN_Tachbot/vista/homePage.php');
}

if (isset($_POST['correo']) && isset($_POST['contrasena'])) { /* Si hay algo en usuario y contraseña */
	if ($_POST['correo'] != "" && $_POST['contrasena'] != "") { /* Y no está vacío */
		$sql_select = "SELECT * FROM cliente WHERE correo='" . $_POST["correo"] . "'"; /* Seleccionar el cliente que se corresponde al usuario introducido */
		$resultado_select = $conexionPDO->query($sql_select); /* Realizamos la consulta y almacenamos en resultado_select */
		if ($resultado_select) { /* Si hay resultado */
			$usuario_select = $resultado_select->fetch(PDO::FETCH_ASSOC); /* Recorremos las consultas */
			if (password_verify($_POST["contrasena"], $usuario_select['contrasena'])) { /* Si las contraseñas coinciden */
				$_SESSION["correo"] = $_POST["correo"]; /* Guardamos la sesion del usuario */
				$_SESSION["ultimoAcceso"] = time();
				if(isset($_POST['recordar'])) {
					echo '<script type="text/javascript">
                alert("Sesión expiró. Vuelve a loguearte");
                window.location.assign("/LOGIN_Tachbot/vista/login.php"); </script>';
					setcookie("correo",$_POST["correo"] , time() + 60*60*24*365);
				}
				header('Location: /LOGIN_Tachbot/vista/homePage.php'); /* Y nos redirigimos a home */
			} else {
				header('Location: /LOGIN_Tachbot/vista/login.php?fallo1=true'); /* Si la contraseña no esta asociada a ese usuario volvemos a intentarlo */
			}
		}
	}
}

?>

