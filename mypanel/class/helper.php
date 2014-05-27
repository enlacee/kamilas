<?php

/**
 * return cadena cortada
 */
    function truncate_string($cadena, $limite, $corte=" ", $pad="...")
    {   
        if(strlen($cadena) <= $limite) {
            return $cadena;
        }
            
        if(false !== ($breakpoint = strpos($cadena, $corte, $limite))) {
            if($breakpoint < strlen($cadena) - 1) {
                $cadena = substr($cadena, 0, $breakpoint) . $pad;
            }
        }
        
        return $cadena;        
    }
