<?php
$bloque=$_GET['id'];
$servername = "localhost";
$database = "centrofp";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM alumnos WHERE id=".$bloque;
$query = mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<a href="pruebaSQL.php?">Volver</a>







