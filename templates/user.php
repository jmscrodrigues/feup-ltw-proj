<?php function draw_user_form($userId) {
/**
 * Draws content for main page.
 */?>
<section class="profile-area">
  <header>
    <h2>User Area</h2>
  </header>
  <div>
    <aside>
      <section class="profile-card">
        <div class="profile-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="Hemkonfort Logo" />
        </div>
        <h3>John Doe</h3>
      </section>
      <nav class="profile-nav-bar">
        <ul>
          <li><a href="user_area_form.php" class="profile-area-nav-button-selected profile-area-nav-button">Profile</a></li>
          <li><a href="user_area_houses.php" class="profile-area-nav-button">My Houses</a></li>
          <li><a href="user_area_rents.php" class="profile-area-nav-button">My Rents</a></li>
          <li><a href="user_area_messages.php" class="profile-area-nav-button">Messages</a></li>
        </ul>
      </nav>
    </aside>
    <!-- USER AREA FORM -->
    <div>
      <form class="profile-area-form" action="" method="POST">
        <input class="input-form" type="text" name="username" required="required" placeholder="john_doe_87"> 
        <input class="input-form" type="text" name="name" required="required" placeholder="John Doe"> 
        <input class="profile-area-submit-button blue-filled-rounded-button" type="submit" value="Update Name">
      </form>
      <form class="profile-area-form" action="" method="POST">
        <input class="input-form" type="email" name="email" required="required" placeholder="john.doe@whatever.com"> 
        <input class="input-form" type="tel" name="phonenumber" required="required" placeholder="827-0389-987"> 
        <input class="profile-area-submit-button blue-filled-rounded-button" type="submit" value="Update Contacts">
      </form>
      <form class="profile-area-form" action="" method="POST">
        <input class="input-form" type="password" name="password" required="required" placeholder="New Password">
        <input class="input-form" type="password" name="password" required="required" placeholder="Repeat New Password">
        <input class="input-form" type="password" name="password" required="required" placeholder="Old Password">
        <input class="profile-area-submit-button-2 blue-filled-rounded-button" type="submit" value="Update Password">
      </form>
      <form class="profile-area-form" action="" method="POST">
        <input class="input-form" type="file" name="image" required="required" placeholder="Image">
        <input class="profile-area-submit-button-2 blue-filled-rounded-button" type="submit" value="Submit Image">
      </form>
    </div>
  <div>
</section>
<?php } ?>

<?php function draw_user_houses($userId) {
/**
 * Draws content for main page.
 */?>
<section class="profile-area">
	<header>
	  <h2>User Area</h2>
	</header>
	<div>
	  <aside>
		<section class="profile-card">
		  <div class="profile-card-photo rounded-photo-container">
			  <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="Hemkonfort Logo" />
		  </div>
		  <h3>John Doe</h3>
		</section>
		<nav class="profile-nav-bar">
		  <ul>
        <li><a href="user_area_form.php" class="profile-area-nav-button">Profile</a></li>
        <li><a href="user_area_houses.php" class="profile-area-nav-button profile-area-nav-button-selected">My Houses</a></li>
        <li><a href="user_area_rents.php" class="profile-area-nav-button">My Rents</a></li>
        <li><a href="user_area_messages.php" class="profile-area-nav-button">Messages</a></li>
		  </ul>
		</nav>
	  </aside>
    <!-- USER AREA HOUSES -->
    <div id="user-area-houses">
      <button id="add-house-button" class="blue-filled-rounded-button" type="button">Add House</button>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <form class="modal-form profile-area-form" action="" method="POST">
            <input class="input-form" type="text" name="name" required="required" placeholder="House name"> 
            <input class="input-form" type="text" name="country" required="required" placeholder="Country"> 
            <input class="input-form" type="number" name="price" required="required" placeholder="Price/night"> 
            <input class="input-form" type="text" name="city" required="required" placeholder="City">
            <textarea id="house-description" class="input-form" name="description" required="required" row="3" placeholder="Description"></textarea>
            <input class="input-form" type="text" name="street" required="required" placeholder="Street"> 
            <input class="input-form" type="number" name="number" required="required" placeholder="Number">
            <input class="input-form" type="file" name="image" required="required" placeholder="Image">
            <input class="profile-area-submit-button-2 blue-filled-rounded-button" type="submit" value="Add House">
          </form>
        </div>
      </div>
      <!-- Houses list -->
      <article class='house-article-container'>
        <?php for($i = 0; $i < 5; $i++)  {?>
        <div class="house-card">
          <img src="../design/mockups/stock-images/stock-house.jpg" alt="House image" />
          <div class="house-card-text">
            <h2>Banana</h2>
            <h3>RUA DA BANANA</h3>
            <h4>BANANA COUNTRY</h4>
          </div>
          <a href="#" class='blue-filled-rounded-button house-card-button'>2€</a>
        </div>
        <?php } ?>
      </article>
    </div>
  </div>
</section>
<?php } ?>

<?php function draw_user_rents($userId) {
/**
 * Draws content for main page.
 */?>
<section class="profile-area">
  <header>
    <h2>User Area</h2>
  </header>
  <div>
    <aside>
      <section class="profile-card">
        <div class="profile-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="Hemkonfort Logo" />
        </div>
        <h3>John Doe</h3>
      </section>
      <nav class="profile-nav-bar">
        <ul>
          <li><a href="user_area_form.php" class="profile-area-nav-button">Profile</a></li>
          <li><a href="user_area_houses.php" class="profile-area-nav-button">My Houses</a></li>
          <li><a href="user_area_rents.php" class="profile-area-nav-button profile-area-nav-button-selected">My Rents</a></li>
          <li><a href="user_area_messages.php" class="profile-area-nav-button">Messages</a></li>
        </ul>
      </nav>
    </aside>
    <!-- USER AREA RENTS -->
    <div id="user-area-rents">
      <?php for($i = 0; $i < 6; $i++)  {?>
      <div class="rent-card">
        <div class="rent-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-house.jpg" alt="House image" />
        </div>
          <h4><strong>House Name</strong></h4>
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


<?php function draw_user_messages($userId) {
/**
 * Draws content for main page.
 */?>
<section class="profile-area">
  <header>
    <h2>User Area</h2>
  </header>
  <div>
    <aside>
      <section class="profile-card">
        <div class="profile-card-photo rounded-photo-container">
          <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="Hemkonfort Logo" />
        </div>
        <h3>John Doe</h3>
      </section>
      <nav class="profile-nav-bar">
        <ul>
          <li><a href="user_area_form.php" class="profile-area-nav-button">Profile</a></li>
          <li><a href="user_area_houses.php" class="profile-area-nav-button">My Houses</a></li>
          <li><a href="user_area_rents.php" class="profile-area-nav-button">My Rents</a></li>
          <li><a href="user_area_messages.php" class="profile-area-nav-button profile-area-nav-button-selected">Messages</a></li>
        </ul>
      </nav>
    </aside>
    <!-- USER AREA MESSAGES -->
    <div id="user-area-messages">
      <div id="message-address-list">
        <?php for($i = 0; $i < 6; $i++)  {?>
        <div class="user-message-card">
          <div class="user-message-card-photo rounded-photo-container">
            <img src="../design/mockups/stock-images/stock-profile-photo.jpg" alt="House image" />
          </div>
          <h4><strong>John Doe <?=$i+1?></strong></h4>
        </div>
        <?php } ?>
      </div>
      <div id="message-chat-box">
        <div id="message-chat-box-view">
          cenas aqui :)
        </div>
        <form action="" id="message-send-form">
          <textarea class="input-form" type="text" name="text" required="required" placeholder="Write your message"></textarea>
          <input class="blue-filled-rounded-button input-form-button" type="submit" value="Send">
        </form>
      </div>
    </div>
  <div>
</section>
<?php } ?>


