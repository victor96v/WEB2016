<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>

</head>
<body>
<?php
session_start();
$nombre = $_POST["name"];
$email = $_POST["email"];
$dia = $_POST["date"];
$hora = $_POST["time"];
$num_personas = $_POST["people"];

$_SESSION["name"]=$nombre;
$_SESSION["email"]=$email;
$_SESSION["day"]=$dia;
$_SESSION["hour"]=$hora;
$_SESSION["people"]=$num_personas;

echo "<h1 style='text-align: center;padding-bottom: 1em; padding-top: 1em'>Gracias por tu reserva, $nombre, ya tienes tu mesa en Ricks!</h1>";

echo "<p style='text-align: center'>Confirma que todo es correcto: ";
echo "<p style='text-align: center'>Vendras el dia $dia a las $hora</p>";
echo "<p style='text-align: center'>Sereis un total de $num_personas personas</p>";
echo "<p style='text-align: center'>Te mandaremos un comprobante de tu reserva al email: $email</p>";
echo "<h2 style='text-align: center'>Gracias por confiar en nosotros!</h2>";



echo"<a href='confirmar.php'><button style='float:right; margin-right:30em;' class='btn btn-success btn-xs' >Confirmar</button></a>";
echo "<a href='../index.php'><button style='float:left;  margin-left:30em;' class='btn btn-danger btn-xs' >Cancelar</button></a>";


?>

<?php include "scripts.php"; ?>
</body>
</html>



