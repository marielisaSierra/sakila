<?php

function refrezcar($archivo)
{
    header("Location: $archivo");
}


function alert($titulo, $texto, $icono)
{

    return "swal({
        title: '$titulo',
        text: '$texto',
        icono: '$icono',
        
})";
}

$script_alert = "";