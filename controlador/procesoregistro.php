<?php
    require 'conexionPDO.php';
    session_start();

   
    $nombre=$_POST["nombre"];
    $apellido1=$_POST["apellido1"];
    $apellido2=$_POST["apellido2"];
    $ciudad=$_POST["ciudad"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $contrasena= password_hash($_POST["contrasena"], PASSWORD_DEFAULT);
    //printf ("Nuevo registro con el id %d.\n", mysqli_insert_id($conexionPDO));
    //echo mysqli_insert_id($conexionPDO);

    //SQL con marcadores 
    //$sql="INSERT INTO cliente ( nombre, apellido1, apellido2, ciudad, telefono, correo, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)"; 
    $sql="INSERT INTO cliente ( nombre, apellido1, apellido2, ciudad, telefono, correo, contrasena) VALUES (:nombre,:apellido1, :apellido2, :ciudad, :telefono, :correo,:contrasena)";
    $stmt= $conexionPDO->prepare($sql); 

    try{
    $stmt->execute(array(':nombre' => $nombre, ':apellido1' => $apellido1, ':apellido2' => $apellido2, ':ciudad' => $ciudad, ':telefono' =>$telefono, ':correo'=>$correo,':contrasena' =>$contrasena));
    $_SESSION['correo'] =$_POST["correo"];
    }catch(Exception $e){
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        header('Location:/LOGIN_Tachbot/vista/registro.php?fallo1=true');
    }
   
    echo "Inserción completada"; 
    if (isset($_SESSION['correo'])) { // Comrpobamos si la sesión estaba iniciada 
        echo '<p> Sesión iniciada previamente </p>';
        header('Location:/LOGIN_Tachbot/vista/homePage.php');
    }
    //cerrar
   


    //xml y ajax
    // lola martinez cifuentes albacete 638554015 lola@gmail.com 45lolita

    //FEEDBACK para incorrecto
    if (isset($_GET["fallo1"]) && $_GET["fallo1"] == 'true') {
        echo "<form>Usuario o contraseña invalido.<br>Vuelva a intentarlo</form>";
    }
?>