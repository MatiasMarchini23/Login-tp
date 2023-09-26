<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "palabrasmagicas";
$ckpass = 2323;

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  header ("location: ../view/c0rrect0.html" );
} else {
  
  header ("location: ../view/err0r.html" );
}

 ?>
