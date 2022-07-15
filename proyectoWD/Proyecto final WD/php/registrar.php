<?php

include("conect.php");

$email = trim($_POST['email']);
$usuario = trim($_POST['usuario']);
$contrasenia = trim($_POST['contrasenia']);
$consulta = "INSERT INTO registro(email, usuario, contrasenia) VALUES ('$email','$usuario','$contrasenia')";
$resultado = mysqli_query($conex, $consulta);
if ($resultado) {
?>
    <h3 class="ok">Te registraste correctamente</h3>
<?php
} else {
?>
    <h3 class="bad">No se ha podido completar el registro</h3>
<?php
}
