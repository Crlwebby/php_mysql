<!DOCTYPE html>
<html lang="en">
    <head>
        <title>freight.php</title>
    </head>
    <body>
        <table style="border: 0px; padding: 3px">
            <tr>
                <td style="background: #cccccc;text-align:center;">Distance</td>
                <td style="background: #cccccc;text-align:center;">Cost</td>
            </tr>
            <?php
                $distance = 50;
                while($distance<=250){
                    echo <<<EOF
                        <tr>
                            <td style="text-align:right;">$distance</td>
                            <td style="text-align:right;">
                    EOF;
                    echo ($distance/10).'</td></tr>'."\n";
                    $distance +=50;
                }
                /*while ($distance <=250){
                    echo "<tr>
                        <td style=\"text-align:right;\">".$distance."</td>
                        <td style=\"text-align:right;\">".($distance/10)."</td>
                    </tr>\n";
                    $distance += 50;
                }*/
            ?>
            <p>=================================</p>
            <?php
                for($distance=50;$distance<=250;$distance+=50){
                    echo "<tr>
                            <td style=\"text-align:right;\">".$distance."</td>
                            <td style=\"text-align:right;\">".($distance/10)."</td>
                            </tr>\n";
                }
            ?>
        </table>
    </body>
</html>