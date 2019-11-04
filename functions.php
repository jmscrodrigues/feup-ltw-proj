<?php function draw_signup() { 
/**
 * Draws the signup section.
 */ ?>
    <section id = "signup">
            <form action="" method="POST">
                    <label>Username:
                        <input type="text" name="username" required="required"> 
                    </label>
                    <br>
                    <label>E-mail:
                        <input type="text" name="email" required="required">
                    </label>
                    <br>
                    <label>Password:
                            <input type="text" name="password" required="required">
                    </label>
                    <br>
                    <label>Confirm password:
                            <input type="text" name="c_password" required="required">
                    </label>
                    <br>
                    <label>First Name:
                            <input type="text" name="f_name" required="required">
                    </label>
                    <br>
                    <label>Last Name:
                            <input type="text" name="l_name" required="required">
                    </label>
                    <br>
                    <input type="submit" value="Sign Up">
            </form>
            <footer>
                <p>Already have an account? <a href="--------">Sign In</a></p>
            </footer>
        </section>
    
<?php } ?>

<?php function draw_signin() { 
/**
 * Draws the signup section.
 */ ?>
    <section id = "signin">
            <form action="" method="POST">
                    <label>Username:
                        <input type="text" name="username" required="required"> 
                    </label>
                    <br>
                    <label>Password:
                            <input type="text" name="password" required="required">
                    </label>
                    <br>
                    <input type="submit" value="Sign In">
            </form>
            <footer>
                <p>Don't have an account? <a href="--------">Create Account</a></p>
                <p>Forgot Password? <a href="--------">Reset Password</a></p>
            </footer>
        </section>
    
<?php } ?>


<?php function draw_header() {
/**
 * Draws the header of the Website.
 */
    ?>
    <!DOCTYPE html>

    <html lang="en-US">
        <head>
            <title>Hemkonfort</title>
            <meta charset="UTF-8">
        </head>

        <body>
        
            <header>
                <h1> HEMKONFORT IN THA HOUSE BIATCHES! </h1>
                <img src="images/sofa_test.jpeg" alt="Hemkonfort Logo" />
                <nav>
                    <ul>
                        <li> <a href="about_us.html" target="_blank">About Us</a></li>
                        <li> <a href="----" target="_blank">New Houses</a></li>
                        <li> <a href="----" target="_blank">Popular</a></li>
                        <li> <a href="sign_up.html" target="_blank">Sign In</a></li>
                        <li> <a href="sign_in.html" target="_blank">Sign Up</a> </li>
                    </ul>
                </nav>
            </header>
<?php } ?>

<?php function draw_footer($username) {
/**
 * Draws the footer of the Website.   TODO: VERIFICAR PARTE DA USER AREA NO CASO DE TER UM USER COM SESSÃO INICIADA E NAO!
 */
    ?>

            <h2>| Information<h2>
            <nav>
                <ul>
                    <li> <a href="----" target="_blank">FAQs</a></li>
                    <li> <a href="----" target="_blank">Company</a></li>
                    <li> <a href="----" target="_blank">Privacy Policy</a></li>
                    <li> <a href="----" target="_blank">Payment</a></li>
                    <li> <a href="----" target="_blank">Contract Information</a> </li>
                    <li> <a href="----" target="_blank">Insurance</a> </li>

                </ul>
            </nav>

            <h2>| User Area<h2>  
            <nav>
                <ul>
                    <li> <a href="----" target="_blank">Personal Profile</a> </li>
                    <li> <a href="----" target="_blank">Messages</a> </li>
                    <li> <a href="----" target="_blank">My Houses</a> </li>
                    <li> <a href="----" target="_blank">My Orders</a> </li>

                </ul>
            </nav>
            


        </body>
    </html>

<?php } ?>
    