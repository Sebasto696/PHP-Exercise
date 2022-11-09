<?php
    include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM coordinador";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Pagina Coordinador</title>
    </head>
    <body class="bg-dark">
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 text-light">
                    <h1>Ingresa los datos</h1>
                        <form action="/tabla_crud2/controllers/insertarCoordinador.php" method="POST">

                            <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Codigo del estudiante">
                            <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">

                            <input type="submit" class="btn btn-secondary">
                            <a href="/tabla_crud2/index.php" class="btn btn-danger btn-block">Regresar</a>
                        </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-secondary table-striped">
                            <tr>
                                <th>Codigo</th>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="text-light">
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['cod_estudiante']?></th>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['apellido']?></th>
                                    <th><a href="/tabla_crud2/controllers/actualizarCoordinador.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-secondary">Editar</a></th>
                                    <th><a href="/tabla_crud2/controllers/deleteCoordinador.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>               
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>