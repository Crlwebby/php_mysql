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

        <table style="border: 0px; padding:3px">
            <tr>
                <td style="text-align:right;">50</td>
                <td style="text-align:right;">5</td>
            </tr>
            <tr>
                <td style="text-align:right;">100</td>
                <td style="text-align:right;">10</td>
            </tr>
            <tr>
            <td>===========================</td>
            </tr>
            <tr>
                <td style="text-align:right;">150</td>
                <td style="text-align:right;">15</td>>
            </tr>
        
        </table>
    </body>
</html>