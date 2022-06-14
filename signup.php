<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" type="text/css" href="assets/css/style.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
    <link rel="stylesheet" type="text/css" href="icons/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>SIGNUP | COMPETENCY</title>
</head>
<body>
    <div class="container">

    <form action="sign-up.php" class="form1" method="post">
            <?php
                if(isset($_GET['error'])){
                    echo "<p class='error' style='background-color: red;color: white;padding: 10px;width: 100%;text-align:center;font-weight: bold;'>";
                    $error = $_GET['error'];
                    if($error == 'emptyFields'){
                        echo "Please fill in all fields!";
                    } elseif ($error == 'emailAlreadyExist') {
                        echo "Email already taken! Try another one.";
                    } elseif ($error == 'passwordsDoesnotMatch') {
                        echo "Password doesn't match!!";
                    } elseif ($error =="signupFailed") {
                        echo'Error occured';
                    }
                    echo "</p>";
                }
            ?>
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="security">
            <h4>Competency | <strong>Sign Up</strong></h4>
       </div>
        <div class="name">
                <div class="personal-info">
                    <label for="fname">Firstname</label>
                    <input type="text" name="fname">
                </div>
                <div class="personal-info">
                    <label for="lname">Lastname</label>
                    <input type="text" name="lname" >
                </div>
        </div>
        <div class="contact">
            <div class="personal-info">
                <label for="email">E-mail Address</label>
                <input type="email" name="email">
            </div>
            <div class="personal-info">
                <label for="pnumber">Phone Number</label>
                <input type="text" name="pnumber">
            </div>
        </div>
        <div class="password">
            <div class="personal-info">
                <label for="password">Password</label>
                <input type="password" name="pass1">
                <i class="far fa-eye"></i>
            </div>
            <div class="personal-info">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" name="pass2">
            </div>
        </div>
        <div class="submit">
             <input type="submit" value="Sign Up" name="submit">
        </div>
        <div class="support">
            <p>Already have account?<a href="login.php">Login</a></p>
        </div>
    </form>
    </div> 
<script src="assets/js/show-hide-pass.js"></script>  
</body>
</html>