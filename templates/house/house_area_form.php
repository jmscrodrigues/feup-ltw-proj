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
