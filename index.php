<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="icons/index.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta property="og:title" content="Web | Chat">
    <meta property="og:description" content="Arekh Shrestha">
    <meta property="og:image" content="icons/preview.jpeg">
    <meta property="og:url" content="https://arekhshrestha.com.np">
    <meta property="twitter:card" content="summary_large_image">

</head>
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<body>
    <div class="wrapper">
        <selection class="formsup">
            <header>
                Sign Up
                <br>
                
            </header>
            <p class="iqe">It's quick and easy.</p>
            <form action="#" enctype=""multipart/form-data" autocomplete="off">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First name</label>
                        <input type="text" placeholder="First Name" name="fname" required >
                    </div>
                    <div class="field input">
                        <label>Last name</label>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter your Email" name="email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter your password" name="password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field Image">
                        <label>Select Image</label>
                        <input type="file"name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </selection>
    </div>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/signup.js"></script>

</body>
</html>