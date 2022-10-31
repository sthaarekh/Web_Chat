<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="https://freesvg.org/img/abstract-user-flat-4.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <selection class="formlogin">
            <header>
                Login
            </header>
            <form action="#">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your Email" autocomplete="off">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" autocomplete="off">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Sign Up Now</a></div>
        </selection>
    </div>


<script src="js/login.js"></script>
<script>
const pswrdField1 = document.querySelector(".formlogin input[type='password']"),
showBtn1 = document.querySelector(".formlogin .field i");

showBtn1.onclick = () =>{
    if(pswrdField1.type === "password"){
    pswrdField1.type = "text";
    showBtn1.classList.add("active")
    }
    else{
    pswrdField1.type = "password";
    showBtn1.classList.remove("active")
    }
    }
</script>
</body>
</html>