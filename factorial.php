<!DOCTYPE html>
<html lang="es">
    <?php
    $a="";
    $b=1;
    ?>

    <head>
        <title>TAREA1</title>
        <!-- required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-windt, initial-scale=1, shrink-to-fit=no">
        <style>
            body{
                font-family: sans-serif;
            }
            .tarea{
                background-color: blue;
                height: 50vh;
                margin: 5%;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="tarea">
            <h1>ALAN SERRANO :) </h1>

            <p>ESCRIBE UN NUMERO <br><p>
            <form id="formulario" name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="text" id="a" name="a" value="<?php echo $a; ?>" />
                <input type="submit" id="enviar" name="enviar" value="Factorial"/>
            </form>

            <?php
                do{
                     $b= $b * $_REQUEST['a'];
                    $_REQUEST['a'] -= 1;
                    } while($_REQUEST['a'] > 1);
                    echo "El Factorial del numero es: " .$b;
            ?> 
        </div>
    </body>
</html>

