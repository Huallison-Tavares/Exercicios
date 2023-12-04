<?php 
session_start();

$valores = $_POST;

$listaReceita = [];
$listaGastos = [];
$receita = 0;
$gastos = 0;

foreach ($valores as $valorNome => $value) {
    if (str_contains($valorNome, "_receita") && $value != ""){
        $receita += (float) $value;
        $listaReceita[$valorNome] = $value;
    }else if ($value != "") {
        $gastos += (float) $value;
        $listaGastos[$valorNome] = $value;
    }
}

$total = $receita - $gastos;

$_SESSION['resultado'] = [
    "listaReceita"=> $listaReceita,
    "listaGastos"=> $listaGastos,
    "receita"=> $receita,
    "gastos"=> $gastos,
    "total"=> $total
];

header("Location: ./resultado.php");