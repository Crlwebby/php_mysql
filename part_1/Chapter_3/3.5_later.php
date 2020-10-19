<?php
    $products = array(
        array('TIR','Tires',100),
        array('OIL','Oil',10),
        array('SPK','Spark Plugs',4)
    );
    for($row = 0; $row < 3; $row++){
        for($column = 0; $column < 3; $column++){
            echo '|'.$products[$row][$column];
        }
        echo '|'."\n";
    }
    //$products = array('Tires','Oil','Spark Plugs');
    /*sort($products);

    foreach($products as $var){
        echo $var."\t";
    }
    echo "\n";*/

    /*function putout(array $array){
        foreach($array as $key => $value){
            echo $key."=>\t".$value."\t";
        }
        echo "\n";
    }*/
    $prices = array('Tires'=>100,'Oil'=>10, 'Spark Plugs'=>4);
    foreach($prices as $key => $value){
        echo $key."=>\t".$value."\t";
        echo "\n";
    }
    echo '==================================='."\n";
    asort($prices);
    //putout($prices);
    foreach($prices as $key => $value){
        echo $key."=>\t".$value."\t";
        echo "\n";
    }
    echo '==================================='."\n";
    ksort($prices);
    foreach($prices as $key => $value){
        echo $key."=>\t".$value."\t";
        echo "\n";
    }
   // var_dump($products);
    //array_multisort($products);
    //var_dump($products);

    $numbers = range(100,10,-2);
    foreach($numbers as $var){
        echo $var."\t";
    }
    echo "\n";
    $numbers = array_reverse($numbers);
    foreach($numbers as $var){
        echo $var."\t";
    }
    reset($numbers);
    $temp = current($numbers);
    var_dump($temp);
    echo "\n";

    function add(&$value,$key,$userdata){
        $value += $userdata;
    }
    array_walk($numbers,'add',5);
    foreach($numbers as $var){
        echo $var."\t";
    }

    $array = array(4,5,1,2,3,1,2,1);
    $ac = array_count_values($array);
    var_dump($ac);
?>