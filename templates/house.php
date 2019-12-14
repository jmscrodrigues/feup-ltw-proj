<?php function draw_house_rent_area($houseId) { 
/**
 * Draws the signup section.
 */
?>
<section id="house-rent-container">
  <!-- OWNER CARD -->
  <div class="profile-card">
    <div class="profile-card-photo rounded-photo-container">
      <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="House Photo" />
    </div>
    <h3>John Doe</h3>
    <div class="profile-card-contacts">
      <h4>(424) 827-0389</h4>
      <h4>john.doe@whatever.com</h4>
      <a class="black-rounded-button" href="#">Message</a>
    </div>
  </div>
  <!-- HOUSE DETAIL CARD -->
  <div class="house-detail-card">
    <img src="../design/mockups/stock-images/stock-house.jpg" alt="House image" />
    <div>
      <h3>Casa Banana -> <?=$houseId?></h3>
      <p>Banana house description yo</p>
    </div>
    <div>
      <h3>Location</h3>
      <p><strong>Country: </strong>Banana Country</p>
      <p><strong>City: </strong>Banana city</p>
      <p><strong>Street: </strong>Banana Street</p>
      <p><strong>Number: </strong>73</p>
    </div>
    <div class="house-rating-container">
      <h3>User Rating</h3>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <p>4.1 average based on 254 reviews.</p>

      <div class="row">
        <div class="side">
          <div>5 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-5"></div>
          </div>
        </div>
        <div class="side right">
          <div>150</div>
        </div>
        <div class="side">
          <div>4 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-4"></div>
          </div>
        </div>
        <div class="side right">
          <div>63</div>
        </div>
        <div class="side">
          <div>3 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-3"></div>
          </div>
        </div>
        <div class="side right">
          <div>15</div>
        </div>
        <div class="side">
          <div>2 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-2"></div>
          </div>
        </div>
        <div class="side right">
          <div>6</div>
        </div>
        <div class="side">
          <div>1 star</div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-1"></div>
          </div>
        </div>
        <div class="side right">
          <div>20</div>
        </div>
      </div>
    </div>
  </div>
  <!-- RENT CARD -->
  <div class="rent-house-card">
  <form>
    <label>Start Date</label>
    <input class="input-form" type="date" name="name" required="required">
    <label>End Date</label>
    <input class="input-form" type="date" name="country" required="required"> 
    <input class="blue-filled-rounded-button" type="submit" value="Rent">
  </form>
</section>  
<?php } ?>


<?php function draw_house_form($houseId) {
/**
 * Draws content for main page.
 */?>
<section class="profile-area">
  <header>
    <h2>House Area</h2>
  </header>
  <div>
    <aside>
      <section class="profile-card">
        <div class="profile-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-house.jpg" alt="House Photo" />
        </div>
        <h3>Casa Banana</h3>
      </section>
      <nav class="profile-nav-bar">
        <ul>
          <li><a href="house_area_form.php" class="profile-area-button-selected profile-area-button">Profile</a></li>
          <li><a href="house_area_rents.php" class="profile-area-button">Rents</a></li>
        </ul>
      </nav>
    </aside>
    <!-- HOUSE AREA FORM -->
    <div>
      <form class="profile-area-form" action="" method="POST">
        <input class="input-form" type="text" name="name" required="required" placeholder="Casa Banana"> 
        <input class="input-form" type="text" name="country" required="required" placeholder="Banana Country"> 
        <input class="input-form" type="number" name="price" required="required" placeholder="30"> 
        <input class="input-form" type="text" name="city" required="required" placeholder="Banana City">
        <textarea id="house-description" class="input-form" name="description" required="required" row="3" placeholder="Banana house is super cool!"></textarea>
        <input class="input-form" type="text" name="street" required="required" placeholder="Banana Street"> 
        <input class="input-form" type="number" name="number" required="required" placeholder="78">
        <input class="profile-area-submit-button blue-filled-rounded-button" type="submit" value="Submit Changes">
      </form>
      <form class="profile-area-form" action="" method="POST">
        <input class="input-form" type="file" name="image" required="required" placeholder="Image">
        <input class="profile-area-submit-button-2 blue-filled-rounded-button" type="submit" value="Submit Image">
      </form>
    </div>
  <div>
</section>
<?php } ?>

<?php function draw_house_rents($houseId) {
/**
 * Draws content for main page.
 */?>
<section class="profile-area">
  <header>
    <h2>House Area</h2>
  </header>
  <div>
    <aside>
      <section class="profile-card">
        <div class="profile-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-house.jpg" alt="House Photo" />
        </div>
        <h3>Casa Banana</h3>
      </section>
      <nav class="profile-nav-bar">
        <ul>
          <li><a href="house_area_form.php" class="profile-area-button">Profile</a></li>
          <li><a href="house_area_rents.php" class="profile-area-button-selected profile-area-button">Rents</a></li>
        </ul>
      </nav>
    </aside>
    <!-- USER AREA RENTS -->
    <div id="house-area-rents">
      <?php for($i = 0; $i < 6; $i++)  {?>
      <div class="rent-card">
        <div class="rent-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="House image" />
        </div>
          <h4><strong>John Doe</strong></h4>
          <p><strong>From:</strong> Data de inicio</p>
          <p>30€ per day</p>
          <p><strong>To:</strong> Data de fim</p>
          <p class="rent-card-total"><strong>Total:</strong> 90€</p>
      </div>
      <?php } ?>
    </div>
  <div>
</section>
<?php } ?>

<?php function draw_house_card($houseId) {
  $dir=$_SERVER['DOCUMENT_ROOT'];
  include_once("$dir/database/connection.php");
  global $dbh;
  $stmt = $dbh->prepare("SELECT * FROM PLACE WHERE idPlace = ?"); 
  $stmt->execute(array($houseId));
  $result = $stmt->fetchAll();
  $stmt1 = $dbh->prepare("SELECT picturePath FROM PICTURES WHERE idPlace = ?"); 
  $stmt1->execute(array($houseId));
  $image = $stmt1->fetchColumn();  
  ?>  
  <div class="house-card">
      <img id="houseimg<?=$houseId?>" src="<?=$image?>" alt="House Image" />
      <div class="house-card-text">
        <h2><?=$result[0]['name']?> </h2>
        <h3><?=$result[0]['street']?></h3>
        <h4><?=$result[0]['country']?></h4>
      </div>
      <a href="house_detail_page.php?idPlace=<?=$houseId?>" class='blue-filled-rounded-button house-card-button'><?=$result[0]['price']?>€</a>
    </div>
<?php } ?>