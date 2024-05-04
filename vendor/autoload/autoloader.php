<?php
// Deus abençoe o PHP.

// já que estamos carregando classes, por que não aproveitar esse arquivo e carregar o arquivo .ENV e algumas variaveis globais tambem?
/**
* Existem multiplas maneiras de se fazer isso, todas dependem de como o desenvolvedor quer buscar suas variaveis de ambiente.
* No meu caso vou utilizar funções que o php já possui de fábrica.
* E para acessar foi apenas puxar a variavel env.
*
**/
$env = parse_ini_file(__DIR__ . "/../../.env");

// vamos carregar algumas variaveis globais Uteis:
define('ROOT_FOLDER', __DIR__."/../../");

// vamos carregar o arquivo de configurações!!
require __DIR__ . "/../../config/index.php";

/**
* Esse é um arquivo com uma responsabilidade unica:
* Carregar outros arquivos conforme forem pedidos.
* Toda aplicação possui esse arquivo, alguns com implementações mais complexas.
* 
**/

spl_autoload_register(function ($class_name) 
{
    // echo("CARREGANDO CLASSE=> ". $class_name);

    $class_name = str_replace("\\","/",$class_name);

    require_once ROOT_FOLDER . $class_name.".php";

});



