<?php function draw_user_area() { 
/**
 * Draws the signup section.
 */
?>
  <section id="user-area">
    <header>
      <h2>User Area</h2>
    </header>
    <div>
      <aside>
        <section id="user-card">
          <div class="user-card-photo">
            <img src="design/mockups/stock-images/stock-profile-photo.jpg" alt="Hemkonfort Logo" />
          </div>
          <h3>John Doe</h3>
        </section>
        <nav id="user-nav-bar">
          <ul>
            <li><button onclick="userAreaShowForm()" class="user-area-button">Profile</button></li>
            <li><button onclick="userAreaShowHouses()" class="user-area-button">My Houses</button></li>
            <li><button onclick="userAreaShowRents()" class="user-area-button">My Rents</button></li>
            <li><button onclick="userAreaShowMessages()" class="user-area-button">Messages</button></li>
          </ul>
        </nav>
      </aside>
      <form id="user-area-form" action="" method="POST">
        <input class="input-form" type="text" name="first-name" required="required" placeholder="First Name" value="John"> 
        <input class="input-form" type="text" name="last-name" required="required" placeholder="Last Name" value="Doe"> 
        <input class="input-form" type="email" name="email" required="required" placeholder="Email" value="john.doe@whatever.com"> 
        <input class="input-form" type="text" name="last-name" required="required" placeholder="Phone Number" value="(424) 827-0389"> 
        <input class="input-form" type="password" name="password" required="required" placeholder="Password">
        <input class="input-form" type="password" name="password" required="required" placeholder="Repeat Password">
        <input id="user-area-submit-button" class="input-form-button"type="submit" value="Submit Changes">
      </form>
      <article id="user-area-houses" class='house-article-container'>
        <?php for($i = 0; $i < 5; $i++)  {?>
        <div class="house-card">
          <img src="design/mockups/stock-images/stock-house.jpg" alt="House image" />
          <div class="house-card-text">
            <h2>Banana</h2>
            <h3>RUA DA BANANA</h3>
            <h4>BANANA COUNTRY</h4>
          </div>
          <a href="google.com" class='house-card-button'>2€</a>
        </div>
        <?php } ?>
      </article>
      <div id="user-area-rents">

      </div>
      <div id="user-area-messages">

      </div>
    <div>
  </section>  
<?php } ?>

<?php function draw_signup() { 
/**
 * Draws the signup section.
 */
?>
  <section class="sign-form-card">
    <header>
      <img src="assets/images/logo.png" alt="User Picture" />
      <h1>Sign Up</h1>
    </header>
    <form id="signup-form" action="" method="POST">
      <input class="input-form" type="text" name="first-name" required="required" placeholder="First Name"> 
      <input class="input-form" type="text" name="last-name" required="required" placeholder="Last Name"> 
      <input class="input-form" type="email" name="email" required="required" placeholder="Email"> 
      <input class="input-form" type="password" name="password" required="required" placeholder="Password">
      <input class="input-form" type="password" name="password" required="required" placeholder="Repeat Password">
      <input class="input-form-button"type="submit" value="Sign up">
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
  <section class="sign-form-card">
    <header>
      <img src="assets/images/logo.png" alt="Hemkonfort Logo" />
      <h1>Login</h1>
    </header>
    <form id="signin-form" action="" method="POST">
      <input class="input-form" type="emial" name="email" required="required" placeholder="Email"> 
      <input class="input-form" type="password" name="password" required="required" placeholder="Password">
      <input class="input-form-button"type="submit" value="Sign In">
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
    <script src="js/script.js"></script>
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
    <script src="js/script.js"></script>
    <title>Hemkonfort</title>
    <meta charset="UTF-8">
  </head>
  <body>  
    <header id="alternative-header">
      <img src="assets/images/logo.png" alt="Hemkonfort Logo" />
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
          $dbh = new PDO('sqlite:database/database.db'); 
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

    