<!DOCTYPE html>
    <html>
<head>
    

    <link rel="stylesheet" type="text/css" href="../assets/tables_jspkg/jquery.dynatable.css">
</head>


<body>





<?php


// leer datos de usuario y contraseña de la base de datos
include("config.php") ;




$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($conn -> connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql);
if($result -> num_rows > 0){
    echo "<table id='my-table'>
<thead>
<tr>
<th>Nombre</th>
<th>Email</th>
<th>Dia</th>
<th>Hora</th>
<th>Personas</th>
</tr>
</thead>";
    while($row = $result->fetch_assoc()){
        echo "
<tbody><tr><td>".$row["name"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["day"]."</td>
        <td>".$row["hour"]."</td>
        <td>".$row["people"]."</td></tr></tbody>";

                }
    echo"</table>";}else {
    echo "0 results";
}
$conn->close();
?>

<script src="../assets/tables_jspkg/jquery.dynatable.js"></script>
<script src="../assets/script.js"></script>

</body>
</html>

















