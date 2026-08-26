<?php
/*cobrador de pasaje de autobus universitario */


$km=$_POST["txtkm"];
if($km>5){
    echo "Pasaje de transporte gratuito";
}else{
    echo "pasaje normal";
}



?>