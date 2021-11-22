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
        if ($_FILES["file"]["error"]>0){

            echo "Error: ". $_FILES["file"]["error"]. "<Br>";
        }
        else {
            echo "Subiste: ".$_FILES["file"]["name"]. "<Br>";
            echo "Tipo de archivo: ".$_FILES["file"]["type"]. 
            "<Br>";
            echo "Tamaño: ".($_FILES["file"]["size"] / 1024). "
            Kb<Br>";
            echo "Almacenado en: ".$_FILES["file"]["tmp_name"];
        }
    ?>
</body>
</html>

