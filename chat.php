<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime chat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="chat.css">
    <link rel="icon" href="icons/users.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <?php
    session_start();
    include_once "php/config.php";
    if(!isset($_SESSION['unique_id'])){
      header("location: login.php");
    }
    ?>
</head>
<body>
    <div class="wrapper-c">
        <selection class="chat">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <?php
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                    if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                    }else{
                      header("location: users.php");
                    }
                ?>
                    <img src="php/images/<?php echo $row['img'] ?>" >
                    <div class="details">
                        <span><?php echo $row['fname']." ". $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
            </header>
            <DIV class="chat-box">
                    
            </DIV>
            <form action="#" class="typing-area">
                <input type="text" value="<?php echo $_SESSION['unique_id']; ?>" name = "outgoing_id" hidden>
                <input type="text" value="<?php echo $user_id; ?>" name = "incoming_id" hidden>
                <input type="text" name = "message" class="input-field" placeholder="Message" autocomplete="off">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </selection>
    </div>
<script src="js/chat.js"></script>    
</body>
</html>