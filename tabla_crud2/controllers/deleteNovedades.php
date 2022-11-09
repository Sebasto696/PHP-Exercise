<?php

include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
$con=conectar();

$titulo=$_GET['id'];

$sql="DELETE FROM novedad  WHERE titulo='$titulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /tabla_crud2/views/novedades.php");
    }
?>