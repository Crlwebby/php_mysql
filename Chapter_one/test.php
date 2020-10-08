<!DOCTYPE html>
<html lang="en">
    <head>
        <title>php function test</title>
    </head>
    <body>
        <p>
            <?php
                $a = 56;
                echo gettype($a).'<br/>';
                settype($a,'string');
                echo gettype($a).'<br/>';

                echo "<br/>while expression:<br/>";
                $num = 1;
                while($num<5){
                    echo $num."<br/>";
                    $num++;
                }
            ?>
        </p>
    </body>
</html>