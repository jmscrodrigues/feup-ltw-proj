<?php 
  include_once('../database/connection.php');
  include_once('../templates/house.php');

function draw_house_list() { 
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
      <label>Start Date
        <input class="input-form" type="date" name="startdate">
      </label>
      <label>End Date
        <input class="input-form" type="date" name="finaldate">
      </label>
      <input class="blue-filled-rounded-button" type="submit" value="Search">
    </form>
  </section>
  <article class='house-article-container'>
  <?php
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE ORDER BY classification DESC');
    $stmt->execute();
    $result = $stmt->fetchAll(); ?>
    <?php for ($i = 0; $i < count($result); $i++) {
        draw_house_card($result[$i]['idPlace']);
    } ?>
  </article>
</section>
<?php } ?>