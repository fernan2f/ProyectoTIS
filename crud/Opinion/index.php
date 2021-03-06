<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Municipalidad</title>
    <?php require("../header.php")?>
</head>
<body>
    <?php require("../navbar.php")?>
    <?php
        require("../conexion.php");
        $query = "SELECT id_opinion,nombre_opinion,correo_opinion,fecha_opinion FROM opinion ORDER BY fecha_opinion";
        $data = mysqli_query($conexion,$query);
    ?>
    <div class="container">
        <div class="row">
            <span class="fs-2 fw-bolder text-center">
                OPINION
            </span>
        </div>
        <div class="row mt-4">
            <table class="w-100 table-hover table-light table table-bordered">   
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo de contacto</th>
                        <th>Fecha de Subida</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <?php
                    while($fila=mysqli_fetch_assoc($data)){
                ?>
                    <tr>
                        <th><?php echo$fila["nombre_opinion"]?></th>
                        <th><?php echo$fila["correo_opinion"]?></th>
                        <th><?php echo$fila["fecha_opinion"]?></th>
                        <th class="ps-3">
                            <a href="ver_opinion.php?id=<?php echo$fila["id_opinion"]?>" style="text-decoration: none;">
                                <span class="material-icons text-secondary">
                                    visibility
                                </span>
                            </a>
                            <a href="Consultas/eliminar_opinion.php?id=<?php echo$fila["id_opinion"]?>" style="text-decoration: none;">
                                <span class="material-icons" style="color: red;">
                                        delete
                                </span>
                            </a>
                        </th>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>