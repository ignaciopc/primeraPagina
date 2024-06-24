<?php

//Inicias la sesion para que se sepa que vamos a estar utlizando las sesiones
session_start(); 

// Incluyo el archivo de conexion
include 'conexion_be.php';

// Guardo en la variable $usuario el usuario que mete en el login
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512',$contrasena);

// Recogo si existe esa consulta a la base de datos 
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

// Aqui compruebo el numero de filas que tiene mi consulta (El metodo mysqli_num_rows devuelve el numero de filas de la consulta)
if (mysqli_num_rows($validar_login) > 0) {
    //Variable de sesion para verificar si puede entrar en ciertas paginas o no
    $_SESSION['usuario'] = $usuario;
    header("location: ../index.php");
    exit;
} else {
    echo '<script>
            alert("No se ha encontrado ese usuario, prueba otra vez");
            window.location = "../login.php";
          </script>';
    exit;
}
?>
