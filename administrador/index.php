<?php

session_start();

if ($_POST) {

    if ($_POST['usuario'] == "develoteca" && $_POST['contraseña'] == "sistema") {  // LINEA A CAMBIAR PARA CONSULTAR MYSQL 
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "develoteca";
        header('Location:inicio.php');
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br><br />
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>


                        <form method="post">
                            <div class="form-group">
                                <label>Usuario:</label>
                                <input type="txt" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su usuario" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" name="contraseña" placeholder="Ingresa tu contraseña" >
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>