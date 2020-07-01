<?php
session_start();
?>
<html>

<head>
    <title>Sesiones</title>
</head>

<body>
    <?php
    if (isset($_POST['Usuario']) and isset($_POST['Clave'])) {
        $_SESSION['Usuario'] = $_POST['Usuario'];
        $_SESSION['Clave'] = $_POST['Clave'];
    }
    ?>
    <h1>Sesiones creadas</h1>
    <a href="devuelveS.php">Ver datos de las sesiones</a>
</body>

</html>