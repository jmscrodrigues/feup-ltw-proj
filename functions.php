<?php function draw_signup() { 
/**
 * Draws the signup section.
 */
?>
  <section id = "signup">
    <form action="" method="POST">
      <label>Username:
        <input type="text" name="username" required="required"> 
      </label>
      <label>E-mail:
        <input type="text" name="email" required="required">
      </label>
      <label>Password:
        <input type="text" name="password" required="required">
      </label>
      <label>Confirm password:
        <input type="text" name="c_password" required="required">
      </label>
      <label>First Name:
        <input type="text" name="f_name" required="required">
      </label>
      <label>Last Name:
        <input type="text" name="l_name" required="required">
      </label>
      <input type="submit" value="Sign Up">
    </form>
    <footer>
      <p>Already have an account? <a href="--------">Sign In</a></p>
    </footer>
  </section>    
<?php } ?>

<?php function draw_signin() { 
/**
 * Draws the signup section.
 */
?>
  <section id="signin">
    <header>
      <img id="logo" src="assets/images/logo.png" alt="Hemkonfort Logo" />
      <h1>Login</h1>
    </header>
    <form action="" method="POST">
      <label>Username:
        <input type="text" name="username" required="required"> 
      </label>
      <label>Password:
        <input type="text" name="password" required="required">
      </label>
      <input type="submit" value="Sign In">
    </form>
    <footer>
      <p>Don't have an account? <a href="--------">Create Account</a></p>
      <p>Forgot Password? <a href="--------">Reset Password</a></p>
    </footer>
  </section>
<?php } ?>


<?php function draw_header_main($username) {
/**
 * Draws the header of the Website.
 */
?>
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
    <header id="main-header">
      <nav id="home-nav-bar">
        <ul>
          <li><a href="about_us.html" target="_blank">About Us</a></li>
          <li><a href="----" target="_blank">New Houses</a></li>
          <li><a href="----" target="_blank">Popular</a></li>
          <?php if (isset($_SESSION[$username])) : ?>
            <li> <a href="sign_in.html" target="_blank">Sign Up</a> </li>
            <li id="signup-button"> <a href="sign_up.html" target="_blank">Sign In</a></li>
          <?php else : ?>
              <li>Welcome, <a class="header-username"href="sign_in.html" target="_blank"><?=$username?></a> </li>
          <?php endif; ?>
        </ul>
      </nav>
      <div id="logo-section">
        <div id="logo-title-container">
          <img id="logo" src="assets/images/logo.png" alt="Hemkonfort Logo" />
          <h1>Hemkonfort</h1>
        </div>
        <div id="logo-subtitle-container">
          <h2>We the best music</h2>
        </div>
      </div>
    </header>
<?php } ?>

<?php function draw_header_alternative($username) {
/**
 * Draws the header of the Website.
 */
?>
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
    <header id="alternative-header">
      <img id="logoalternative" src="assets/images/logo.png" alt="Hemkonfort Logo" />
      <nav id="home-nav-bar">
        <ul>
          <li> <a href="about_us.html" target="_blank">About Us</a></li>
          <li> <a href="----" target="_blank">New Houses</a></li>
          <li> <a href="----" target="_blank">Popular</a></li>
          <?php if (isset($_SESSION[$username])) : ?>
            <li> <a href="sign_up.html" target="_blank">Sign In</a></li>
            <li> <a href="sign_in.html" target="_blank">Sign Up</a> </li>
          <?php else : ?>
            <li>Welcome, <a class="header-username"href="sign_in.html" target="_blank"><?=$username?></a> </li>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
<?php } ?>


<?php function draw_houses() {
/**
 * Draws the house pages
 */
    ?>
    <section class='houses-section-container'>
      <div class='house-article-header'>
        <h2>Popular <strong>Homes</strong></h2>
        <a href="google.com">View All</a>
      </div>
      <article class='house-article-container'>
      <?php 
          $dbh = new PDO('sqlite:database/database1.db'); 
          $stmt = $dbh->prepare('SELECT * FROM PLACE'); 
          $stmt->execute();
          $result = $stmt->fetchAll(); ?>
      <?php for($i = 0; $i < 4; $i++)  {?>
        <?php
              $houseId = $result[$i]['idPlace'];
              $stmt1 = $dbh->prepare("SELECT picturePath FROM PICTURES WHERE idPlace = $houseId"); 
              $stmt1->execute();
              $image = $stmt1->fetchColumn();    
          ?>
        <div class="house-card">
          <img id="houseimg<?=$i?>" src=<?=$image?> alt="House image" />
          <div class="house-card-text">
            <h2><?=$result[$i]['name']?></h2>
            <h3><?=$result[$i]['street']?></h3>
            <h4><?=$result[$i]['country']?></h4>
          </div>
          <a href="google.com" class='house-card-button'><?=$result[$i]['price']?>€</a>
        </div>
       <?php } ?>
       </article>

      </section>
      <?php $dbh = null;?>
<?php } ?>

<?php function draw_footer($username) {
/**
 * Draws the footer of the Website.   TODO: VERIFICAR PARTE DA USER AREA NO CASO DE TER UM USER COM SESSÃO INICIADA E NAO!
 */
    ?>
    <?php session_start()?>

    <footer>
      <section id='footer-options-bar'>
        <div class='row-footer-container'>
          <h2>Information</h2>
          <nav class="footer-nav-bar">
            <ul>
              <li> <a href="----" target="_blank">FAQs</a></li>
              <li> <a href="----" target="_blank">Company</a></li>
              <li> <a href="----" target="_blank">Privacy Policy</a></li>
              <li> <a href="----" target="_blank">Payment</a></li>
              <li> <a href="----" target="_blank">Contract Information</a> </li>
              <li> <a href="----" target="_blank">Insurance</a> </li>
            </ul>
          </nav>
        </div>

        <?php if (isset($_SESSION[$username])) : ?>
          <div class='row-footer-container'>
            <h2>User Area</h2>  
            <nav class="footer-nav-bar">
              <ul>
                <li> <a href="----" target="_blank">Personal Profile</a> </li>
                <li> <a href="----" target="_blank">Messages</a> </li>
                <li> <a href="----" target="_blank">My Houses</a> </li>
                <li> <a href="----" target="_blank">My Orders</a> </li>
              </ul>
            </nav>
          </div>
        <?php endif; ?>
      </section>

      <section id="footer-rights-bar">
        <p>&copy 2020 FEUP-LTW. All rights reserved.</p>
      </section>

    </footer>
  </body>
</html>

<?php } ?>

    