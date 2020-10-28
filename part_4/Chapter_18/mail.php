<?php
    $txt = "hello lzh,I'm cby,I want to chat with you lol (fake news!)";

    $txt = wordwrap($txt,70);

    mail("1303965943@qq.com","fake news!",$txt);
?>