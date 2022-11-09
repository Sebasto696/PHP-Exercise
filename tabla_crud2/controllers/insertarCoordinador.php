<?php
include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];


$sql="INSERT INTO coordinador VALUES('$cod_estudiante','$id','$nombre','$apellido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: /tabla_crud2/views/coordinador.php");
    
}else {
}
?>