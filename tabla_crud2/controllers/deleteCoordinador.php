<?php

include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM coordinador  WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /tabla_crud2/views/coordinador.php");
    }
?>