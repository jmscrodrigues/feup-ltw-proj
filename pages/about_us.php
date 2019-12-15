<?php
include_once('../includes/session.php');
include_once('../templates/common.php');

// see if user is logged in
$username = get_username();

draw_header_alternative($username);
draw_about_us();
draw_footer($username);
?>