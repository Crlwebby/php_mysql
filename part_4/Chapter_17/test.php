<?php
    //phpinfo();
    $path = "/home/httpd/html/index.php";
    $file1 = basename($path);
    $file2 = basename($path,".php");

    print $file1."\n";
    print $file2."\n";

    echo dirname("../")."\n";
?>