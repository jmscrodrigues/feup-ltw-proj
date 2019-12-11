<?php
  include_once('../includes/session.php');
  include_once('../templates/common.php');
  include_once('../templates/house_list.php');

  // see if user is NOT logged in
  $username = get_username();

  draw_header_alternative($username);
  draw_house_list();
  draw_footer($username);
?>
