<?php
$a = $_POST['a'];
$b = $_POST['b'];
$mensaje = "La hipotenusa es : ";
$raiz;
$cuadrado;
$cuadrado = pow($a, 2) + pow($b, 2);
$raiz = sqrt($cuadrado);
echo "$mensaje $raiz";

?>