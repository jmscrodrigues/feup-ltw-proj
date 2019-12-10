<?php
  include_once('includes/session.php')
  include_once('templates/common.php');
  include_once('templates/user.php');

  // see if user is NOT logged in
  if (!isset($_SESSION['username'])) {
    // redirect to sign in page
    die(header('Location: sign_in.php'));
  }

  draw_header_alternative($_SESSION['username']);
  draw_user_form($_SESSION['userId']);
  draw_footer($_SESSION['username']);
?>
