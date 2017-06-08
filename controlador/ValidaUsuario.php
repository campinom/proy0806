<?php

include '../librerias.php';

$oUsu=new Usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if($oUsu->VerificaLocal())
    echo "TODO OKEI";
    
    else
        echo "Todo mal :( uwu ";
        


