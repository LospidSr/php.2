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
    <header>
        <div class="navbar bg-dark">
                <div class="container-fluid justify-content-md-center">
                    <div class="row">
                        <div class="col-12 col-sm-12 p-3">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 center-card">
                    <div class="card">
                        <form action="php/loguin.php" method="POST"> <!-- Indicamos dentro de action hacia donde 
                        tiene que dirigir la acción de los datos, y dentro de method indicamos por cual metodo 
                        queremos que se realice (get o post) -->
                                <div class="col-12 col-sm-12 p-3">
                                    <span>Email:</span>
                                    <input type="text" name="emailUs" id="emailUs" class="form-control">
                                </div>
                                <div class="col-12 col-sm-12 p-3">
                                    <span>contraseña:</span>
                                    <input type="password" name="passUs" id="passUs" class="form-control">
                                </div>                               
                                <div class="col-12 col-sm-12 p-3 text-end mt-4">
                                    <button class="btn btn-outline-primary">Entrar</button>
                                </div>                           
                        </form>
                    </div> 
                </div>
            </div>
        </div>






    </main>
</body>

</html>