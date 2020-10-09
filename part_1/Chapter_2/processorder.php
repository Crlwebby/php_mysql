<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bob's Auto balabala</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        <?php
            define('TIRERICE', 100);
            define('OILPRICE', 10);
            define('SPARKPRICE', 4);
            ini_set('date.timezone', 'Asia/Shanghai');
            $tireqty = $_POST['tireqty'];
            $oilqty = $_POST['oilqty'];
            $sparkqty = $_POST['sparkqty'];
            $address = $_POST['address'];
            echo '<p>Order processed at</p>';
            echo date('Y-m-d H:i:s');
            $date = date('Y-m-d H:i:s');
            #echo date('H;i, js F');
            echo '<p>Your order is as follows:</p>';
            echo htmlspecialchars($tireqty).' tires<br/>';
            echo htmlspecialchars($oilqty).' oilqty<br/>';
            echo htmlspecialchars($sparkqty).'sparkqty<br/>';


            $totalqty = 0;
            $totalqty = $tireqty + $oilqty + $sparkqty;
            echo "<p>Items ordered:".$totalqty."<br/>";
            $totalamount = 0.00;
            $totalamount = $tireqty * TIRERICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
            echo "Subtotal:$".number_format($totalamount,2)."<br/>";

            $taxrate = 0.10;
            $totalamount = $totalamount * (1 + $taxrate);
            echo "Total including tax:$".number_format($totalamount,2)."</p>";

            $document_root = $_SERVER['DOCUMENT_ROOT'];
            @$fp = fopen("../orders/orders.txt",'ab');
            flock($fp,LOCK_EX);
            if(!$fp){
                echo "<p><strong> Your order could not be processed at this time.   ".
                "Please try again later.</strong></p></body></html>";
                exit;
            }
            $outputstring = $date."\t  ".$tireqty."  tires\t".$oilqty."  oil\t".$sparkqty."  spark plugs\t\$".$totalamount."\t".$address."\n";
            fwrite($fp,$outputstring);
            flock($fp,LOCK_UN);
            fclose($fp);
        ?>
    </body>
</html>