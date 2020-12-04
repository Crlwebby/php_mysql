<?php
    echo md5('12345');
    show_source('./chat.php');

    $newChats = [];
    $i=0;
    while($i<10) {
        $chat['hello'] = $i;
        $newChats[] = $chat;
        $i++;
    }
    var_dump($newChats);
?>