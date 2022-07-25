<?php

include("conexion.php");
$con = conectar();

$cod_cliente = $_POST['cod_cliente'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];


$sql = "UPDATE registro SET  usuario='$usuario',email='$email' WHERE cod_cliente='$cod_cliente'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: registro.php");
}
