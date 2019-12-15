<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
include_once("$dir/database/connection.php");
include_once("$dir/templates/house.php");
include_once("$dir/database/db_house.php");


function draw_header_main($username) {
/**
 * Draws the main header for main page.
 */ ?>
<!DOCTYPE html>

<html lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/main.js"></script>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <!-- just for the hamburguer menu in responsive layout -->
      <input type="checkbox" id="hamburger"> 
      <label class="hamburger" for="hamburger"></label>
      
      <ul>
        <li><a href="pages/list_houses.php">All Houses</a></li>
        <li><a href="#top-houses">Top Houses</a></li>
        <li><a href="#popular-houses">Popular Houses</a></li>
        <li><a href="#new-houses">New Houses</a></li>
        <?php if ($username == NULL) : ?>
          <li> <a href="pages/sign_in.php">Sign In</a> </li>
          <li id="signup-button"> <a href="pages/sign_up.php">Sign Up</a></li>
        <?php else : ?>
          <li>Welcome, <a class="header-username"href="pages/user_area_form.php"><?=$username?></a> </li>
          <li><a href="actions/action_logout.php">Logout</a></li>
        <?php endif; ?>
      </ul>
    </nav>
    <div id="logo-section">
        <div id="logo-title-container">
            <a href="/">
                <img id="logo" class="logo-shadow" src="assets/images/logo.png" alt="Hemkonfort Logo"/>
            </a>
            <h1>Hemkonfort</h1>
        </div>
        <div id="logo-subtitle-container">
            <p>Find where to stay, anywhere!</p>
        </div>
    </div>
</header>
<?php } ?>

<?php function draw_header_alternative($username) {
/**
 * Draws the alternative header for all other pages.
 */ ?>
    <!DOCTYPE html>

<html lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/main.js"></script>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="../assets/faviconit/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="../assets/faviconit/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="../assets/faviconit/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="../assets/faviconit/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/faviconit/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="../assets/faviconit/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/faviconit/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/faviconit/favicon-16.png">
    <link rel="apple-touch-icon" href="../assets/faviconit/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/faviconit/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/faviconit/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/faviconit/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/faviconit/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/faviconit/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/faviconit/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/faviconit/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/faviconit/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="../assets/faviconit/favicon-144.png">
    <meta name="msapplication-config" content="../assets/faviconit/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->
    <title>Hemkonfort</title>
    <meta charset="UTF-8">
  </head>
  <body>  
    <header id="alternative-header">
      <a href="/">
        <img class="logo-shadow" src="../assets/images/logo.png" alt="Hemkonfort Logo" />
      </a>

      <nav id="home-nav-bar">
        <!-- just for the hamburguer menu in responsive layout -->
        <input type="checkbox" id="hamburger"> 
        <label class="hamburger" for="hamburger"></label>

        <ul>
        <li><a href="list_houses.php">All Houses</a></li>
          <li><a href="../#top-houses">Top Houses</a></li>
          <li><a href="../#popular-houses">Popular Houses</a></li>
          <li><a href="../#new-houses">New Houses</a></li>
          <?php if ($username == null) : ?>
            <li> <a href="sign_in.php">Sign In</a></li>
            <li> <a href="sign_up.php">Sign Up</a> </li>
          <?php else : ?>
            <li>Welcome, <a class="header-username" href="user_area_form.php"><?=$username?></a> </li>
            <li><a class="header-username" href="../actions/action_logout.php">Logout</a></li>
          <?php endif; ?>
        </ul>
    </nav>
</header>
<?php } ?>

<?php

function draw_main_body()
{
    /**
     * Draws content for main page.
     */
    ?>
    <section class='houses-section-container'>
        <!-- TOP HOUSES -->
        <div class='house-article-header'>
            <h2 id="top-houses"><strong>Top</strong> Houses</h2>
            <a class="black-rounded-button" href="pages/list_houses.php">View All</a>
        </div>
        <article class='house-article-container'>
            <?php
            $resultT = getTopHouses();
            for ($i = 0; $i < 4; $i++) {
                draw_house_card($resultT[$i]['idPlace']);
            } ?>
        </article>

        <!-- POPULAR HOUSES -->
        <div class='house-article-header'>
            <h2 id="popular-houses"><strong>Popular</strong> Houses</h2>
            <a class="black-rounded-button" href="pages/list_houses.php">View All</a>
        </div>
        <article class='house-article-container'>
            <?php
            $resultP = getPopularHouses();
            ?>
            <?php for ($i = 0; $i < 4; $i++) {
                draw_house_card($resultP[$i]['idPlace']);
            } ?>
        </article>

        <!-- NEW HOUSES -->
        <div class='house-article-header'>
            <h2 id="new-houses"><strong>New</strong> Houses</h2>
            <a class="black-rounded-button" href="pages/list_houses.php">View All</a>
        </div>
        <article class='house-article-container'>
            <?php
                $resultN = getNewHouses();
             ?>
            <?php for ($i = 0; $i < 4; $i++) {
                draw_house_card($resultN[$i]['idPlace']);
            }
            ?>
        </article>

    </section>

<?php } ?>

<?php function draw_footer($username) {
/**
 * Draws footer for all other pages.
 */ ?>
<footer>
    <section id='footer-options-bar'>
        <div class='row-footer-container'>
            <h2>Information</h2>
            <nav class="footer-nav-bar">
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Contract Information</a></li>
                    <li><a href="#">Insurance</a></li>
                </ul>
            </nav>
        </div>

        <?php if ($username != NULL) : ?>
          <div class='row-footer-container'>
            <h2>User Area</h2>  
            <nav class="footer-nav-bar">
              <ul>
                <li> <a href="../pages/user_area_form.php">Personal Profile</a> </li>
                <li> <a href="../pages/user_area_houses.php">My Houses</a> </li>
                <li> <a href="../pages/user_area_rents.php">My Rents</a> </li>
                <li> <a href="../pages/user_area_messages.php">Messages</a> </li>
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


<?php function draw_404()
{
    /**
     * Draws error page
     */ ?>
    <!DOCTYPE html>

    <html lang="en-US">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <script src="js/main.js"></script>
        <title>Hemkonfort</title>
        <meta charset="UTF-8">
    </head>

    <body>
    <p>404 PAGE</p>
    </body>
    </html>
<?php } ?>
