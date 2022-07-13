<?php
include '../template/cabecera.php';
include '../config/db.php';
?>

<?php

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


switch ($accion) {
    case "agregar":

        $sentenciaSQL = $conexion->prepare("INSERT INTO libros (nombre, imagen) VALUES (:nombre, :imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':imagen', $txtImagen);
        $sentenciaSQL->execute();
        //$sql = ("INSERT INTO `libros` (`nombre`, `imagen`) VALUES ('$txtNombre', '$txtImagen');");
        //$conexion->query($sql);
        break;

    case "modificar":
        echo "Presionado boton modificar";
        break;

    case "cancelar":
        echo "Presionado boton cancelar";
        break;
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM `junio_2022`");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de los libros
        </div>

        <div class="card-body">


            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID</label>
                    <input type="txt" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <br>
                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="txt" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
                </div>
                <br>
                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen del libro">
                </div>

                <br>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>


        </div>


    </div>


</div>

<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIT</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($listaLibros as $libro) { ?>
            <tr>
                <td><?php echo $libro['COL 12']; ?></td>
                <td><?php echo $libro['COL 14']; ?></td>
                <td><?php echo $libro['COL 17']; ?></td>
                <td><?php echo $libro['COL 20']; ?></td>



                <td>
                    
                <form action="" method="post">
input
                </form>


                </td>




            </tr>
            <?php } ?>
        </tbody>
    </table>


</div>





<?php include '../template/pie.php';
?>