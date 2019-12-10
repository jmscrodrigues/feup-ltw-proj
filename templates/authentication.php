<?php function draw_sign_up() {
/**
 * Draws the main header for main page.
 */ ?>
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
    <title>Hemkonfort</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <section class="sign-form-card">
      <header>
        <a href="/">
          <img class="logo-shadow" src="assets/images/logo.png" alt="Logo" />
        </a>
        <h1>Sign Up</h1>
      </header>
      <form id="signup-form" action="" method="POST">
        <input class="input-form" type="text" name="first-name" required="required" placeholder="First Name"> 
        <input class="input-form" type="text" name="last-name" required="required" placeholder="Last Name"> 
        <input class="input-form" type="email" name="email" required="required" placeholder="Email"> 
        <input class="input-form" type="password" name="password" required="required" placeholder="Password">
        <input class="input-form" type="password" name="password" required="required" placeholder="Repeat Password">
        <input class="blue-filled-rounded-button" type="submit" value="Sign up">
      </form>
      <footer>
        <p>Already have an account? <a href="sign_in.php">Sign In</a></p>
      </footer>
    </section>
  </body>

  <footer>
  </footer>
</html>
<?php } ?>

<?php function draw_sign_in() {
/**
 * Draws the main header for main page.
 */ ?>
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
    <title>Hemkonfort</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <section class="sign-form-card">
      <header>
      <a href="/">
        <img class="logo-shadow" src="assets/images/logo.png" alt="Logo" />
      </a>
      <h1>Sign In</h1>
      </header>
      <form id="signin-form" action="" method="POST">
        <input class="input-form" type="email" name="email" required="required" placeholder="Email"> 
        <input class="input-form" type="password" name="password" required="required" placeholder="Password">
        <input class="blue-filled-rounded-button" type="submit" value="Sign In">
      </form>
      <footer>
        <p>Don't have an account? <a href="sign_up.php">Create Account</a></p>
        <p>Forgot Password? <a href="#">Reset Password</a></p>
      </footer>
    </section>
  </body>

  <footer>
  </footer>
</html>
<?php } ?>
