<?php
    include_once('includes/session.php');
    include_once('templates/common.php');

    // see if user is logged in
    $username = NULL;
    if (isset($_SESSION['username']))
        $username = $_SESSION['username'];

    draw_header_main($username);
    draw_main_body();
    draw_footer($username);
?>