<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
include_once("$dir/database/db_house.php");
include_once("$dir/database/db_user.php");
?>

<?php function draw_house_rent_area($houseId)
{
  /**
   * Draws the signup section.
   */
  ?>
  <section id="house-rent-container">

    <?php
      $houseInfo = getHouse($houseId);
      $userInfo = getUserInfo($houseInfo['idUser']);
      ?>
    <!-- OWNER CARD -->
    <div class="profile-card">
      <div class="profile-card-photo rounded-photo-container">
        <img src="<?= $userInfo['picture'] ?>" alt="User Image" />
      </div>

      <h3><?= $userInfo['name'] ?></h3>
      <div class="profile-card-contacts">
        <h4><?= $userInfo['phonenumber'] ?></h4>
        <h4><?= $userInfo['email'] ?></h4>
        <a class="black-rounded-button" href="#">Message</a>
      </div>

      <?php if (isOwner($houseId,get_user_id())) { ?>
        <a href="../pages/house_area_form.php?idPlace=<?= $houseId ?>" class='blue-filled-rounded-button'>Edit House</a>
      <?php } ?>

    </div>
    <!-- HOUSE DETAIL CARD -->
    <div class="house-detail-card">
      <img src="<?= $houseInfo['picture'] ?>" alt="House image" />
      <div>
        <h3> <?= $houseInfo['name'] ?> </h3>
        <p> <?= $houseInfo['description'] ?> </p>
      </div>
      <div>
        <h3>Location</h3>
        <p><strong>Country: </strong><?= $houseInfo['country'] ?></p>
        <p><strong>City: </strong><?= $houseInfo['city'] ?></p>
        <p><strong>Street: </strong><?= $houseInfo['street'] ?></p>
        <p><strong>Number: </strong><?= $houseInfo['number'] ?></p>
      </div>
      <div class="house-rating-container">
        <h3>User Rating</h3>

        <?php
          for ($t = 0; $t < round($houseInfo['classification'], 0); $t++) {
            ?>
          <span class="fa fa-star checked"></span>
        <?php } ?>

        <?php
          for ($t = 0; $t < 5 - round($houseInfo['classification'], 0); $t++) {
            ?>
          <span class="fa fa-star"></span>
        <?php } ?>

        <p>Classification average of <?= $houseInfo['classification'] ?> stars</p>
        <div class="house-review-container">
          <?php
          $reviews=getReviews($houseId);
          if ($reviews!=false){
            for ($t = 0; $t < count($reviews); $t++) {
              $reservation=getReservation($reviews[$t]['idReservation']);
              $user=getUserInfo($reservation['idTourist']);
              ?>
            <div class="house-review">
              <section class="profile-card">
                <div class="house-review-photo rounded-photo-container">
                  <img src="..<?= $user['picture'] ?>" alt="House image<?=count($reviews)?>" />
                </div>
                <h4><strong><?=$user['name']?></strong></h4>
              </section>
               <p><?php for ($i=0; $i <$reviews[$t]['classification']; $i++){ ?> 
                <span class="fa fa-star checked"></span>
              <?php } ?><?php for ($i=0;$i < 5-$reviews[$t]['classification']; $i++){ ?>
              <span class="fa fa-star"></span><?php } ?>
              <br><?=$reviews[$t]['comment']?></p>
            </div>
          <?php }
          } ?>
        </div>

      </div>
    </div>
    <!-- RENT CARD -->
    <?php if (isset($_SESSION['username'])) { ?>
    <div class="rent-house-card">
      <form action="../actions/action_rent.php" method="POST">
        <label>Start Date</label>
        <input class="input-form" type="date" name="first-date" required="required" min=<?php echo date("Y-m-d")?>>
        <label>End Date</label>
        <input class="input-form" type="date" name="last-date" required="required" min=<?php echo date("Y-m-d")?>>
        <input type='hidden' name='idplace' value='<?= $houseId ?>' />
        <input class="blue-filled-rounded-button" type="submit" value="Rent">
      </form>
    </div>
    <?php } ?>
  </section>
<?php } ?>


<?php function draw_house_form($houseId)
{
  /**
   * Draws content for main page.
   */ 
  $houseInfo = getHouse($houseId);
  ?>
  <section class="profile-area">
    <header>
      <h2>House Area</h2>
    </header>
    <div>
      <aside>
        <section class="profile-card">
          <div class="profile-card-photo rounded-photo-container">
            <img src="<?= $houseInfo['picture'] ?>" alt="House Photo" />
          </div>
          <h3> <?= $houseInfo['name'] ?></h3>
        </section>
        <nav class="profile-nav-bar">
          <ul>
            <li><a href="house_area_form.php?idPlace=<?= $houseId ?>" class="profile-area-nav-button-selected profile-area-nav-button">Profile</a></li>
            <li><a href="house_area_rents.php?idPlace=<?= $houseId ?>" class="profile-area-nav-button">Rents</a></li>
          </ul>
        </nav>
      </aside>
      <!-- HOUSE AREA FORM -->
      <div>
        <form class="profile-area-form" action="../actions/action_edit_house_information.php" method="POST">
          <input type='hidden' name='idplace' value='<?= $houseId ?>' />
          <input class="input-form" type="text" name="name" placeholder=" <?= $houseInfo['name'] ?>">
          <input class="input-form" type="text" name="country" placeholder=" <?= $houseInfo['country'] ?>">
          <input class="input-form" type="number" name="price" placeholder=" <?= $houseInfo['price'] ?>">
          <input class="input-form" type="text" name="city" placeholder=" <?= $houseInfo['city'] ?>">
          <textarea id="house-description" class="input-form" name="description" row="3" placeholder=" <?= $houseInfo['description'] ?>"></textarea>
          <input class="input-form" type="text" name="street" placeholder=" <?= $houseInfo['street'] ?>">
          <input class="input-form" type="number" name="number" placeholder=" <?= $houseInfo['price'] ?>">
          <input class="profile-area-submit-button blue-filled-rounded-button" type="submit" value="Submit Changes">
        </form>
        <form class="profile-area-form" action="../actions/action_edit_house_image.php" method="POST" enctype="multipart/form-data">
          <input type='hidden' name='idplace' value='<?= $houseId ?>' />
          <input class="input-form" type="file" name="image" required="required" placeholder="Image">
          <input class="profile-area-submit-button-2 blue-filled-rounded-button" type="submit" value="Submit Image">
        </form>
      </div>
      <div>
  </section>
<?php } ?>

<?php function draw_house_rents($houseId)
{
  $houseInfo = getHouse($houseId);
  /**
   * Draws content for main page.
   */ ?>
  <section class="profile-area">
    <header>
      <h2>House Area</h2>
    </header>
    <div>
      <aside>
        <section class="profile-card">
          <div class="profile-card-photo rounded-photo-container">
            <img src="<?= $houseInfo['picture']?>" alt="House Photo" />
          </div>
          <h3><?=$houseInfo['name'] ?></h3>
        </section>
        <nav class="profile-nav-bar">
          <ul>
            <li><a href="house_area_form.php?idPlace=<?= $houseId ?>" class="profile-area-nav-button">Profile</a></li>
            <li><a href="house_area_rents.php?idPlace=<?= $houseId ?>" class="profile-area-nav-button-selected profile-area-nav-button">Rents</a>
            </li>
          </ul>
        </nav>
      </aside>
      <!-- HOUSE RENTS -->
      <div id="house-area-rents">
        <?php $reservations = getReservationsHouse($houseId);
        for ($i = 0; $i < count($reservations); $i++) {
          $user=getUserInfo($reservations[$i]['idTourist']);
          $beginDate = new DateTime($reservations[$i]['beginDate']);
          $endDate = new DateTime($reservations[$i]['endDate']);
         ?>
          <div class="rent-card">
            <div class="rent-card-photo rounded-photo-container">
              <img src="..<?= $user['picture'] ?>" alt="User image" />
            </div>
            <h4><strong><?= $user['name'] ?></strong></h4>
            <p><strong>From:</strong> <?= $reservations[$i]['beginDate'] ?></p>
            <p><?= $houseInfo['price'] ?>€ per day</p>
            <p><strong>To:</strong> <?= $reservations[$i]['endDate'] ?></p>
            <p class="rent-card-total"><strong>Total:</strong> <?= $endDate->diff($beginDate)->format("%d") * $houseInfo['price'] ?>€</p>
          </div>
        <?php } ?>
      </div>
  </section>
<?php } ?>

<?php function draw_house_card($houseId)
{
  $dir = $_SERVER['DOCUMENT_ROOT'];
  include_once("$dir/database/db_house.php");

  $houseInfo = getHouse($houseId);
  ?>
  <div class="house-card">
    <img id="houseimg<?= $houseId ?>" src="<?= $houseInfo['picture'] ?>" alt="House Image" />
    <div class="house-card-text">
      <h2><?= $houseInfo['name'] ?> </h2>
      <h3><?= $houseInfo['street'] ?></h3>
      <h4><?= $houseInfo['country'] ?></h4>
    </div>
    <a href="../pages/house_detail_page.php?idPlace=<?= $houseId ?>" class='blue-filled-rounded-button house-card-button'><?= $houseInfo['price'] ?>€</a>
  </div>
<?php } ?>