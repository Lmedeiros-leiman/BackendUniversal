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
        
        return parse_url($_SERVER['REQUEST_URI'])['path'];;
    }
    public static function URLquery() {
        return parse_url($_SERVER['REQUEST_URI'])['query'];
    }

    public static function RequestType() {
        return $_SERVER['REQUEST_METHOD'];
    }



}
