<?php
    include_once('functions.php');
    getUserAndPass('big_dollars', 'password1');
    draw_header_main('big_dollars');
    editUsername('big_dollars', 'big_dollars1', 'password1', 'password1');
    logOut();
?>