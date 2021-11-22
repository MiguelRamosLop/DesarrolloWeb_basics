<?php  
    $expira = time() + 60 * 60 * 24 * 30; //60 segundos * 60 minutos * 24 horas * 30 
días 
    setcookie( “usuario”, “Pepe”, $expire ); 
?> 

<?php 
if (isset($_COOKIE["usuario"])) 
  echo "Bienvenido " . $_COOKIE["usuario"] . "!<br />"; 
else 
  echo "Bienvenido, invitado<br />"; 
?>