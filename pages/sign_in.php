<?php
  include_once('../includes/session.php');
  include_once('../templates/authentication.php');

  // Verify if user is ALREADY logged in, if so redirect to home
  if (isset($_SESSION['username']))
    die(header('Location: home.php'));

  draw_sign_in();
?>