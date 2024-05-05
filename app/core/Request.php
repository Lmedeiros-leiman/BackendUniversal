<?php
// aqueles que pedem a deus, recebem o php.

namespace app\core;

class Request
{
    // lembrete pessoal: php -S localhost:3030 vai entregar o pedido.
    // live server oculta variaveis.
    //

    public static function URLpath() 
    {
        
        return $_SERVER['PATH_INFO'];
    }
    public static function URLquery() {
        return $_SERVER["QUERY_STRING"];
    }

    public static function RequestType() {
        return $_SERVER['REQUEST_METHOD'];
    }



}
