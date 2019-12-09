<?php 
  session_start(); 
?>
<section class='houses-section-container'>
  <!-- TOP HOMES -->
  <div class='house-article-header'>
    <h2><strong>Top</strong> Homes</h2>
    <a class="black-rounded-button" href="google.com">View All</a>
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
      <img id="houseimg<?=$i?>" src=<?=$image?> alt="House image" />
      <div class="house-card-text">
        <h2><?=$result[$i]['name']?></h2>
        <h3><?=$result[$i]['street']?></h3>
        <h4><?=$result[$i]['country']?></h4>
      </div>
      <a href="google.com" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
    <?php } ?>
    <?php $dbh = null;?>
  </article>

  <!-- POPULAR HOMES -->
  <div class='house-article-header'>
    <h2><strong>Popular</strong> Homes</h2>
    <a class="black-rounded-button" href="#">View All</a>
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
      <a href="#" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
    <?php } ?>
    <?php $dbh = null;?>
  </article>

  <!-- RECENT HOMES -->
  <div class='house-article-header'>
    <h2><strong>Recent</strong> Homes</h2>
    <a class="black-rounded-button" href="google.com">View All</a>
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
      <img id="houseimg<?=$i?>" src=<?=$image?> alt="House image" />
      <div class="house-card-text">
        <h2><?=$result[$i]['name']?></h2>
        <h3><?=$result[$i]['street']?></h3>
        <h4><?=$result[$i]['country']?></h4>
      </div>
      <a href="google.com" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
  <?php } ?>
  <?php $dbh = null;?>
  </article>

</section>
