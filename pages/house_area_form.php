<?php
  include_once('../includes/session.php');
  include_once('../templates/common.php');
  include_once('../templates/house.php');

  // see if user is NOT logged in
  $username = get_username();
  // if not, redirect to sign in page
  if ($username == null)
    die(header('Location: sign_in.php'));

  // TODO: see if house belongs to user
  $houseId = NULL;

  draw_header_alternative($username);
  draw_house_form($houseId);
  draw_footer($username);
?>
