<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" type="text/css" href="assets/css/style.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>LOGIN | COMPETENCY</title>
</head>
<body>
    <div class="container">
    <form class="form1" action="log-in.php" method="post" >
        <?php
            if(isset($_GET['error'])){
                echo "<p class='error' style='background-color: red;color: white;padding: 10px;width: 100%;text-align:center;font-weight: bold;'>";
                $error = $_GET['error'];
                if($error == 'emptyFields'){
                    echo "Please fill in all fields!";
                } elseif ($error == 'loginFailed') {
                    echo "Login failed! Try again.";
                } elseif ($error == 'wrongInputs') {
                    echo "Incorrect username or password!!";
                } else {
                    echo'';
                }
                echo "</p>";
            }
        ?>

        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="security">
            <h4>Competency | <strong>Login</strong></h4>
        </div>
        <div class="personal-info">
            <label for="username" >Username</label>
            <input type="text" name="username">
        </div>
        <div class="personal-info">
             <label for="password">Password</label>
             <input type="password" name="password">
             <i class="far fa-eye"></i>
        </div>
        <div class="submit">
             <input type="submit" name="login" value="Log In" >
        </div>
        <div class="support">
            <a href="forget-password.html">Forgot password?</a>
            <p>Don't have account?<a href="signup.php">Create Account</a></p>
        </div> 
    </form>
    </div>
<script src="assets/js/show-hide-pass.js"></script>  
</body>
</html>