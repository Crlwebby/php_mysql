<?php
    /*$products = array(
        array('TIR','Tires',100),
        array('OIL','Oil',10),
        array('SPK','Spark Plugs',4)
    );
    for($row = 0; $row < 3; $row++){
        for($column = 0; $column < 3; $column++){
            echo '|'.$products[$row][$column];
        }
        echo '|'."\n";
    }*/
    $products = array('Tires','Oil','Spark Plugs');
    sort($products);

    foreach($products as $var){
        echo $var."\t";
    }
    echo "\n";

    /*function putout(array $array){
        foreach($array as $key => $value){
            echo $key."=>\t".$value."\t";
        }
        echo "\n";
    }*/
    $prices = array('Tires'=>100,'Oil'=>10, 'Spark Plugs'=>4);
    asort($prices);
    //putout($prices);
    foreach($prices as $key => $value){
        echo $key."=>\t".$value."\t";
        echo "\n";
    }
?>