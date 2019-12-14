<?php function draw_house_list() { 
/**
 * Draws the signup section.
 */
?>
<section class='houses-section-container houses-list-container'>
  <div class='house-article-header'>
    <h2><strong>All</strong> Homes</h2>
  </div>
  <section id="house-list-search-bar">
    <h3>Search</h3>
    <form>
    <label>Name
      <input class="input-form" type="text" name="name" placeholder="House Name">
    </label>
    <label>Country
      <select class="input-form select-form" name="country">
        <option value="All">All</option>
        <option value="Portugal">Portugal</option>
        <option value="Spain">Spain</option>
        <option value="Italy">Italy</option>
      </select>
    </label>
    <label>City
      <select class="input-form select-form" name="city">
        <option value="All">All</option>
        <option value="Porto">Porto</option>
        <option value="Lisbon">Lisbon</option>
        <option value="Aveiro">Aveiro</option>
      </select>
    </label>
    <label>Price
      <section class="range-slider">
        <span class="rangeValues"></span>
        <input class="price-slider" name="minprice" value="0" min="0" max="200" step="1" type="range">
        <input class="price-slider" name="maxprice" value="200" min="0" max="200" step="1" type="range">
      </section>
    </label>
    <label>Rating
      <section class="range-slider">
        <span class="rangeValues"></span>
        <input class="price-slider" name="minrating" value="0" min="0" max="5" step="0.1" type="range">
        <input class="price-slider" name="maxrating" value="5" min="0" max="5" step="0.1" type="range">
      </section>
    </label>
  </select>
    </form>
  </section>
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
        <h2><?=$result[$i]['name']?> <?=$houseId?></h2>
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