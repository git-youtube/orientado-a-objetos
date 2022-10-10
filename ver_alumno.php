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





mysqli_close($conn);

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
        <tr >
            <th colspan="5"> 
            	<a href="pruebaSQL.php">Atras</a>
            	<a href="modificar_alumno.php?id=<?php echo $row['id']?>">Modificar</a>
				<a href="eliminar_alumno.php?id=<?php echo $row['id']?>">Eliminar</a> 
            </th>

        </tr>
    <?php
    }
    ?>
    </table>
    </div>