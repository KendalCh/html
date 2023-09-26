<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor debes de iniciar sesión");
                window.location = "expotecnica.php";
            </script>
        ';
        session_destroy();
        die();
    }

    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBK</title>
</head>
<body>
    <h1>KBK</h1>
    <a href="php/cerrar_sesion.php"></a>
</body>
</html>