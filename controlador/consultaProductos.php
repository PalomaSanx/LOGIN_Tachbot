<?php
################################CONSULTA PREPARDA PDO######################
session_start();
//conectar
require 'conexionPDO.php';
//obtener valores de formulario
$correo = $_SESSION['correo'];
//SQL con marcadores
$sql = "SELECT * FROM cliente cli, pedido ped where cli.correo=:correo && cli.id_cliente=ped.id_cli GROUP BY cli.id_cliente";
//preparar
$stmtPDO = $conexionPDO->prepare($sql);
//vincular y ejecutar (con array)
$stmtPDO->execute(array(':correo' => $correo));


if (!$stmtPDO) {
    die("No se puede realizar la consulta $conexion->errno: $conexion->error");
}

// Mostramos una tabla con el resultado de la consulta
echo "<center><h1>TABLA PEDIDO DE LA BBDD=TACHBOT</h1><br><br>";
echo "<center><table border=2><tr> <th>CLIENTE</th> <th>SERVICIO</th> <th>FECHA PEDIDO</th>  <th>FECHA EXPIRACION</th> <th>PRECIO TOTAL</th> <th>ID PEDIDO</th> <th>RECLAMACION</th></tr>";

while ($registro = $stmtPDO->fetch()) { //$registro = $stmtPDO->fetch(PDO::FETCH_ASSOC)
    echo "</tr>";
    echo "<td>" . $registro['id_cli'] . "</td>";
    echo "<td>" . $registro['id_ser'] . "</td>";
    echo "<td>" . $registro['fecha_pedido'] . "</td>";
    echo "<td>" . $registro['fecha_expiracion'] . "</td>";
    echo "<td>" . $registro['precio_total'] . "</td>";
    echo "<td>" . $registro['id_pedido'] . "</td>";
    echo "<td>" . $registro['reclamacion'] . "</td>";
    echo "</tr>";
}

?>