<?php
  include_once('includes/session.php')
  include_once('templates/common.php');
  include_once('templates/house.php');

  // see if user is NOT logged in
  if (!isset($_SESSION['username'])) {
    // redirect to sign in page
    die(header('Location: sign_in.php'));
  }

  // TODO: see if house belongs to user
  $houseId = NULL;

  draw_header_alternative($_SESSION['username']);
  draw_house_rents($houseId);
  draw_footer($_SESSION['username']);
?>
