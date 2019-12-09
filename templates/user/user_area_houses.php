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
        <li><a class="profile-area-button-selected profile-area-button">My Houses</a></li>
        <li><a class="profile-area-button">My Rents</a></li>
        <li><a class="profile-area-button">Messages</a></li>
		  </ul>
		</nav>
	  </aside>
	  <!-- USER AREA HOUSES -->
	  <article id="user-area-houses" class='house-article-container'>
      <?php for($i = 0; $i < 5; $i++)  {?>
      <div class="house-card">
        <img src="design/mockups/stock-images/stock-house.jpg" alt="House image" />
        <div class="house-card-text">
        <h2>Banana</h2>
        <h3>RUA DA BANANA</h3>
        <h4>BANANA COUNTRY</h4>
        </div>
        <a href="google.com" class='blue-filled-rounded-button house-card-button'>2€</a>
      </div>
      <?php } ?>
	  </article>
	<div>
</section>

