<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Users</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="icon" href="icons/users.png">
    <?php
    session_start();
    include_once "php/config.php";
    if(!isset($_SESSION['unique_id'])){
      header("location: login.php");
    }
    ?>
</head>
<body>
    <div class="wrapper">
        <selection class="users">
            <header>
            <?php
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id ={$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql)>0){
                $row = mysqli_fetch_assoc($sql);}
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" >
                    <div class="details">
                        <span><?php echo $row['fname']." ". $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                    <span class="text">Select an user to chat</span>
                    <input type="text" placeholder="Enter name to search..">
                    <button><!-- <i class="fas fa-search"> --> </i></button>
            </div>
            <div class="users-list">
                              
            </div>
        </selection>
    </div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/users.js"></script>
</body> 
</html>