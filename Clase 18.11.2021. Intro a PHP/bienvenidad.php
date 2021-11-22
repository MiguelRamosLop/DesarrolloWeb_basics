<?php 
 
    if (isset($_COOKIE["usuario"])) {
        echo "Bienvenido " . $_COOKIE["usuario"] . "!<br />"; 
    }
    else {
        echo "Bienvenido, invitado<br />";
    }
         


    function escribir_datos ($nombre, $edad){
        return "Tus datos son " . $nombre . " " .$edad;
    }

    echo "Bienvenido " .$_POST["nombre"];
    echo "<br>";
    echo "Tienes " .$_POST["edad"];

    echo escribir_datos($_POST["nombre"], $_POST["edad"])
?>