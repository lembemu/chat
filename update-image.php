<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
    <title>competency chat</title>
</head>
<body>
    <div class="container">
    <form action="upload-image.php" class="form1" method ="POST" enctype = "multipart/form-data">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="security">
                <h4>Set your favourable <b>Image</b></h4>
           </div>
        <div class="personal-info">
             <label for="profileImg">Select Image</label>
             <input type="file" name ="image" id ="image">
        </div>
        <div class="submit">
             <input type="submit" name ="set" value="Set">
        </div>
    </form>
    </div>  
</body>
</html>