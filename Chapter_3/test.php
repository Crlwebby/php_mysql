<?php
    $products = ['Tires','Oil','Spark Plugs'];
    $products{1} = 'cby';
    $products[3] = "what?";
    echo $products[1]."\n";
    echo $products[3]."\n";
    //$another = [];
    //$another = $products;
    //echo "/n".$another;

    $numbers = range(1,10);
    for($i=0;$i<10;$i++){
        echo $numbers[$i]."\t";
    }
    echo "\n";
    foreach($products as $var){
        echo $var."\t";
    }

    $prices = array('Tires'=>100,'Oil'=>10,'Spark Plugs'=>4);
    echo "\n".$prices['Tires']."\n";

    function func_new_each(&$array){
        $res = array();
        $key = key($array);
        if($key !== NULL){
            next($array);
            $res[1] = $res['value'] = $array[$key];
            $res[0] = $res['key'] = $key;
        }else{
            $res = false;
        }
        return $res;
    }
    
    while($element = func_new_each($prices)){
        echo $element['key']."-".$element['value'];
        echo "\n";
    }
?>