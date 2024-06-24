<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>
<body>
    <header>
        <div class="sn">Site name</div>
        <div class="bt">
            <span><a href="index.php">Nosotros</a></span>
            <span>Home</span>
            <span><a href="login.php">Login</a></span>
            <span class="reg"><a href="registrarse.php">Registrarse</a></span>
        </div>
    </header>
    <div class="log">
        <h1 class="lo">Registrarse .</h1>
        <form action = "php/registro_usuario_be.php" method="POST">
            <div class="fo">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                <input type="text" id="correo" name="correo" placeholder="Correo">
                <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                <input type="password" id="contraseña" name="contrasena" placeholder="Contraseña">
            </div>
            <button class="su">Log in </button>

    </form>
    <p>Ya tienes cuenta <span class="registrarse"><a href="login.php">Inicia sesion</a></span></p>
    </div>

    <footer>
        <div class="ft">Site name</div>
        <div class="tabla">
            <table>
                <tr>
                    <td>Topic</td>
                    <td>Topic</td>
                    <td>Topic</td>
                </tr>
                <tr>
                    <td>Page</td>
                    <td>Page</td>
                    <td>Page</td>
                </tr>
            </table>
        </div>
    </footer>
</body>
</html>