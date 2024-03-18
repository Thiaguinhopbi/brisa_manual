<?php

$rotas = [
    'inicio' => 'main@index',
    'onu'=> 'main@onu',
    'ont' =>'main@ont',
    'tr069' => 'main@tr069',
    'planos_internet' => 'main@planos_internet',
    'planos_telefone' => 'main@planos_telefone',
    'planos_tv' => 'main@planos_tv',
   
];

$acao = 'inicio';

if (isset($_GET['a'])) {
    if (!key_exists($_GET['a'], $rotas)) {
        $acao='inicio';
    }else{
        $acao = $_GET['a'];
    }
}

$partes = explode('@', $rotas[$acao]);
$controlador = 'core\\controllers\\'.ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();
