<?php

function load($className) 
{
    $className = str_replace('\\', '/', $className);
    
    $fileName = $className . ".php";
    
    if (is_file($fileName))
    {
         include($fileName);
    }
    elseif (is_file('./src/' . $fileName))
    {
        include('./src/' . $fileName);
    }
}

spl_autoload_register("load");
?>