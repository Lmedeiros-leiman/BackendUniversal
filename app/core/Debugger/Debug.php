<?php
// Deus faz seus milagres, mas é necessário preparar o próprio cavalo para permiti-los a ter efeitos.

namespace app\core\Debugger;

class Debug 
{
    public static function Dump($variable) : void
    {   
        $DebugBackTrace = debug_backtrace();

        $filePath = "<span style='color:red;'>".$DebugBackTrace[0]["file"]."</span>";
        $functionUsed = "<span style='color:red;'>".$DebugBackTrace[0]["function"]."</span>";
        $lineUsed = "<span style='color:red;'>".$DebugBackTrace[0]["line"]."</span>";

        echo "<pre style='color:whitesmoke; background-color:gray;font-weight:bold'>";
        echo "Printing at:".$filePath."|function:".$functionUsed."|Line:".$lineUsed .PHP_EOL;
        var_dump($variable);
        echo "</pre>";



    }

    public static function DumpAndDie($variable)  : void
    {   
        Debug::Dump($variable);
        die();
    }
}

