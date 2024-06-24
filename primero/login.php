<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

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
        <h1 class="lo">Login .</h1>
        <!-- En el action tengo que expecificar que se va a ejecturar al interacturar con ese formulario -->

        <form method="POST" action="php/login_usuario_be.php">
            <div class="fo">
                <input type="text" id="nombre" name="usuario" placeholder="Usuario">
                <input type="password" id="nombre" name="contrasena" placeholder="Contraseña">
            </div>
            <button class="su">Sing up</button>

    </form>
    <p>No tienes cuenta <span class="registrarse"><a href="registrarse.php">Registrate</a></span></p>
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