
<?php
include_once('../database/connection.php');
include_once('../database/db_house.php');
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
    <h4 class="house-list">
      <label>Name
        <input class="input-form" type="text" name="name" placeholder="House Name">
      </label>
      <label>Country
            <select class="input-form select-form" name="country">
                <option value="">All</option>
                <?php $countries=getAllCountries();
                    for ($i=0;$i<count($countries);$i++) {?>
                        <option value="<?=$countries[$i]['country']?>"><?=$countries[$i]['country']?></option>
                <?php } ?>
            </select>
        </label>
      <label>City
        <select class="input-form select-form" name="city">
          <option value="">All</option>
          <?php $cities=getAllCities();
                for ($i=0;$i<count($cities);$i++) {?>
                <option value="<?=$cities[$i]['city']?>"><?=$cities[$i]['city']?></option>
            <?php } ?>
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
    </h4>
  </section>
  <article class='house-article-container' id="ListOfHouses">
  Houses should appear here
  </article>
</section>
<?php } ?>