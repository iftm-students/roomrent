<?php
session_start();
include '../init.php';

$success = false;
$dialog_type =  "";
$msg = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $qry = "SELECT `id`, `name`, `password` FROM `users` WHERE name='$username' And password = '$password'";
    $qry = "SELECT * FROM `Partners` WHERE name='$username'";
    $res = mysqli_query($con, $qry);
    $rows = mysqli_num_rows($res);

    if ($rows) {
        while ($arr = mysqli_fetch_array($res)) {
            if (password_verify($password, $arr['password'])) {
                $success = true;
                $dialog_type = "alert alert-success";
                $msg = "Login Successfully!";
                $_SESSION['username'] = $username;
                header('location:dashboard.php');
            } else {
                $success = true;
                $dialog_type = "alert alert-danger";
                $msg = "Login Failed! Please Try Again Later.";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css?version=1">
    <title>Login</title>
</head>

<body style="background-image: linear-gradient( to left, #33ccff , #ff99cc); overflow:hidden;">
    <?php

    if ($success == true) { ?>
        <div class="<?php echo $dialog_type; ?>"><strong><?php echo  $msg; ?></strong></div>
    <?php } ?>


    <div>
        <div>
            <p class="display-4 text-center text-light py-4">Welcome to YORR</p>
        </div>
        <div class="row">
            <div class="col-sm-10 col-md-4 col-lg-4">

            </div>
            <div class="col-sm-10 col-md-4 col-lg-4">

                <div>
                    <form action="login.php" method="POST" class="p-5 bg-white">
                        <h1 class="text-center">LOGIN</h1>

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Type here" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********" required>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block rounded-0" name="submit"> LOGIN</button>
                    </form>
                    <br>
                    <center><span>Don't have an account?<strong><a href="register.php">Register</a></strong> </span></center>
                </div>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">

            </div>
        </div>
    </div>
</body>

</html>