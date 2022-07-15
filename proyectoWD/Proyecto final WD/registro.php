<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="css/estk}ilos.css">
    <link rel="shortcut icon" href="img/rock-svgrepo-com.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <section class="textos-header">
            <h1>Contacto</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <div class="signupFrm">
            <form action="php/registrar.php" method="post" class="form">
                <h1 class="title">registro</h1>

                <div class="inputContainer">
                    <input required type="email" class="input" placeholder="Email" name="email">
                    <label for="email" class="label">Email</label>
                </div>

                <div class="inputContainer">
                    <input type="text" class="input" placeholder="Usuario" name="usuario">
                    <label for="usuario" class="label">Usuario</label>
                </div>

                <div class="inputContainer">
                    <input type="text" class="input" placeholder="Contraseña" name="contrasenia">
                    <label for="contrasenia" class="label">Contraseña</label>
                </div>

                <input type="submit" class="submitBtn" value="Registrarse">
            </form>
        </div>
    </main>
</body>
<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Telefono</h4>
            <p>3413561226</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>rockisnotdead@gmail.com</p>
        </div>
        <div class="content-foo">
            <h4>Donde estamos</h4>
            <p>Paraguay 1950, Funes, Santa Fe</p>
        </div>
    </div>
    </div>
    <h2 class="titulo-final">&copy; Grupo 2</h2>
</footer>

</html>