<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stock Quote From NASDAQ</title>
</head>
<body>

<?php
    $symbol = 'GOOG';
    echo '<h1>Stock Quote for '.$symbol.'</h1>';

    //$url = 'http://download.finance.yahoo.com/d/quotes.csv'.'?s='.$symbol.'&e=.csv&f=sl1d1t1c1ohgv';
    $url = 'http://127.0.0.1/work/php/php_mysql/part_4/Chapter_17/123.png';
    if (!($contents=file_get_contents($url))){
        echo 'hava a try'.'<br/>';
        die('Failed to open'.$url);
    }

    list($symbol,$quote,$date,$time) = explode(',',$contents);
    $date = trim($date,'"');
    $time = trim($time,'"');

    echo '<p>'.$symbol.' was last sold at: $'.$quote.'</p>';
    echo '<p>Quote current as of'.$date.' at '.$time.'</p>';

    echo '<p>This information retrieved from <br/><a href="'.$url.'">'.$url.'</a></p>';
?>
</body>
</html>