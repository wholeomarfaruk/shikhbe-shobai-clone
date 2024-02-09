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

<section id="reset-section">
    <div class="wrapper">
        <div class="main-box">
            <div class="image-box">
                <img src="img/singin-banner-img.png" alt="">
            </div>
            <div class="sigin-form">
                <h1>Reset Your Password</h1>
                
                <form action="">
                    <div class="input-group">
                        <input type="email" name="email" id="" placeholder="Enter your Email Address">
                    </div>
                    <div class="input-group">
                        <input class="log-btn" type="submit" name="submit" id="" value="Send Password Reset Link">
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