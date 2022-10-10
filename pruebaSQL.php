<?php

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

$sql = "SELECT *  FROM alumnos";
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
                <th>Nombre</th>
                 <th>DNI</th>
            </tr>
        </thead>
            <?php
            foreach ($query as $row) {
        ?>
        <tr>
            <th><?php echo $row['Nombre'] ?></th>
             <th><?php echo $row['DNI'] ?></th>
        </tr>
        <tr >
            <th colspan="5"> 
            	<a href="ver_alumno.php?id=<?php echo $row['id']?>">Ver</a>
            </th>

        </tr>
    <?php
    }
    ?>
    </table>
    </div>