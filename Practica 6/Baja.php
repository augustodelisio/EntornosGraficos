<html>

<head>
    <title>Baja</title>
</head>

<body>
    <?php
    include("Conexion.php");
    $vCiudad = $_POST['ciudad'];
    $vSql = "SELECT * FROM ciudades WHERE ciudad='$vCiudad' ";
    $vResultado = mysqli_query($link, $vSql);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente!<br>");
        echo ("<A href='FormBajaIni.html'>Volver</A>");
    } else {
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "DELETE FROM ciudades WHERE ciudad = '$vCiudad' ";
        mysqli_query($link, $vSql);
        echo ("La ciudad fue Borrada<br>");
        echo ("<A href='Menu.html'>Volver al Menu del ABM</A>");
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>