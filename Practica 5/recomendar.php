<?php
$destino = $_POST['email'];
$asunto = "Recomendacion";
$desde = "augustodelisio@gmail.com";
$contenido = "
    \n
    Nombre: $_POST[nombre]\n
    Email: $_POST[email]\n
    \n
    ";
mail($destino, $asunto, $contenido, $desde);
echo "Recomendación enviada";
?>