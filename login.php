<!DOCTYPE html>
<head>
<title>Login Form Design</title>
<link rel="stylesheet" type="text/css" href="style.css">
      <link rel="icon" href="images/photos.png">
      <?php 
        include'includes/header.php';
     ?>
    <script type="text/javascript" src="javascript.js"></script>
</head>
<body>


    <div class="box">
    <img src="images/user.png" class="user">
        <h1>Login Here</h1>

        <form name="myform1" onsubmit="return vfun()">

            <p style="text-align: left;">Username</p>
            <input type="text" name="uname" placeholder="Enter Username">

            <p style="text-align: left;">Password</p>
            <input type="password" name="upswd" placeholder="Enter Password">

             <div id="errorBox"></div>
            <input type="submit" name="" value="Login">

            <br><br>
            <a href="register.php">Register for new account ?</a>

        </form><br>
      
    </div> <br>   
</body>
</html>
