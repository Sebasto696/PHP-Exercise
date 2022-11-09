<?php

include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
$con=conectar();


$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$id = $__POST['id'];


$sql="UPDATE novedad SET titulo='$titulo',descripcion='$descripcion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /tabla_crud2/views/novedades.php");
    }
?>