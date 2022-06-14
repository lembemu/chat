<?php
    session_start();
    include "config.php";
    if(isset($_POST['send'])){
        $message = $_POST['message'];
        $sender_id = $_SESSION['unique_id'];
        $receiver_id = $_POST['to'];
        $date = date('Y/m/d');
        $time = date('h:i:sa');

        if($message != ''){
            $sql = "INSERT INTO `messages`(`msg_id`, `sender_id`, `receiver_id`, `message`, `date`, `time`) VALUES (null,".$sender_id.",".$receiver_id.",'{$message}','{$date}','{$time}')";

            $res = mysqli_query($conn,$sql);

            if(!$res){
                header("location:../CHAT/finbox.php?id=".$receiver_id);
            } else{
                header("location:../CHAT/finbox.php?id=".$receiver_id);
            }
            mysqli_close($conn);
        } else{
            header("location:../CHAT/finbox.php?id=".$receiver_id);
        }
    } else {
        header("location:../CHAT/finbox.php?id=".$receiver_id);
    }
    ?>