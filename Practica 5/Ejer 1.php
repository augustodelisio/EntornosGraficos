<?php
    $destinatario = "destinatario@gmail.com ";
    $asunto = "Ejer1PHP";
    $cuerpo = "";
    $cuerpo = ' <html>
                    <head>
                        <title>Envio de mail</title>
                    </head>
                    <body>
                        <h1>Ejer 1</h1>
                        <p><b>Probando resolucion del ejercicio 1 de la practica 5</b></p>
                    </body>
                </html> ';
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Augusto <augustodelisio@gmail.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    mail($destinatario,$asunto,$cuerpo, $headers)
?>