<?php function draw_house_rent_area($houseId) { 
/**
 * Draws the signup section.
 */
?>
<section id="house-rent-container">
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
  </div>

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
          <li><a class="profile-area-button-selected profile-area-button">Profile</a></li>
          <li><a class="profile-area-button">Rents</a></li>
        </ul>
      </nav>
    </aside>
    <!-- HOUSE AREA FORM -->
    <form id="house-area-form" class="profile-area-form" action="" method="POST">
      <input class="input-form" type="text" name="name" required="required" placeholder="House Name" value="Casa Banana"> 
      <input class="input-form" type="text" name="country" required="required" placeholder="Country" value="Banana Country"> 
      <input class="input-form" type="number" name="price" required="required" placeholder="Price" value="30"> 
      <input class="input-form" type="text" name="city" required="required" placeholder="City" value="Banana City">
      <textarea id="house-description" class="input-form" name="description" required="required" row="3" placeholder="Description">Banana house is super cool!</textarea>
      <input class="input-form" type="text" name="street" required="required" placeholder="Street" value="Banana Street"> 
      <input class="input-form" type="number" name="number" required="required" placeholder="House number" value="78">
      <!--<input id="image-form" type="file" name="image" required="required" placeholder="Image">-->
      <input class="profile-area-submit-button blue-filled-rounded-button" type="submit" value="Submit Changes">
    </form>
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
          <li><a class="profile-area-button">Profile</a></li>
          <li><a class="profile-area-button-selected profile-area-button">Rents</a></li>
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
