<?php
// Deus abençoe o PHP.


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

    require_once __DIR__."/../../". $class_name.".php";

});




