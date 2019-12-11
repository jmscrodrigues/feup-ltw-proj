<?php
  include_once('../includes/session.php');
  include_once('../templates/authentication.php');

  // Verify if user is ALREADY logged in
  $username = get_username();
  // if so, redirect to home page
  if ($username != null)
    die(header('Location: home.php'));

  draw_sign_up();
?>