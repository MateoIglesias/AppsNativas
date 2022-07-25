<?php

include("conexion.php");
$con = conectar();

$cod_cliente = $_GET['id'];

$sql = "DELETE FROM registro  WHERE cod_cliente='$cod_cliente'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: registro.php");
}
