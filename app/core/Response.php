<?php
# Deus responde a todos aqueles que o escutam.


namespace app\core;

class Response{

    public static function SetResponseStatus($HTMLResponseCode) 
    {
        http_response_code($HTMLResponseCode);
    }
}

