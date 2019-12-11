<?php function draw_header_main($username) {
/**
 * Draws the main header for main page.
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
    <script src="js/script.js"></script>
    <title>Hemkonfort</title>
    <meta charset="UTF-8">
  </head>

  <body>

  <header id="main-header">
    <nav id="home-nav-bar">
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">New Houses</a></li>
        <li><a href="#">Popular</a></li>
        <?php if ($username == NULL) : ?>
          <li> <a href="pages/sign_in.php">Sign In</a> </li>
          <li id="signup-button"> <a href="pages/sign_up.php">Sign Up</a></li>
          <?php else : ?>
            <li>Welcome, <a class="header-username"href="user_area_form.php"><?=$username?></a> </li>
          <?php endif; ?>
      </ul>
    </nav>
    <div id="logo-section">
      <div id="logo-title-container">
        <a href="/">
          <img id="logo" class="logo-shadow" src="assets/images/logo.png" alt="Hemkonfort Logo" />
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
        <ul>
          <li> <a href="#" target="_blank">About Us</a></li>
          <li> <a href="#" target="_blank">New Houses</a></li>
          <li> <a href="#" target="_blank">Popular</a></li>
          <?php if ($username == null) : ?>
            <li> <a href="sign_in.php" target="_blank">Sign In</a></li>
            <li> <a href="sign_up.php" target="_blank">Sign Up</a> </li>
          <?php else : ?>
            <li>Welcome, <a class="header-username" href="user_area_form.php" target="_blank"><?=$username?></a> </li>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
<?php } ?>

<?php function draw_main_body() {
/**
 * Draws content for main page.
 */?>
 <section class='houses-section-container'>
  <!-- TOP HOMES -->
  <div class='house-article-header'>
    <h2><strong>Top</strong> Homes</h2>
    <a class="black-rounded-button" href="pages/list_houses.php">View All</a>
  </div>
  <article class='house-article-container'>
  <?php 
      $dbh = new PDO('sqlite:database/database.db'); 
      $stmt = $dbh->prepare('select * from PLACE ORDER BY classification DESC LIMIT 4'); 
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
      <img id="houseimg<?=$i?>" src="<?=$image?>" alt="House image" />
      <div class="house-card-text">
        <h2><?=$result[$i]['name']?></h2>
        <h3><?=$result[$i]['street']?></h3>
        <h4><?=$result[$i]['country']?></h4>
      </div>
      <a href="pages/house_detail_page.php?idPlace=<?=$houseId?>" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
    <?php } ?>
    <?php $dbh = null;?>
  </article>

  <!-- POPULAR HOMES -->
  <div class='house-article-header'>
    <h2><strong>Popular</strong> Homes</h2>
    <a class="black-rounded-button" href="pages/list_houses.php">View All</a>
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
      <img id="houseimg<?=$i?>" src="<?=$image?>" alt="House image" />
      <div class="house-card-text">
        <h2><?=$result[$i]['name']?></h2>
        <h3><?=$result[$i]['street']?></h3>
        <h4><?=$result[$i]['country']?></h4>
      </div>
      <a href="#" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
    <?php } ?>
    <?php $dbh = null;?>
  </article>

  <!-- RECENT HOMES -->
  <div class='house-article-header'>
    <h2><strong>Recent</strong> Homes</h2>
    <a class="black-rounded-button" href="pages/list_houses.php">View All</a>
  </div>
  <article class='house-article-container'>
  <?php 
      $dbh = new PDO('sqlite:database/database.db'); 
      $stmt = $dbh->prepare('select * from PLACE ORDER BY idPlace DESC LIMIT 4'); 
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
      <img id="houseimg<?=$i?>" src="<?=$image?>" alt="House image" />
      <div class="house-card-text">
        <h2><?=$result[$i]['name']?></h2>
        <h3><?=$result[$i]['street']?></h3>
        <h4><?=$result[$i]['country']?></h4>
      </div>
      <a href="#" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
  <?php } ?>
  <?php $dbh = null;?>
  </article>

</section>

<?php } ?>

<?php function draw_footer($username) {
/**
 * Draws footer for all other pages.
 */?>
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

        <?php if ($username != NULL) : ?>
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


