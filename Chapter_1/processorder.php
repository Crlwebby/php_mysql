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
            echo '<p>Order processed at</p>';
            echo date('Y-m-d H:i:s T');
            #echo date('H;i, js F');
            echo '<p>Your order is as follows:</p>';
            echo htmlspecialchars($tireqty).' tires<br/>';
            echo htmlspecialchars($oilqty).' oilqty<br/>';
            echo htmlspecialchars($sparkqty).'sparkqty<br/>';
            $find=$_POST['find'];
            if($find=="a"){
                echo "<p>regular customer</p>";
            }
            elseif($find=="b"){
                echo "<p>customer referred by TV advert.</p>";
            }
            elseif($find=="c"){
                echo "<p>customer referred by phone directory</p>";
            }
            elseif($find=="d"){
                echo "<p>customer referred by word of mouth.</p>";
            }
            else{
                echo "<p>we don't know how this customer found us</p>";
            }



            $totalqty = 0;
            $totalqty = $tireqty + $oilqty + $sparkqty;
            echo "<p>Items ordered:".$totalqty."<br/>";
            $totalamount = 0.00;
            $totalamount = $tireqty * TIRERICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
            echo "Subtotal:$".number_format($totalamount,2)."<br/>";

            $taxrate = 0.10;
            $totalamount = $totalamount * (1 + $taxrate);
            echo "Total including tax:$".number_format($totalamount,2)."</p>";

            echo 'isset($tireqty):'.isset($tireqty).'<br/>';
            echo 'isset($nothere):'.isset($nothere).'<br/>';
            echo 'empty($tireqty):'.empty($tireqty).'<br/>';
            echo 'empty($nothere):'.empty($nothere).'<br/>';


        ?>
    </body>
</html>