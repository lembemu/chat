<?php
    session_start();
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/finbox.css">
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <script src="assets/js/jQuery.js"></script>
    <title>competency chat</title>
</head>
<body>
    <div class="header">
        <div class="profile">
            <a href="index.php?success" id="icon"><i class="fas fa-long-arrow-alt-left fa-2x" ></i></a>
            <div class="profileImg">
                <img src="images/iweyo.jpg" alt="">
            </div>
            <div class="profile-info">
                <h4>PROGRAMMING</h4>
                <P>25 members</P>
            </div>
        </div>
        <div class="menu">
            <div class="menu-btn" onclick="changeMenu(this); showMenu();">
                <div id="bar1"></div>
                <div id="bar2"></div>
                <div id="bar3"></div>
            </div>
            <div class="menu-content" id="menu">
                <a href="javascript:void()" class="closebtn" onclick="close()">&times;</a>
                <hr style="border-color: transparent">
                <a href=""><i class="fas fa-user-edit"></i> Edit Profile</a>
                <a href=""><i class="fas fa-user-plus"></i>Add friend</a>
                <a href=""><i class="fas fa-cog"></i>Settings</a>
                <hr>
                <a href="login.html"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="message-container">
            <div class="incoming-msg">
                <img src="images/iweyo.jpg" alt="">
                <p>hi bro</p>
            </div>
            <div class="outgoing-msg">
                <p>hello breda</p>
            </div>
            <div class="incoming-msg">
                <img src="images/iweyo.jpg" alt="">
                <p>Ase kodi mawa uvaya ku geri?</p>
            </div>
            <div class="outgoing-msg">
                <p>aaaaa mwina anbnbcskdfd hsjldmjhghsjdkflg jhgehjkcnvbbc ddkjhjklsjhjbnc hjskjhjskd kjshjjhjkshjd jksjkdhjfksns ksjhdjkcs skjhdjkscjhs kjhgdhjksdsjbk </p>
            </div>
        </div>
        <div class="typing-area">
            <form action="">
                <input type="text" placeholder="type your message" autofocus>
                <input type="file" name="" id="" size=10 >
                <button><i class="fas fa-paper-plane fa-2x"></i></button>
            </form>
        </div>
    </div>
<script src="assets/js/menu.js"></script>
<script src="assets/js/close-menu-content.js"></script>  
</body>
</html>