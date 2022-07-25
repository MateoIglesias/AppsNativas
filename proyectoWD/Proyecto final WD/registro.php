<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM registro";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos del cliente</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="cod_cliente" placeholder="cod cliente">
                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                    <input type="email" class="form-control mb-3" name="email" placeholder="Email">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['cod_cliente'] ?></th>
                                <th><?php echo $row['usuario'] ?></th>
                                <th><?php echo $row['email'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['cod_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['cod_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>