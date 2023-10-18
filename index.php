<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// Inclua seu arquivo de conexão e demais configurações aqui

// Obtém a URI da requisição
$uri = $_SERVER['REQUEST_URI'];

// Remove a base do caminho (se necessário)
$base = '/php-mvc/'; // Altere para o caminho do seu projeto
$uri = str_replace($base, '', $uri);

// Quebra a URI em partes usando '/'
$partes = explode('/', $uri);

// Define o controlador e a ação padrão (caso não haja partes na URI)
$controlador = 'HomeController';
$acao = 'index';
$id = "";


if($partes[0] == "erro"){
    $controlador = "ErroController";
    $acao = "index";
}

if (count($partes) > 1) {
    $controlador = ucfirst($partes[0]) . 'Controller';
    $acao = $partes[1];
    
    if(count($partes) > 2){
        $id = $partes[2];
    }
    
}

// Verifica se o arquivo do controlador existe
$controlador_arquivo = "controller/$controlador.php";

if (file_exists($controlador_arquivo)) {
    require $controlador_arquivo;
    $controlador = new $controlador();

    if (method_exists($controlador, $acao)) {
        // Chama a ação no controlador
        $controlador->$acao($id);
    } else {
        echo 'Ação não encontrada';
    }
} else {
    echo 'Controlador não encontrado';
}
