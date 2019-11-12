<?php
    require 'conexionPDO.php';
    session_start();
    if (isset($_SESSION['usuario'])) { /* Comrpobamos si la sesión estaba iniciada */
        echo '<p> Sesión iniciada previamente </p>';
        header('Location:/vista/homePage.php');
    }

    $idcliente1= 3;
    $nombre=$_POST["nombre"];
    $apellido1= $_POST["apellido1"];
    $apellido2= $_POST["apellido2"];
    $ciudad= $_POST["ciudad"];
    $telefono= $_POST["telefono"];
    $correo= $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    //printf ("Nuevo registro con el id %d.\n", mysqli_insert_id($conexionPDO));
    //echo mysqli_insert_id($conexionPDO);

    //SQL con marcadores 
    //$sql="INSERT INTO cliente ( nombre, apellido1, apellido2, ciudad, telefono, correo, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)"; 
    $sql="INSERT INTO cliente ( nombre, apellido1, apellido2, ciudad, telefono, correo, contraseña, id_cliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    //preparar 
    if (!$stmt=$conexionPDO->prepare($sql)){
        die ("Falló la preparación: (" . $conexionPDO->errno . ") " . $conexionPDO->error); 
    } 
    //vincular
    if (!$stmt->bind_param("ssssdsss", 
                $nombre, $apellido1, $apellido2, $ciudad, $telefono ,
                $correo, $contraseña, $idcliente1)){
                    die ("Falló la vinculación de parámetros: (" . $conexionPDO->errno . ") " . $conexionPDO->error);   
                }
    //ejecutar
    if (!$stmt->execute()) {
        die ("Falló la ejecución de sentencia preparada: (" . $conexionPDO->errno . ") " . $conexionPDO->error);     
    }  
    echo "Inserción completada"; 
    //cerrar
    $stmt->close();
    echo $_POST["nombre"];

    //xml y ajax
    // lola martinez cifuentes albacete 638554015 lola@gmail.com 45lolita

    //FEEDBACK para incorrecto
    if (isset($_GET["fallo1"]) && $_GET["fallo1"] == 'true') {
        echo "<form>Usuario o contraseña invalido.<br>Vuelva a intentarlo</form>";
    }
?>