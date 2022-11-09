<?php
include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
$con=conectar();

$id = $__POST['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];


$sql="INSERT INTO novedad VALUES('$titulo','$descripcion','$id')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: /tabla_crud2/views/novedades.php");
    
}else {
}
?>