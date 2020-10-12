<?php
    $example = "wuli2333666@qq.com";
    $arr = preg_split('/\.|@/',$example);
    while(list($key,$value)=each($arr)){
        echo $key."\t".$value."\n";
    }

    $info = array('coffee','brown','coffeein');
    list($key1,,$value1)=$info;
    echo $key1."\t".$value1."\n";
?>