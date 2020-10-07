<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bob's Auto balabala</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        <?php 
            ini_set('date.timezone', 'Asia/Shanghai');
            echo '<p>Order processed at</p>';
            echo date('Y-m-d H:i:s T');
            #echo date('H;i, js F');
            echo "</p>";
        ?>
    </body>
</html>