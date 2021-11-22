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
        $expira = time() + 60 * 60 * 24 * 30; //60 segundos * 60 minutos * 24 horas * 30 días 
        setcookie( “usuario”, “Pepe”, $expira ); 
        echo "<h1> Formularios </h1>";
    ?>
    <form action="bienvenidad.php", method="post">
        Nombre: <input type="text" name="nombre" id="nombre" />
        Edad: <input type="text" name="edad" id="edad"/>
    <input type="submit" name="submit" />
    </form>
</body>
</html>