<?php
// deus direciona aqueles que ele ama para o PHP

namespace app\core;

class Router
{
    private $ListaRotas = [];

    //
    //
    //
    public static function Get()
    {
    }
    public static function Post()
    {
    }
    public static function Delete()
    {
    }
    public static function Put()
    {
    }

    public static function LoadRoutes()
    { // existem maneiras melhores, mas isso vai funcionar por enquanto.
        require_once ROOT_FOLDER . "/routes/WebRoutes.php";
    }

    public static function ParseRequest()
    {
        var_dump($_REQUEST);
    }
}
