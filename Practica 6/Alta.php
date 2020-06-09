<html>

<head>
    <title>Alta Usuario</title>
</head>

<body>
    <?php
    include("Conexion.php");
    //Captura datos desde el Form anterior
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHabitantes = $_POST['habitantes'];
    $vSuperficie = $_POST['superficie'];
    $vMetro = $_POST['tieneMetro'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT Count(ciudad) as cantciu FROM ciudades WHERE ciudad='$vCiudad'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
    $vCantUsuarios = mysqli_fetch_assoc($vResultado);
    //$vCantUsuarios = mysqli_result($vResultado, 0);
    if ($vCantUsuarios['cantciu'] != 0) {
        echo ("La ciudad ". $vCiudad ." ya existe.<br>");
        echo ("<A href='FormAlta.html'>Ingresar otra</A>");
    }
    else {
        $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
        values('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie', '$vMetro')";
        mysqli_query($link, $vSql) or die(mysqli_error($link));
        echo ("La ciudad fue registrada<br>");
        echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
    }
    // Cerrar la conexion
    mysqli_close($link);
    ?></body>

</html>