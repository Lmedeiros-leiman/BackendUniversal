<?php
// deus direciona aqueles que ele ama para o PHP

namespace app\core;

use app\core\Debugger\Debug;

class Router
{
    protected static $ListaRotas = [];

    //
    //
    //
    public static function Get(string $Route, $controller_method)
    {
        Router::$ListaRotas['GET'][$Route] = $controller_method;
    }
    public static function Post(string $Route, $controller_method)
    {
        Router::$ListaRotas['POST'][$Route] = $controller_method;
    }
    public static function Delete(string $Route, $controller_method)
    {
        Router::$ListaRotas['DELETE'][$Route] = $controller_method;
    }
    

    public static function LoadRoutes()
    { // existem maneiras melhores, mas isso vai funcionar por enquanto.
        require_once ROOT_FOLDER . "/routes/WebRoutes.php";
    }

    public static function ParseRequest()
    {   

       var_dump(http_response_code());

        $ConnectionController = Router::$ListaRotas[Request::RequestType()][Request::URLpath()];
        
        if (!$ConnectionController)
        {
            Debug::DumpAndDie("Sem controlador.");
        }
        


        $controller = new $ConnectionController[0]();
        
       
        
        if (method_exists($controller,$ConnectionController[1]))
        {  
            // OK, eu tambem não sei explicar, mas isso funciona.
            // Sim, é por isso que eu faço menções a deus.
            $controller->{$ConnectionController[1]}();
        }
        
        
        
       

    }
}
