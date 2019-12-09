<section class="profile-area">
    <header>
      <h2>User Area</h2>
    </header>
    <div>
      <aside>
        <section class="profile-card">
          <div class="profile-card-photo rounded-photo-container">
            <img src="design/mockups/stock-images/stock-profile-photo.jpg" alt="Hemkonfort Logo" />
          </div>
          <h3>John Doe</h3>
        </section>
        <nav class="profile-nav-bar">
          <ul>
            <li><a class="profile-area-button">Profile</a></li>
            <li><a class="profile-area-button">My Houses</a></li>
            <li><a class="profile-area-button-selected profile-area-button">My Rents</a></li>
            <li><a class="profile-area-button">Messages</a></li>
          </ul>
        </nav>
      </aside>
      <!-- USER AREA RENTS -->
      <div id="user-area-rents">
        <?php for($i = 0; $i < 6; $i++)  {?>
        <div class="rent-card">
          <div class="rent-card-photo rounded-photo-container">
            <img src="design/mockups/stock-images/stock-house.jpg" alt="House image" />
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