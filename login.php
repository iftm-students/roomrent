<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css?version=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css?version=1">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"></head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
    <style>
    body {
    background-image: url('images/bg.png');
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>

<body>

    <div class="container">
        <div class="modal md" id="modal" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header model-heading ">
                            <h3 class="text-primary"> Log In</h3>
                        <button type="button" class="close" data-dismiss="modal" id="clse"> &times; </button>
                    </div>

                    <div class="modal-body"></div>
                    <form role="form" action = "login.php" method="post"name="myForm" enctype="multipart/form-data" id="form" 
                        onsubmit="return validation()">
                        <div class="form-group">

                        <div class="form-group">
                            <label for="contact" class="text-primary">Username *</label>
                            <input type="text" name="contact" id="contact" class="form-control"
                                placeholder="Contact number">                            
                        </div>

                        <div class="form-group" class="text-primary">
                            <label for="pass1" class="text-primary">Password *</label>
                            <input type="password" name="pass" id="pass1" class="form-control" minlength="1"
                                onblur="passValidation()" placeholder="enter password">
                            <span id="passt" style="color:green;"></span>
                            <span id="passf" class="text-danger "></span>
                        </div>

                        <div class="modal-footer justify-content-center">
                             <!-- <button class="btn btn-danger" data-dismiss="modal">Log in</button> -->
                            <input type="submit" value="Login"  name="submit" class="btn btn-success alert">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
         $(document).ready(function(){
            $("#modal").modal({
            backdrop: 'static',
            keyboard: false
        });

        $('#clse').click(function(){
            window.location.replace("index.php");
        });

        });

    </script>
</body>

</html>

<?php
session_start();
include 'init.php';

if (isset($_POST['submit'])) {
    $username = $_POST['contact'];
    $password = $_POST['pass'];
 echo"fs";
    $qry = "SELECT * FROM `users` WHERE `Contact`='$username'";
    $run = mysqli_query($con, $qry);
    if ($run==true) 
    {
        while ($data = mysqli_fetch_array($run)) 
        {
            if (password_verify($password, $data['Password'])) 
            {
                session_start();
                $_SESSION['uid']=$username;
                ?>
                    <html>
                        <head>
                            <link rel="stylesheet" type="text/css" href="../style.css">
                             <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        </head>
                        <body>
                        <script>
                            swal({
                                title: "Sign In",
                                text: "Sign In successfully!",
                                icon: "success",
                                button: "Ok!"
                                }).then(function() {
                                window.location.replace("index.php");
                            });
                         </script>
                        </body>
                    </html>
                <?php    
            } 
            else 
            {
                ?>
                <html>
                    <head>
                        <link rel="stylesheet" type="text/css" href="../style.css">
                         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    </head>
                    <body>
                    <script>
                        swal({
                            title: "Sign In",
                            text: "Wrong Username Or Password!   Try Again :)",
                            icon: "error",
                            button: "Ok!"
                            }).then(function() {
                            window.location.replace("login.php");
                        });
                     </script>
                    </body>
                </html>
            <?php
            }
        }
    }
}

?>