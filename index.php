<?php
    include_once('functions.php');
    getUserAndPass('big_dollars1', 'password1');
    draw_header_main('big_dollars1');
    draw_top_houses();
    draw_recent_houses();
    draw_footer('big_dollars1');
    logOut();
?>