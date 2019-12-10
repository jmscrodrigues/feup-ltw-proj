<?php function draw_sign_up() {
/**
 * Draws the main header for main page.
 */ ?>
<section class="sign-form-card">
  <header>
    <a href="/">
      <img class="logo-shadow" src="assets/images/logo.png" alt="Logo" />
    </a>
    <h1>Sign Up</h1>
  </header>
  <form id="signup-form" action="" method="POST">
    <input class="input-form" type="text" name="first-name" required="required" placeholder="First Name"> 
    <input class="input-form" type="text" name="last-name" required="required" placeholder="Last Name"> 
    <input class="input-form" type="email" name="email" required="required" placeholder="Email"> 
    <input class="input-form" type="password" name="password" required="required" placeholder="Password">
    <input class="input-form" type="password" name="password" required="required" placeholder="Repeat Password">
    <input class="blue-filled-rounded-button" type="submit" value="Sign up">
  </form>
  <footer>
    <p>Already have an account? <a href="sign_in.php">Sign In</a></p>
  </footer>
</section>
<?php } ?>

<?php function draw_sign_in() {
/**
 * Draws the main header for main page.
 */ ?>
<section class="sign-form-card">
  <header>
  <a href="/">
    <img class="logo-shadow" src="assets/images/logo.png" alt="Logo" />
  </a>
  <h1>Sign In</h1>
  </header>
  <form id="signin-form" action="" method="POST">
    <input class="input-form" type="email" name="email" required="required" placeholder="Email"> 
    <input class="input-form" type="password" name="password" required="required" placeholder="Password">
    <input class="blue-filled-rounded-button" type="submit" value="Sign In">
  </form>
  <footer>
    <p>Don't have an account? <a href="sign_up.php">Create Account</a></p>
    <p>Forgot Password? <a href="#">Reset Password</a></p>
  </footer>
</section>
<?php } ?>
