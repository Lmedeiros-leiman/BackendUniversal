<?php
// Deus faz seus milagres, mas é necessário preparar o próprio cavalo para permiti-los a ter efeitos.

namespace app\core\Debugger;

class Debug 
{
    public static function Dump($variable) : void
    {   
        $DebugBackTrace = debug_backtrace();
        
        /*
        echo "<pre>";
        echo 'Printing at: '. $DebugBackTrace["file"] . "|function: ". $DebugBackTrace['function']."|Line:".$DebugBackTrace['Line'];
        var_dump($variable);
        echo "</pre>";
        */

    }

    public static function DumpAndDie($variable)  : void
    {   
        Debug::Dump($variable);
        die();
    }
}

