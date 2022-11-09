<?php 
    include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body class="bg-dark">
                <div class="container mt-5">
                    <form action="/tabla_crud2/controllers/update.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id" placeholder="ID" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos" value="<?php echo $row['apellido']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="/tabla_crud2/views/alumno.php" class="btn btn-danger btn-block">Regresar</a>
                    </form>
                    
                </div>
    </body>
</html>