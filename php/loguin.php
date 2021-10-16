<?php
$emailUsuario = $_POST["emailUs"];
$passUs = $_POST["passUs"];
$emailValido = "sebasrondon17@gmail.com";
$passValida = "123";
if( $emailUsuario == $emailValido && $passUs == $passValida) {
    header("location: ../Sobremi.php"); //Redirigimos al usuario logueado a la página sobremi
}
else {
    //Script de alert realizado con JS
    echo '
        <script>
            alert("Datos incorrectos");
            window.location("../index.php");
        </script>
    ';
}
?>