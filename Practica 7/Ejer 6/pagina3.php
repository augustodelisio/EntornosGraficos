<?php
session_start();
?>
<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    if (isset($_SESSION['usuario'])) {
        echo "Bienvenido " . $_SESSION['usuario'];
    } else {
        echo "No se puede mostrar la página. No tiene los permisos requeridos.";
    }
    session_destroy();
    ?>
</body>

</html>