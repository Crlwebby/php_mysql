<?php
    $input_str = "<p align=\"center\">The user gave us \"15000?\".</p>
                <script type = \" text/javascript \">alert(\"1\");</script>\n\n";
    
    $str = htmlspecialchars($input_str,ENT_NOQUOTES,'UTF-8');
    echo nl2br($str);

    $str = htmlentities($input_str,ENT_QUOTES,"UTF-8");
    echo nl2br($str);




?>