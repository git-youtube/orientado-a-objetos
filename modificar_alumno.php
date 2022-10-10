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

$sql = "SELECT *  FROM alumnos WHERE id=".$bloque;
$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($query);






?>
<head>

    <style>


    </style>

</head>
<div>
    <table class="table" border="1" bordercolor="black" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>codMatricula</th>
            </tr>
        </thead>
            <?php
            foreach ($query as $row) {
        ?>
        <tr>
            <th><?php echo $row['id'] ?></th>
            <th><?php echo $row['DNI'] ?></th>
            <th><?php echo $row['Nombre'] ?></th>
            <th><?php echo $row['Email'] ?></th>
            <th><?php echo $row['codMatricula'] ?></th>
        </tr>

    <?php
    }
    ?>

    </table>
    <br>
  
	<form>
				<input name="id" placeholder="id">
                <input name="DNI" placeholder="DNI">
                <input name="Nombre" placeholder="Nombre">
                <input name="Email" placeholder="Email">
                <input name="codMatricula" placeholder="codMatricula">
                <input name="action" type="submit" value="Actualizar">

      </form>
    </div>

    <?php
$accion=$_GET["action"];
if($accion=="Actualizar"){
    $bloque=$_GET['id'];
    $DNI=$_GET['DNI'];
    $Nombre=$_GET['Nombre'];
    $Email=$_GET['Email'];
    $codMatricula=$_GET['codMatricula'];
    echo "UPDATE alumnos SET Nombre =? , Email =? , codMatricula = ? WHERE id = ?";
    
    echo "UPDATE alumnos SET Nombre ='".$Nombre. "', Email ='".$Email. "', codMatricula ='".$codMatricula. "' WHERE id ='".$bloque."'";
    $sql = "UPDATE alumnos SET Nombre ='".$Nombre. "', Email ='".$Email. "', codMatricula ='".$codMatricula. "' WHERE id ='".$bloque."'";
    $query = mysqli_query($conn,$sql);
    mysqli_close($conn);
}