<?php

    $x = ['hi'];
    

    function getDataTypes($watIs)
    {
 
        return "De waarde is " . gettype($watIs) . ".";
    }

    echo getDataTypes("Hello") . PHP_EOL;
    echo getDataTypes(true) . PHP_EOL;
    echo getDataTypes(6) . PHP_EOL;
    echo getDataTypes(6.6) . PHP_EOL;
    echo getDataTypes($x) . PHP_EOL;
    