<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>view orders</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Orders</h2>
        <?php
            if(file_exists("../orders/orders.txt")){
                $fp = fopen("../orders/orders.txt",'rb');
            }
            else{
                echo 'There are currently no orders.';
                exit();
            }
            flock($fp,LOCK_SH); //读操作锁定，多用户访问也可以共享文件；
            if(!$fp){
                echo "<p><strong> Your order could not be processed at this time.   ".
                "Please try again later.</strong></p></body></html>";
                exit;
            }

            while (!feof($fp)){
                $order = fgets($fp);
                echo htmlspecialchars($order)."<br/>";
            }
            echo filesize("../orders/orders.txt");
            echo 'Final position of the file pointer is'.(ftell($fp));
            echo '<br/>';
            rewind($fp);
            echo 'After rewind, the position is'.(ftell($fp)).'<br/>';

            flock($fp,LOCK_UN);         //解除锁定；
            fclose($fp);
            //readfile("../orders/orders.txt");     //单行测试，可以读出文件并传到浏览器上；
            //fpassthru($fp);

           /* while(!feof($fp)){
                $char = fgetc($fp);
                if(!feof($fp)){
                    echo $char=="\n"?"<br/>":$char;
                }
            }*/
        ?>
    </body>


</html>