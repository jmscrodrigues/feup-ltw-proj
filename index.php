<?php
    include_once('functions.php');
    getUserAndPass('big_dollars', 'password1');
    draw_header_main('big_dollars');
    draw_top_houses();
    draw_recent_houses();
    //editUsername('big_dollars', 'big_dollars1', 'password1');
    draw_footer('big_dollars');
    logOut();
?> 