<?php
$a = $_POST['a'];
$mensaje1 = "El area del octagono es : ";
$perimetro;
$perimetro = $a * 8;
$minibase;
$minibase = $a / 2;
$apotema;
$apotema = $minibase * 2.414213562373;
$area; 
$area = ($perimetro * $apotema) / 2;
echo "El perimetro es: ".$perimetro;
echo "<br>El apotema es: ".$apotema;
echo "<br>$mensaje1 $area";


?>