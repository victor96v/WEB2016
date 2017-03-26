<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            h1,h2{
                padding-top: 2em;
                padding-left: 12em;
                align-content: center;
            }
            
        </style>
        <?php session_start();
        $nombre = $_SESSION["name"];
            $email = $_SESSION["email"];
                $dia = $_SESSION["day"];
                    $hora = $_SESSION["hour"];
                        $num_personas = $_SESSION["people"];
        include "head.php"; ?>
        <link href="../CSS/resultado.css">
    </head>
    <body>
        <h1>Datos confirmados con exito</h1>
        <h2><a href="../index.php">Vuelve a la pagina principal</a></h2>
        <?php
        
        ?>
        <a href="../index.php"></a>
        <?php include "scripts.php"; ?>
    </body>
</html>
<?php

include "conexion.php";
?>
<?php
session_cache_expire(300);
?>