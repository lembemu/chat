<?php
 session_start();
 include 'config.php';
 if(isset($_SESSION['unique_id'])){
    if(isset($_GET['id'])){
        $sender = $_GET['id'];
        $sql = "SELECT * FROM users WHERE u_id =".$sender;
        $res = mysqli_query($conn,$sql) or die("Unknown error:".mysqli_connect_error());
        $row = mysqli_fetch_assoc($res);
    } else {
        header("location:../CHAT/index.php");
    }   
 }else{
     header("location:../CHAT/login.php");
 }

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
    <title><?php echo $row['user_name']; ?> | COMPETENCY</title>
</head>
<body>
    <div class="header">
        <div class="profile">
            <a href="index.php" id="icon"><i class="fas fa-long-arrow-alt-left fa-2x" ></i></a>
            <div class="profile-info">
                <h4><?php echo $row['user_name']; ?></h4>
                <P><?php echo $row['user_status']; ?></P>
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
                <a href="logout.php?logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="message-container">
            <?php
                $sql = "SELECT * FROM messages";
                $res = mysqli_query($conn,$sql);
                $row2 = mysqli_fetch_assoc($res);

                if ($row2['message'] != ""){
                    
                    while($row2 = mysqli_fetch_assoc($res)){
                        if ($row2['sender_id'] == $sender && $row2['receiver_id'] == $_SESSION['unique_id']){

                            
                            echo '<div class="incoming-msg">';
                            echo '<img src="images/'.$row['user_pic'].'"alt="">';
                            echo '<p>'.$row2['message'].'</p>';
                            echo '</div>';
                        } elseif ($row2['sender_id'] == $_SESSION['unique_id'] && $row2['receiver_id'] == $sender) {
                            echo '<div class="outgoing-msg">';
                            echo '<p>'.$row2['message'].'</p>';
                            echo '</div>';
                        } else {
                            echo "";
                        }
                        
                    }

                } else {
                    echo "hello";
                    echo "<p>No messages start chat by sending messages</>";
                }
                
            ?>
            
        </div>
        <div class="typing-area">
            <form action="processing.php" method="post">
                <input type="text" name="message" placeholder="type your message" autofocus>
                <input type="text" name="to" value="<?php echo $sender;?>" hidden>
                <button type="submit" name="send"><i class="fas fa-paper-plane fa-2x"></i></button>
            </form>
        </div>
    </div> 
<script src="assets/js/menu.js"></script>
<script src="assets/js/close-menu-content.js"></script>
</body>
</html>