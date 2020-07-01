<?php
$nom = $_POST['Nombre'];
if ($nom)
    setcookie("usuario", $nom, time() + 3600 * 24 * 7);
?>
<html>

<head>
    <meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
    <title>Coockies</title>
</head>

<body>
    <?php

    if ($nom) {
        echo "Usuario actualizado";
    } else {
        echo "Usuario vacío";
    }
    ?>
    <br>
    <a href="formCarga.php">Volver</a>
</body>

</html>