<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="icon" href="images/photos.png">
      <script type="text/javascript" src="javascript.js"></script>
      <?php 
        include'includes/header.php';
     ?>
</head>
<body>
    <div class="box">
    <img src="images/user.png" class="user" width="20%" height="30%">
     <h1>Register Here</h1><br>
        <form name="myform2" action="server.php" method="POST">

            <p style="text-align: left;">Username</p>
            <input type="text" name="uname1" placeholder="Enter Username" required="">

            <p style="text-align: left;">Email</p>
            <input type="Email" name="email" placeholder="Enter email id" required="">

            <p style="text-align: left;">Password</p>
            <input type="password" name="upswd1" placeholder="Enter Password" required="">

            <p style="text-align: left;">Retype Password</p>
            <input type="password" name="upswd2" placeholder="Re-Enter Password" required="">
            
            <br><input type="submit" name="" value="Register"><br>
            <a href="login.php">Existing User, Login !?</a></br>
        </form><br>
 </div>
</body>
</html>
 