<?php function draw_house_list() { 
/**
 * Draws the signup section.
 */
?>
<section class='houses-section-container'>
  <div class='house-article-header'>
    <h2><strong>All</strong> Homes</h2>
  </div>
  <article class='house-article-container'>
  <?php 
      $dbh = new PDO('sqlite:../database/database.db'); 
      $stmt = $dbh->prepare('select * from PLACE ORDER BY classification DESC');
      $stmt->execute();
      $result = $stmt->fetchAll(); ?>
  <?php for($i = 0; $i < count($result); $i++)  {?>
    <?php
          $houseId = $result[$i]['idPlace'];
          $stmt1 = $dbh->prepare("SELECT picturePath FROM PICTURES WHERE idPlace = $houseId"); 
          $stmt1->execute();
          $image = $stmt1->fetchColumn();    
      ?>
    <div class="house-card">
      <img id="houseimg<?=$i?>" src="<?=$image?>" alt="House Image" />
      <div class="house-card-text">
        <h2><?=$result[$i]['name']?></h2>
        <h3><?=$result[$i]['street']?></h3>
        <h4><?=$result[$i]['country']?></h4>
      </div>
      <a href="house_detail_page.php?idPlace=<?=$houseId?>" class='blue-filled-rounded-button house-card-button'><?=$result[$i]['price']?>€</a>
    </div>
    <?php } ?>
    <?php $dbh = null;?>
  </article>
</section>
<?php } ?>