<?php

include '../init.php';


$success = false;
$dailog_type = "";
$msg = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $query = "SELECT * FROM `users` where name='$username'";
    $result = mysqli_query($con, $query);
    $arr = mysqli_fetch_array($result);

    // Check username are not same
    if ($arr['name'] == $username) {
        $success = true;
        $msg = "Username Already Exists! Please choose different name.";
        $dailog_type = "alert alert-danger";
    } else {
        if ($pass1 == $pass2) {
            $hash = password_hash($pass1,PASSWORD_DEFAULT);
            $qry = "INSERT INTO `partners`(`name`, `mobile`,`password`) VALUES ('$username','$mobile','$hash')";
            $res = mysqli_query($con, $qry);
            if ($res == true) {
                // sleep(5);
                $success  = true;
                $msg = $username . " Your account has been created successfully";
                $dailog_type = "alert alert-success";
                // header('location:login.php', true, 303);
            }
        } else {
            $success = true;
            $msg = "Some Error Occured! Please Try Again.";
            $dailog_type = "alert alert-danger";
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
    <link rel="stylesheet" href="../css/register.css?version=1">
    <title>Register</title>
</head>

<body id="body" style="overflow-y:hidden;">
    <?php if ($success) { ?>
        <div class="<?php echo $dailog_type; ?>"><strong><?php echo $msg; ?></strong></div>
    <?php } ?>
    <div class="">
        <div class="second_section">
            <br>
            <div class="row">
                <div class="col-sm-0 col-md-4 col-lg-4">

                </div>
                <div class="col-sm-10 col-md-4 col-lg-4">
                    <form action="register.php" method="POST" onclick="return myfun()">
                        <h2 class="text-center pt-3 pb-2 text-secondary">Create your account. </h2>
                        <div class="form-group">
                            <label for="username" class="text-danger">Username *</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Type here" autofocus>
                            <span id="name_error" class="font-weight-bold text-danger "></span>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="text-danger">Mobile *</label>
                            <input type="number" name="mobile" id="mobile" class="form-control" placeholder="0123456789">
                            <span id="mobile_error" class="font-weight-bold text-danger "></span>
                        </div>
                        <div class="form-group" class="text-danger">
                            <label for="pass1" class="text-danger">Password *</label>
                            <input type="password" name="pass1" id="pass1" class="form-control" placeholder="********">
                            <span id="pass1_error" class="font-weight-bold text-danger "></span>
                        </div>
                        <div class="form-group">
                            <label for="pass2" class="text-danger">Confirm Password *</label>
                            <input type="password" name="pass2" id="pass2" class="form-control" placeholder="********">
                            <span id="pass2_error" class="font-weight-bold text-danger "></span>
                        </div>
                        <button class="btn btn-danger btn-lg btn-block rounded-0 mb-3 mt-3" name="submit">Create Acount</button>
                    </form>
                    <br>
                    <center><span class="text-center font-weight-bold mt-4">Already have an account? <strong><a href="login.php">Sign in</a></strong> </span></center>
                </div>
                <div class="col-sm-0 col-md-4 col-lg-4">

                </div>
            </div>
            <br>
        </div>
    </div>


</body>
<!-- Page Resubmission solution -->

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    function myfun() {
        var username = document.getElementById('username').value;
        var mobile = document.getElementById('mobile').value;
        var pass1 = document.getElementById('pass1').value;
        var pass2 = document.getElementById('pass2').value;

        if (username == "") {
            document.getElementById('name_error').innerHTML = "Please Fill Username";
            return false;
        }
        if (!isNaN(username)) {
            document.getElementById('name_error').innerHTML = "Please Fill Only Alphabets";
            return false;
        }
        if (mobile == "") {
            document.getElementById('mobile_error').innerHTML = "Please Fill Mobile";
            return false;
        }
        if (isNaN(mobile)) {
            document.getElementById('mobile_error').innerHTML = "Please Fill Only Digits";
            return false;
        }
        if (mobile.length != 10) {
            document.getElementById('mobile_error').innerHTML = "Please Fill Correct Mobile Number";
            return false;
        }
        if (pass1 == "") {
            document.getElementById('pass1_error').innerHTML = "Please Fill Password";
            return false;
        }
        if (pass1.length < 8) {
            document.getElementById('pass1_error').innerHTML = "Please Fill Minimum 8 Characters";
            return false;
        }
        if (pass1 != pass2) {
            document.getElementById('pass2_error').innerHTML = "Password do not match";
            return false;
        }
    }
</script>

</html>