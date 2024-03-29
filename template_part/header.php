<?php

/**
 * This is header part
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shikhbe Shobai</title>
    <link rel="icon" href="img/Shikhbe-shobai-logo.png" type="image/png" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="plugin/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="plugin/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>



        <header id="header_area">
            <div class="wrapper">
                <div id="header-area-inner">
                    <div id="logo">
                        <a href="index.php">
                            <div class="logo_area">

                                <img src="img/Shikhbe-shobai-logo.png" alt="">

                            </div>
                        </a>
                    </div>
                    <nav id="nav">
                        <?php include('nav_menu.php'); ?>
                    </nav>
                    <div id="user_log_btn">
                        <a class="log-btn inline-block" href="signin.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Signin</a>
                        <a class="log-btn inline-block" href="signup.php"><i class="fa-solid fa-user-plus"></i> Singup</a>

                    </div>
                    <div class="menu-btn">
                        <a href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
                    </div>
                </div>


            </div>
        </header>