<?php 

$a = 5;
$b = 6;

if(isset($a, $b)){
	echo "A existe.";
}else{
	echo "N existe";
}


echo "<br />";

$a = 5;
$b = 6;

unset($a); // "deleta" a variavel

if(isset($a, $b)){
	echo "A existe.";
}else{
	echo "N existe";
}




 ?>