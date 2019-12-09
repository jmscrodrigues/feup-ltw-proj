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
          <li><a class="profile-area-button">My Rents</a></li>
          <li><a class="profile-area-button-selected profile-area-button">Messages</a></li>
          </ul>
        </nav>
      </aside>
      <!-- USER AREA MESSAGES -->
      <div id="user-area-messages">
        <div id="message-address-list">
          <?php for($i = 0; $i < 6; $i++)  {?>
          <div class="user-message-card">
            <div class="user-message-card-photo rounded-photo-container">
              <img src="design/mockups/stock-images/stock-profile-photo.jpg" alt="House image" />
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