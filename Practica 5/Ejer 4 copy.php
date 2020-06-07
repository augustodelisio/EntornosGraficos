<?php
    session_start();
?>
<html>
    <body>
        <a href="Ejer 4.php"></a>
        <?php
            echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
        ?>
        <br>
        <a href="Ejer 4.php">Otra página</a>
    </body>
</html>