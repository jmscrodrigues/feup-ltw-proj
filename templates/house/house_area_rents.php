<?php

?>

<section class="profile-area">
  <header>
    <h2>House Area</h2>
  </header>
  <div>
    <aside>
      <section class="profile-card">
        <div class="profile-card-photo rounded-photo-container">
          <img src="design/mockups/stock-images/stock-house.jpg" alt="House Photo" />
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
          <img src="design/mockups/stock-images/stock-profile-photo.jpg" alt="House image" />
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