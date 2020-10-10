<?php
    $document_root = "../orders/orders.txt";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>view orders</title>
        <style type="text/css">
            table,th,td{
                border-collapse: collapse;
                border:1px solid black;
                padding: 6px;
            }
            th{
                background: #ccffff;
            }
        </style>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Orders</h2>
        <?php
            if(file_exists($document_root)){
                $orders = file($document_root);
            }
            else{
                echo 'There are currently no orders.';
                exit();
            }
            
            $number_of_orders = count($orders);
            if ($number_of_orders == 0){
                echo "<p><strong>No orders pending.<br/> Please try again later.</strong></p>";
            }

            echo "<table>\n";
            echo"<tr>
                <th>Order Date</th>
                <th>Tires</th>
                <th>Oil</th>
                <th>Spark Plugs</th>
                <th>Total</th>
                <th>Address</th>
                </tr>";
            
            for($i=0; $i<$number_of_orders; $i++) {
                $line = explode("\t", $orders[$i]);
                $line[1] = intval($line[1]);
                $line[2] = intval($line[2]);
                $line[3] = intval($line[3]);
                echo "<tr>
                <td>".$line[0]."</td>
                <td style=\" text-align:right;\">".$line[1]."</td>
                <td style=\" text-align:right;\">".$line[2]."</td>
                <td style=\" text-align:right;\">".$line[3]."</td>
                <td style=\" text-align:right;\">".$line[4]."</td>
                <td>".$line[5]."</td></tr>";
             }

            echo "</table>";
            for ($i=0; $i<$number_of_orders; $i++) {
                echo $orders[$i]."<br/>";
            }
        ?>
    </body>


</html>