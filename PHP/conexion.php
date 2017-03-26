<?php

// leer datos de usuario y contraseña de la base de datos
include("config.php") ;


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());

}

$sql = "INSERT INTO clientes (name, email, day,hour,people)
VALUES ('$nombre', '$email', '$dia', '$hora','$num_personas')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>