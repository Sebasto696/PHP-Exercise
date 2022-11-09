<?php

include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="UPDATE coordinador SET id='$id',nombre='$nombre',apellido='$apellido' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /tabla_crud2/views/coordinador.php");
    }
?>