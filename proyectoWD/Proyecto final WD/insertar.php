<?php
include("conexion.php");
$con = conectar();

$cod_cliente = $_POST['cod_cliente'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];



$sql = "INSERT INTO registro VALUES('$cod_cliente','$usuario','$email')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: registro.php");
} else {
}
