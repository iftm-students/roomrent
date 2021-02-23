<?php

include 'init.php';
include '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <?php include 'links.php'; ?>
    <title>Choose Your Account</title>
</head>

<body>
    <!-- BACKGROUND IMAGE -->
    <?php include 'navbar.php'; ?>

    <!-- end:fh5co-header -->
    <div class="fh5co-parallax" style="background-image: url(images/f1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h1 class="text-center">Choose Your Account</h1>
                        <p>Made with love by the fine folks at <a href="http://freehtml5.co">YORR TEAM</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row ">
            <div class="col-sm-10 col-md-6 col-xl-6 ">
                <a href="login.php"><img src="images/user.png" alt="" class="mt-4 mx-auto d-block w-25 my-5">
                <button class=" btn btn-success mx-auto d-block mt-4 mb-5"> User Login</button></a>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-6">
                <a href="partner/login.php"><img src="images/user.png" alt="" class="mt-4 mx-auto d-block w-25 my-5">
                <button class=" btn btn-success mx-auto d-block mt-4 mb-5"> Partner Login</button></a>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>