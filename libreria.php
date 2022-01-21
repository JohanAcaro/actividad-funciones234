<?php
function transformar($dato){//paso de argumento por valor
    return $dato." transformado";
}

function calcularTotal($unidades, $precio, $iva){
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal+$cuotaIva;
    return;
}   
function calcularTotal2($unidades, $precio, $tipoOperacion){
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    if($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    }
    elseif($tipoOperacion=="reducido"){
        $cuotaIva=$subtotal*0.1;
    }
    else{
        $cuotaIva=$subtotal*0.04;
    }


    $total=$subtotal+$cuotaIva;
    return $total;
}
function manipularString($mensaje){
    return "En mayúsculas ".strtoupper($mensaje);
}

function primerMayuscula($dato){
    //retorna el dato con la primera letra en mayúscula
    return ucwords($dato);
}

function remplazar($valorBuscado,$valorRemplazar,$cadena){
    //le das que busca una a, y que muestre una e
    return str_replace(
        $valorBuscado,
        $valorRemplazar,
        $cadena
    );
}

function mostrarMes($fecha){
    //envias la fecha y retornas el mes en castellano
    return date('month');
}

function info(){
    //muestre la versión de php y la versión del servidor
    echo phpversion();
    echo "<br>";
    echo apache_get_version();
}

function numeroPrimo($numero){
    //retorna si el número introducido es primo o no
    if
}

function bisiesto($año){
    //retorna si el año es bisiesto o no
}
