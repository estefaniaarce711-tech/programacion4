<?php
/**
 * crear un meme de programacion cn una imaen y texto
 *@param string $textosuperior el texto que se muestra en l aparte superior
 *@param string $imagenurl la URL de la imagen
 *@param string $textoinferior el texto que se muestra en la parte inferior 
 */
function crearmeme(string $textosuperior, string $imagenurl, string $textoinferior): void
{
    echo'<style>
    .contenedor-meme{
    display:flex;
    flex-direction:colum;
    align-items:center;
    justify-content:center;
    text-align:center;
    width:100%;
    max-width:500px;
    margin:50px auto;
    border:2px solid #333;
    brder-radius:8px;
    padding:10px;
    }
    .contenedor-meme img{
    max-width:100%;
    height:auto;
    margin:20px 0;
    }
    .contenedor-meme h4,contenedor-meme p{
    margin:0;
    padding:5px;
    }
    </style>';
    echo "<div class='contenedor-meme'
    <h4>.".htmlspecialchars($textoinferior)."</h4>
    <img src='".htmlspecialchars($imagenurl)."'alt='meme de programacion'>
    <p>".htmlspecialchars($textoinferior).'</p>
    </div>';

}
//ejemplo de uso
$textosuperior='cuando te das cuenta....';
$imagenurl='https://www.bing.com/th/id/OIP.2EcYfDW5knHSX6TxYsfm9QHaII?w=193&h=212&c=8&rs=1&qlt=90&o=6&pid=ImgAns&rm=2';
$textoinferior='que tu codigo fuincione ala primera';


crearmeme($textosuperior,$imagenurl,$textoinferior);
?>