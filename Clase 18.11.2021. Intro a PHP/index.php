<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   

        echo "<h1> Hola Mundo </h1>";
        //comentario en linea
        # comentario tipo python
        /**comentario en bloque */
        $var1 = 13;
        echo "Tienes " . $var1;
        echo "<br>";
        $var2 = "Chema";
        echo "Hola " . $var2;
        echo "<br>";
        $var3 = $var1 + 7;
        echo "Tiene " . $var3;
        echo "<br>";
        echo "Longitud del String ".$var2 .strlen($var2);
        echo "<br>";
        $d=date("D");
        if ($d == "Fri")
            echo "¡Ya es vierness!";
        elseif ($d == "Sun") 
            echo "Domingo, dia de relass";
        else
            echo "Es martes. AHHHHHH";

        function escribir_datos ($nombre, $edad){
            return "Tus datos son " . $nombre . " " .$edad;
        }
        echo "<br>";
        echo escribir_datos("Miguel", 20);



    ?>
</body>
</html>