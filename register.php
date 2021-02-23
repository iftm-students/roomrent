<?php
include 'init.php';
if (isset($_POST['submit']))
 {
    $username = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $password = $_POST['pass'];
    $hashpass = password_hash($password,PASSWORD_DEFAULT);

    // Store data to database
    try{
        $qry = "INSERT INTO `users`(`Username`, `Contact`, `Address`, `Aadhar`, `Password`) 
                VALUES ('$username','$contact','$address','$aadhar','$hashpass')";
        $run = mysqli_query($con,$qry);
        if($run==true)
        {
            session_start();
            $_SESSION['uid']=$contact;
            echo $_SESSION['uid'];
            ?>
                <html>
                    <head>
                        <link rel="stylesheet" type="text/css" href="../style.css">
                         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    </head>
                    <body>
                    <script>
                        swal({
                            title: "Sign Up",
                            text: "Your account created successfully!",
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
            // echo("Error description: " . mysqli_error($con));
            $error = "Duplicate entry '$contact' for key 'UNIQUE'";
            if(mysqli_error($con)==$error)
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
                            title: "Sign Up",
                            text: "This Contact Number has been already used!",
                            icon: "error",
                            button: "Ok!"
                            }).then(function() {
                            window.location.replace("register.php");
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
                            title: "Sign Up",
                            text: "This Aadhar Number has been already used!",
                            icon: "error",
                            button: "Ok!"
                            }).then(function() {
                            window.location.replace("register.php");
                        });
                     </script>
                    </body>
                </html>
                <?php
            }
        }
    }
    catch(PDOException $e)
    {
        echo $e;
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
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
    
    <title>Register</title>
    <style>
    body {
    background-image: url('images/bg.png');
    background-repeat: no-repeat;
    background-size: cover;
}

    </style>
</head>

<body>
    	<!--------------------------------- Add Modal ---------------------------------------------------->
    <div class="container">
        <div class="modal md" id="modal" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header model-heading ">
                            <h3 class="text-primary"> Create Your Account</h3>
                        <button type="button" class="close" data-dismiss="modal" id="clse"> &times; </button>
                    </div>

                    <div class="modal-body"></div>
                    <form role="form" action = "register.php" method="post"name="myForm" enctype="multipart/form-data" id="form" 
                        onsubmit="return validation()">
                        <div class="form-group">
                            <label for="name" class="text-primary">Name *</label>
                            <input type="text" name="name" id="name" class="form-control"
                               onblur="nameValidation()" placeholder="Create your username">
                            <span id="namet" style="color:green;"></span>
                            <span id="namef" style="color:red;"></span>
                        </div>

                        <div class="form-group">
                            <label for="contact" class="text-primary">Mobile *</label>
                            <input type="text" name="contact" id="contact" class="form-control"
                                 onblur="contactValidation()" placeholder="Contact number" maxlength="10">
                            <span id="numbert" style="color:green;"></span>
                            <span id="numberf" style="color:red;"></span>
                        </div>

                        <div class="form-group">
                            <label for="Address" class="text-primary">Address *</label>
                            <input type="text" name="address" id="address" class="form-control"
                                onblur="addressValidation()" placeholder="Address">
                            <span id="addresst" style="color:green;"></span>
                            <span id="addressf" class="text-danger "></span>
                        </div>

                        <div class="form-group">
                            <label for="aadhar" class="text-primary">Aadhar No</label>
                            <input type="text" name="aadhar" id="aadhar" class="form-control"
                                onblur="aadharValidation()"placeholder="AadharCard Number" maxlength="12">
                            <span id="aadhart" style="color:green;"></span>
                            <span id="aadharf" class="text-danger "></span>
                        </div>

                        <div class="form-group" class="text-primary">
                            <label for="pass1" class="text-primary">Password *</label>
                            <input type="password" name="pass" id="pass1" class="form-control" minlength="1"
                                onblur="passValidation()" placeholder="Create password">
                            <span id="passt" style="color:green;"></span>
                            <span id="passf" class="text-danger "></span>
                        </div>

                        <div class="form-group">
                            <label for="pass2" class="text-primary">Confirm Password *</label>
                            <input type="password" name="cpass" id="pass2" class="form-control" 
                                onblur="cpassValidation()"placeholder="Confirm Password">
                            <span id="cpasst" style="color:green;"></span>                            
                            <span id="cpassf" class="text-danger "></span>
                        </div>
                         
                        <div class="modal-footer justify-content-center">
                             <!-- <button class="btn btn-danger" data-dismiss="modal">Log in</button> -->
                            <input type="submit" value="Create Account"  name="submit" class="btn btn-success alert">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Page Resubmission solution -->

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

    // if (window.history.replaceState) {
    //     window.history.replaceState(null, null, window.location.href);
    // }

    //          Validation

        function nameValidation()
        {
            var name = document.getElementById('name').value;
            if(name=="")
            {
                document.getElementById('namet').innerHTML="";
                document.getElementById('namef').innerHTML="Name is neccessary to fill out.";
                return false;
            }
            if (typeof name == 'string')
            {
                if(Number(name) || Number(name)==0)
                {
                    document.getElementById('namet').innerHTML="";
                    document.getElementById('namef').innerHTML="Name should be in valid format.";
                    return false;
                }

                var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
                var re = /^[A-Za-z ]+$/;

                if(format.test(name))
                {
                    document.getElementById('namet').innerHTML="";
                    document.getElementById('namef').innerHTML="Special Character are not allowed.";
                    return false;
                }
                if(!re.test(name))
                {
                    document.getElementById('namet').innerHTML="";
                    document.getElementById('namef').innerHTML="Name should be in valid format.";
                    return false;
                }
            }
            {
                document.getElementById('namet').innerHTML="";
                document.getElementById('namef').innerHTML="✔";
                return true;
            }
        }

        function contactValidation()
        {
            var contact = document.getElementById('contact').value;
            if (contact == "") 
            {
                document.getElementById('numbert').innerHTML="";
                document.getElementById('numberf').innerHTML="Contact can't be empty.";
                return false;
            }
            if (typeof contact == 'string')
            {
                var temp = Number(contact);
                var format = /^[0-9]+$/; 
                if(!(Number.isInteger(temp)))
                {
                    document.getElementById('numbert').innerHTML="";
                    document.getElementById("numberf").innerHTML="Contact should be in valid format";
                    return false;
                }
                if(((contact.trim()).length < 10) || ((contact.trim()).length > 10))
                {
                    document.getElementById('numbert').innerHTML="";
                    document.getElementById("numberf").innerHTML="Contact must be 10 digit";
                    return false;
                }
                if(temp == 0)
                {
                    document.getElementById('numbert').innerHTML="";
                    document.getElementById("numberf").innerHTML="Contact should be in valid format";
                    return false;
                }
                if(!format.test(contact))
                {
                    document.getElementById('numbert').innerHTML="";
                    document.getElementById("numberf").innerHTML="Contact should be in valid format";
                    return false;   
                }
                {
                document.getElementById('numbert').innerHTML="✔";
                document.getElementById('numberf').innerHTML="";
                return true;
                }
            }
        }

        function addressValidation()
        {
            var address = document.getElementById('address').value;
            if(address=="")
            {
                document.getElementById('addresst').innerHTML="";
                document.getElementById("addressf").innerHTML="Address must be fill.";
                return false;   
            }
            {
                document.getElementById('addresst').innerHTML="✔";
                document.getElementById('addressf').innerHTML="";
                return true;   
            }
        }

        function aadharValidation()
        {
            var contact = document.getElementById('aadhar').value;
            if (contact == "") 
            {
                document.getElementById('aadhart').innerHTML="";
                document.getElementById('aadharf').innerHTML="Aadhar can't be empty.";
                return false;
            }
            if (typeof contact == 'string')
            {
                var temp = Number(contact);
                var format = /^[0-9]+$/; 
                if(!(Number.isInteger(temp)))
                {
                    document.getElementById('aadhart').innerHTML="";
                    document.getElementById("aadharf").innerHTML="Aadhar should be in valid format";
                    return false;
                }
                if(((contact.trim()).length < 12) || ((contact.trim()).length > 12))
                {
                    document.getElementById('aadhart').innerHTML="";
                    document.getElementById("aadharf").innerHTML="Aadhar must be 12 digit";
                    return false;
                }
                if(temp == 0)
                {
                    document.getElementById('aadhart').innerHTML="";
                    document.getElementById("aadharf").innerHTML="Aadhar should be in valid format";
                    return false;
                }
                if(!format.test(contact))
                {
                    document.getElementById('aadhart').innerHTML="";
                    document.getElementById("aadharf").innerHTML="Aadhar should be in valid format";
                    return false;   
                }
                {
                document.getElementById('aadhart').innerHTML="✔";
                document.getElementById('aadharf').innerHTML="";
                return true;
                }
            }
        }

        function passValidation()
        {
            var password = document.getElementById('pass1').value;
            if(password=="")
            {
                document.getElementById('passt').innerHTML="";
                document.getElementById("passf").innerHTML="Password must be created.";
                return false;   
            }
            {
                document.getElementById('passt').innerHTML="✔";
                document.getElementById('passf').innerHTML="";
                return true;   
            }
        }

        function cpassValidation()
        {
            var password = document.getElementById('pass1').value;
            var cpassword = document.getElementById('pass2').value;

            if(password!=cpassword)
            {
                document.getElementById('cpasst').innerHTML="";
                document.getElementById("cpassf").innerHTML="Password doesn't match.";
                return false;   
            }
            {
                document.getElementById('cpasst').innerHTML="✔";
                document.getElementById('cpassf').innerHTML="";
                return true;   
            }
        }
        function validation()
        {
            if(!nameValidation())
                return false;

            if(!contactValidation())
                return false;
                
            if(!addressValidation())
                return false;

            if(!aadharValidation())
                return false;

            if(!passValidation())
                return false;           

            if(!cpassValidation())
                return false; 

            return true;
        }
    
</script>

</html>