<?php include '../template/cabecera.php';
?>

<?php

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

echo $txtID . "<br>";
echo $txtNombre . "<br>";
echo $txtImagen . "<br>";
echo $accion . "<br>";

$host = "localhost";
$db = "crud";
$usuario = "root";
$contraseña = "Guatemala2022.";


try {

    $conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $contraseña);
    if ($conexion){
        echo "Conexion con exito";


    }

} catch ( Exception $ex) {

    echo $ex->getMessage();

}


switch ($accion) {
    case "agregar":
    echo "Presionado boton agregar";
    //INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'php libro de programacion', 'imagen.jpg');
    $sentenciaSQL = $conexion->prepare("INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'php libro de programacion', 'imagen.jpg');");
    $sentenciaSQL->execute(); 
    break;

    case "modificar":
    echo "Presionado boton modificar";
    break;

    case "cancelar":
    echo "Presionado boton cancelar";
    break;
}

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
                <th>ID</th>
                <th>Nombre</th>
                <th>imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende PHP</td>
                <td>imagen.jpg</td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>


</div>





<?php include '../template/pie.php';
?>