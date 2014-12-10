<?php

namespace Matousek;

use Tracy\Debugger;

/**
 * Debugging
 * 
 * @author Jan Matoušek (matousek.vr@gmail.com) 
 * @version 2.0
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
    public static function dump($var, $deph = null, $len = null)
    {
        if(!is_null($deph)){
            Debugger::$maxDepth = $deph;
        }
        
        if(!is_null($len)){
            Debugger::$maxLen = $len;
        }

        return Debugger::dump($var);
    }

}
