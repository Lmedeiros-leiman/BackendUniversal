<?php 
//

namespace app\controllers;

use app\core\Response;

class PageNotFound 
{
    public function index() 
    {
        Response::SetResponseStatus(404);

        echo("Página 404");

    }



}
