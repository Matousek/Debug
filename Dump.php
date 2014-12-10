<?php

namespace Matousek;

use \Nette\Diagnostics\Debugger;

/**
 * Debugging
 * 
 * @author Jan Matoušek (matousek.vr@gmail.com) 
 * @version 1.0
 */
class Debug
{
    
    /**
     * @author Jan Matoušek (matousek.vr@gmail.com) 
     * 
     * @param mixed $var varriable to dump
     * @param int $len max len
     * @param int $deph max deph
     * @return mixed
     */
    public static function dump($var, $deph = 3, $len = 150)
    {
        Debugger::$maxDepth = $deph;
        Debugger::$maxLen = $len;
        return Debugger::dump($var);
    }

}
