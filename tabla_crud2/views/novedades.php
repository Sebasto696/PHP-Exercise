<?php
    include("/xampp/htdocs/tabla_crud2/Dao/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM novedad";
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
        <title>Novedades</title>
    </head>
    <body class="bg-dark">
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 text-light">
                    <h1>Ingresa las novedades</h1>
                        <form action="/tabla_crud2/controllers/insertarNovedad.php" method="POST">

                            <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo de la novedad">
                            <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción de la novedad">
                            <input type="text" class="form-control mb-3" name="id" placeholder="ID">

                            <input type="submit" class="btn btn-success">
                            <a href="/tabla_crud2/index.php" class="btn btn-danger btn-block">Regresar</a>
                        </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-danger">
                            <tr>
                                <th>Titulo de la novedad</th>
                                <th>Descripción de la novedad</th>
                                <th>ID</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="text-light">
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['titulo']?></th>
                                    <th><?php echo $row['descripcion']?></th>
                                    <th><?php echo $row['id']?></th>
                                    <th><a href="/tabla_crud2/controllers/actualizarNovedades.php?id=<?php echo $row['titulo'] ?>" class="btn btn-success">Editar</a></th>
                                    <th><a href="/tabla_crud2/controllers/deleteNovedades.php?id=<?php echo $row['titulo'] ?>" class="btn btn-danger">Eliminar</a></th>               
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