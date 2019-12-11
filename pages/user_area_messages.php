<?php
  include_once('../includes/session.php');
  include_once('../templates/common.php');
  include_once('../templates/user.php');

  // see if user is NOT logged in
  $username = get_username();
  $userId = get_user_id();
  // if not, redirect to sign in page
  if ($username == null)
    die(header('Location: sign_in.php'));

  draw_header_alternative($username);
  draw_user_messages($userId);
  draw_footer($username);
?>
