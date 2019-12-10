<!DOCTYPE html>

<html lang="en-US">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">            <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="assets/faviconit/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="assets/faviconit/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="assets/faviconit/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="assets/faviconit/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/faviconit/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="assets/faviconit/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/faviconit/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/faviconit/favicon-16.png">
    <link rel="apple-touch-icon" href="assets/faviconit/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/faviconit/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/faviconit/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/faviconit/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/faviconit/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/faviconit/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/faviconit/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/faviconit/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/faviconit/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="assets/faviconit/favicon-144.png">
    <meta name="msapplication-config" content="assets/faviconit/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->
    <script src="js/script.js"></script>
    <title>Hemkonfort</title>
    <meta charset="UTF-8">
  </head>
  <body>  
    <header id="alternative-header">
      <a href="/">
        <img class="logo-shadow" src="assets/images/logo.png" alt="Hemkonfort Logo" />
      </a>
      <nav id="home-nav-bar">
        <ul>
          <li> <a href="#" target="_blank">About Us</a></li>
          <li> <a href="#" target="_blank">New Houses</a></li>
          <li> <a href="#" target="_blank">Popular</a></li>
          <?php if (isset($_SESSION[$username])) : ?>
            <li> <a href="sign_in.php" target="_blank">Sign In</a></li>
            <li> <a href="sign_up.php" target="_blank">Sign Up</a> </li>
          <?php else : ?>
            <li>Welcome, <a class="header-username"href="user_page.php" target="_blank"><?=$username?></a> </li>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
  