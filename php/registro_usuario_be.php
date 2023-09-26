<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST ['correo'];
    $usuario = $_POST ['usuario'];
    $contraseña = $_POST ['contraseña'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña)
              VALUES('$nombre_completo','$correo','$usuario','$contraseña')";


    if (mysqli_query($conexion, $query)) {
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location. = "../index.php";
            </script>
        ';
    }else {
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location. = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>