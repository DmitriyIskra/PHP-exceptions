<?php
declare(strict_types=1);

class Exemple
{
    
}

function check($data)
{
    switch(gettype($data))
    {
        case 'string' && $data < 0:
            throw new Exception("зарплата не может быть меньше 0");
        case 'string':
            throw new Exception("string");
        case 'integer':
            throw new Exception ("int");
        case 'double':
            throw new Exception ("float");
        case 'boolean':
            throw new Exception ("bool");
        case 'array':
            throw new Exception ("array");
        case 'object':
            throw new Exception ("null");
    }
}


try{
    check(-2);
} catch( Exception $e ) {
    echo $e->getMessage();
}
