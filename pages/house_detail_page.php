<?php
  include_once('includes/session.php')
  include_once('templates/common.php');
  include_once('templates/house.php');

  // see if user is logged in
  $username = get_username();

  // TODO verify is house ID exists (if not -> 404 page)
  $houseId = $_GET['placeId'];

  draw_header_main($username);
  draw_house_detail($houseId);
  draw_footer($username);
?>
