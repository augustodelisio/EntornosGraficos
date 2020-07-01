<?php
if (!isset($_COOKIE['visitas'])) {
    $visitas = 1;
    setcookie("visitas", $visitas, time() + 3600 * 24 * 7);
} else {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie("visitas", $visitas, time() + 3600 * 24 * 7);
}
?>
<html>

<body>
    <?php
    if ($visitas > 1) {
        echo "Cantidad de veces que visitaste la pagina: " . $_COOKIE['visitas'];
    } else {
        echo "Bienvenido, esta es la primera vez que visitás esta página";
        echo $visitas;
    }
    ?>
</body>

</html>