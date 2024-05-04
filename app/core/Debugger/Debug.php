<?php
// Deus faz seus milagres, mas é necessário preparar o próprio cavalo para permiti-los a ter efeitos.

namespace app\core\Debugger;

class Debug 
{
    public static function Dump($variable, $nomear = false) 
    {   
        if ($nomear) 
        {
            echo "Printando {". "eae" ." } ";
        }
        echo "<pre>";
        var_dump($variable);
        echo "</pre>";
    }

    public static function DumpAndDie($variable) 
    {   
        Debug::Dump($variable);
        die();
    }
}

