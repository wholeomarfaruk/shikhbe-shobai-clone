<?php

/**
 * Index File
 */
?>
<?php
//include header
include_once('template_part/header.php');

//Content

?>

<section id="signup-section">
    <div class="wrapper">
        <div class="main-box">
            <div class="image-box">
                <img src="img/singup-banner-img.png" alt="">
            </div>
            <div class="sigin-form">
                <h1>Hey! Welcome Back!</h1>
                <p>Lets Start Your Journey With Shikhbe Shobai...</p>
                <form action="">
                    <div class="input-group">
                        <input type="text" name="fname" id="" placeholder="Enter your Full Name">
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" id="" placeholder="Email Address">
                    </div>
                    <div class="input-group">
                        <input type="text" name="phone" id="" placeholder="Enter your Phone Number">
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="" placeholder="Enter your Password">
                    </div>
                    <div class="input-group">
                        <input type="password" name="re-password" id="" placeholder="Re-Type Password">
                    </div>
                    <div class="input-group">
                        <input class="log-btn" type="submit" name="submit" id="">
                    </div>
                    <div class="input-group">
                        <a href="signin.php">Already A Member? Signin Here</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>




<?php
//include Footer
include_once('template_part/footer.php');

?>