<?php
/**
 * Created by PhpStorm.
 * User: filos
 * Date: 04/01/2017
 * Time: 19:04
 */

$array_multi = array('Palio'=>array('cor'=>'azul', 'potencia'=>'1.5', 'opcionais'=>'MP3'));

echo $array_multi['Palio']['potencia'];
echo "\n";

var_dump($array_multi);
echo "\n";

foreach ($array_multi as $item=>$value){
    echo "* $item \n";
    foreach ($value as $caracteristica=>$valores){
        echo "Caracteristica $caracteristica => $valores\n";
    }

}