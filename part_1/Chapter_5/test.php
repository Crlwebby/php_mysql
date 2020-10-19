<!DOCTYPE html>
<html lang="en">
    <head>
        <title>test</title>
    </head>
    <body>
        <?php
            function create_table($data){
                echo '<table border=1>';
                reset($data);
                $value = current($data);
                while($value){
                    echo "<tr><td>$value</td></tr>\n";
                    $value = next($data);
                }
                echo '</table>';
            }
            function create_table2($data,$header=NULL,$caption=NULL){
                echo '<table>';
                if($caption){
                    echo "<caption>$caption</caption>";
                }
                if ($header){
                    echo "<tr><th>$header</th></tr>";
                }
                reset($data);
                $value = current($data);
                while($value){
                    echo "<tr><td>$value</td></tr>";
                    $value = next($data);
                }
                echo '</table>';
            }

            function var_args(){
                echo 'Number of parameter:'."\t";
                echo func_num_args();
                echo '<br/>';
                $args = func_get_args();
                foreach ($args as $arg){
                    echo $arg.'<br/>';
                }
            }
            $my_data = ['first','233','2222222333'];
            create_table($my_data);
            echo "\n\n\n";
            create_table2($my_data,666);
            var_args(1,2,3,4,5,6);

            $var = 1;
            function fun(){
                echo 'inside the function, at first $var = '.$var."\n";
                $var =2;
                echo 'then, inside the function,$var = '.$var."\n";
            }
            fun();
            echo 'Outsige the function, $var= '.$var."\n";
            /*fun();
            echo $var;*/
        ?>
    </body>

</html>
