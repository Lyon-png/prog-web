<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];
$j = $_POST['j'];
$k = $_POST['k'];
$m = $_POST['m'];
$n = $_POST['n'];
$o = $_POST['o'];
$p = $_POST['p'];
$q = $_POST['q'];
$Nombres = array('name' => "$a , $g , $m");
echo "Ordenados por Nombres: " .$Nombres['name'];
$Apellidos = array('lname' => "$b , $h , $n");
echo "<br>Ordenados por Apellidos: " .$Apellidos['lname'];
$Cedula = array('Cedula' => "$c , $i , $o");
echo "<br>Ordenados por Cedula: " .$Cedula['Cedula'];

$Traba1 = array('traba1' => "$a , $b , $c , $d , $e");
echo "<br><br>Datos del trabajador 1: " .$Traba1['traba1'];
$Traba2 = array('traba2' => "$g , $h , $i , $j , $k");
echo "<br><br>Datos del trabajador 2: " .$Traba2['traba2'];
$Traba3 = array('traba3' => "$m , $n , $o , $p, $q");
echo "<br><br>Datos del trabajador 3: " .$Traba3['traba3'];

$Cedulas;

/*$cuadrado = pow($a, 2) + pow($b, 2);
$raiz = sqrt($cuadrado);
echo "$mensaje $raiz";*/

?>