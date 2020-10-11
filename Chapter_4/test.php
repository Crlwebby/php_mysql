<!DOCTYPE html>
<html lang="en">
    <head>
        <title>test</title>
    </head>
    <body>
        <?php
        $content = "abcdeabcdeabcdeabcdeabcdeabcde";
        $content = str_replace("ab","@",$content);
        echo $content;
        $string = "<br/>";
        echo htmlspecialchars($string);
        //echo $string;
        echo "help";
        
        $total_s = 1000;
        $total = 9999;
        printf("Total amount of order is %2\$.2f with shipping %1\$.2f",$total_s,$total);

        $temp = "0123456789";
        echo "\n";
        echo substr($temp,0,5)."\n";
        echo substr($temp,-4)."\n";
        echo substr($temp,2)."\n";
        echo substr($temp,2,-4)."\n";
        echo substr($temp,5,-6)."\n";

        $feedback = 'I still haven\'t received delivery of my last order';
        echo strstr($feedback,'delivery',true);


        ?>


    </body>
</html>