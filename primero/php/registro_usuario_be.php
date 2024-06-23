<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//Verificar que el correo no este en la base de datos
$verificarUsuario = mysqli_query($conexion,"SELECT * FROM  usuarios where usuario = '$usuario' ");

if(mysqli_num_rows($verificarUsuario) > 0){
    echo '<script> alert("El usaurio  ya esta registrado") ;
     window.location = "../index.php" </script>' ;
    exit();
}else{
    
    $verificar = mysqli_query($conexion,"SELECT * FROM  usuarios where correo = '$correo' ");

    if(mysqli_num_rows($verificar) > 0){
        echo '<script> alert("El correo  ya esta registrado") ;
         window.location = "../index.php" </script>' ;
        exit();
    }else{
        echo '<script>   window.location ="../index.php" </script>' ;
    }
}




//Verificar que el usuario no este en la base de datos

$query = "INSERT INTO usuarios (nombre,correo,usuario,contrasena) VALUES ('$nombre','$correo','$usuario','$contrasena')";

$ejectura = mysqli_query($conexion,$query);

if($ejectura){
    echo '<script> window.location ="../index.php"</script>';
}else{
    echo '<script> window.location ="../index.php"</script>';

}

$mysqli_close($conexion);

?>