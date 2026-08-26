<?php
/*verificador de puntos de vida (HP)en batalla */
$puntos=$_POST["txthp"];
if($puntos<=0){
echo "personaje derrotado";
}else{
echo "personaje en batalla";
}


?>