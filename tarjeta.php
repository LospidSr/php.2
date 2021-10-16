<?php 
//Utilizamos el '@' para que no se muestren los errores dentro del HTML
@$nombre = $_POST['nameTarjeta']; //Creamos variables que obtendran los datos por el metodo POST del formulario
@$apellido = $_POST['apellidoTarj']; //Los nombres indicados dentro de los POST son los mismos que colocamos en los input de HTML
@$profesion = $_POST['proTarj'];
@$descripcion = $_POST['descripcionTarj'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>tarea 10</title>
</head>
<body id="body">
    <main>
        <div class="container">
            <div class="row">
                <div id="tarjeta " class="col-12 col-sm-6 center-card mt-5">
                    <div class="card-perso">
                        <form action="tarjeta.php" method="POST">
                            <div class="col-12 col-sm-12 p-3">
                                <span>Nombre:</span>
                                <input type="text" name="nameTarjeta" id="nameTarjeta" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 p-3">
                                <span>Apellido:</span>
                                <input type="text" name="apellidoTarj" id="apellidoTarj" class="form-control">
                            </div>

                            <div class="col-12 col-sm-12 p-3">
                                <span>Prefesion:</span>
                                <input type="text" name="proTarj" id="proTarj" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 p-3">
                                <span>Descripcion:</span>
                                <textarea type="text" name="descripcionTarj" id="descripcionTarj" class="form-control" rows="3"> </textarea>
                            </div>
                            <div class="col-12 col-sm-12 p-3 text-end mt-4">
                                <button class="btn btn-outline-primary">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-6 center-card mt-5">
                    <div class="card-perso">
                        <div class="card-header">
                            <div class="col-12 col-sm-12">
                                <span>
                                    <b>Nombre y apellido:</b> <br>
                                </span>
                                <span>
                                    <?php echo @$_POST['nameTarjeta'] . ' ' . @$_POST['apellidoTarj']; //Realizamos un echo de los datos obtenidos por medio del formulario ?>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <span>
                                <b>Profesion:</b> <br>
                            </span>
                            <span>
                                <?php echo @$_POST['proTarj'];?>
                            </span>
                        </div>
                        <div class="card-header">
                            <span>
                                <b>Descripcion:</b> <br>
                            </span>
                            <span>
                                <?php echo @$_POST['descripcionTarj']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>