<?php 
include'init.php';
error_reporting(0);
session_start();
if($_SESSION['uid']==false){
    header('location:login.php');
}
$uid = $_SESSION['uid'];
$qry = "SELECT * from users where `Contact`='$uid'";
$res = mysqli_query($con,$qry);
$arr = mysqli_fetch_array($res);
// $id = $arr['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Stylesheets -->
    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css?version=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <title>Profile</title>
    <style>
	.btnl{
  border: 3px solid white !important;
  background-color:#33cccc !important;
  color: white !important;
  padding: 10px 10px !important;
  font-size: 18px !important;
  cursor: pointer!important;
  margin-left:75% !important;
  margin-top:25% !important;
  border-radius: 25px !important;
}
    </style>
</head>

<body>
<?php include 'navbar.php'; ?>
    <div id="background">
        <img src="images/f1.jpg" alt="image">        
    </div>
    
        <div class="username font-weight-bold container mt-5">
            <h1>Hello, <?php echo $arr['Username']; ?></h1>
        </div>

        <section class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="password_details">
                            <h2 class="font-weight-bold">Edit profile <a href="edit.php"><i class="fa fa-pencil" aria-hidden="true"></i></a> </h2>
                            <div class="name mt-5">
                                <h3>Full Name</h3>
                                <h4 class="mt-2"><?php echo $arr['Username']; ?></h4>
                            </div>
                            <div class="phone mt-5">
                                <h3>Phone Number</h3>
                                <h4 class="mt-2"><span>+91</span> <?php echo $arr['Contact']; ?></h4>
                            </div>   
                            <div class="city mt-5">
                                <h3>Address</h3>
                                <h4 class="mt-2"><?php echo $arr['Address']; ?></h4>
                            </div>  
                            <div class="city mt-5">
                                <h3>AadharCard Number</h3>
                                <h4 class="mt-2"><?php echo $arr['Aadhar']; ?></h4>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="password_details">
                            <h2 class="font-weight-bold">Change password <a href="edit.php"><i class="fa fa-pencil" aria-hidden="true"></i></a></h2>
                            <div class="name mt-5">
                                <h3>Current password</h3>
                                <h4 class="mt-2">********</h4>
                                <a href="logout.php" class="btn btnl">Logout</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    

    <?php include 'footer.php'; ?>


    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Dropdown Menu -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Owl Slider -->
    <!-- // <script src="js/owl.carousel.min.js"></script> -->
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>

    <script src="js/custom.js"></script>


</body>

</html>
