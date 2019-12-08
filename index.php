<?php
    include_once('functions.php');
    getUserAndPass('big_dollars', 'password');
    draw_header_main('big_dollars');
    draw_popular_houses();
    draw_recent_houses();
    draw_top_houses();
    draw_footer('big_dollars');
?>