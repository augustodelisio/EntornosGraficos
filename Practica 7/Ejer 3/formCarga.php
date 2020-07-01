<?php
if (isset($_COOKIE['usuario'])) {
    echo "Usuario actual: " . $_COOKIE["usuario"];
}
?>

<!DOCTYPE html PUBLIC "‐//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
    <title>Formulario nombre usuarios</title>
</head>

<body>
    <FORM action="cookies.php" method="POST" name="formCarga">
        <TABLE width="225">
            <TR>
                <TD> Ingrese nombre de usuario: </TD>
                <TD> <input type="TEXT" name="Nombre" size="20" maxlength="40"></TD>
            </TR>
            <TD colspan="2" align="center"> <INPUT TYPE="SUBMIT" name="Submit" value="Ingresar">
            </TD>
            </TR>
        </TABLE>
    </FORM>
</body>

</html>