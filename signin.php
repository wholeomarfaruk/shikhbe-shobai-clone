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

<section id="signin-section">
    <div class="wrapper">
        <div class="main-box">
            <div class="image-box">
                <img src="img/singin-banner-img.png" alt="">
            </div>
            <div class="sigin-form">
                <h1>Welcome Back!</h1>
                <p>Login To Continue...</p>
                <form action="">
                    <div class="input-group">
                        <input type="email" name="email" id="" placeholder="Email Address">
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="" placeholder="Enter your Password">
                    </div>
                    <div class="input-group">
                        <input class="log-btn" type="submit" name="submit" id="">
                    </div>
                    <div class="input-group">
                        <a href="reset.php">Forgot Password?</a> <br>
                        <a href="signup.php">New user? Register Here</a>
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