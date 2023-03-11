<!DOCTYPE html>

<html>
     
	 <head>
          <title> Contact </title>
          <?php 
             include'includes/header.php';
           ?>
           <link rel="stylesheet" type="text/css" href="css\style2.css">
     </head>


<body style="background-color: #3551b5";>
<br><br><br><br><h2 style="text-align:center;font-size: 30px; color: aliceblue;"> Contact Us On </h2>

<div class="hero">
  
<form>
  <div class="row">
    <div class="input-group">
    <input type="text" id="name" required>
    <label for="name"><i class="fa-solid fa-user"></i> Your Name</label>
  </div>

    <div class="input-group">
    <input type="text" id="number" required>
    <label for="number"><i class="fa-solid fa-phone"></i> Phone No</label>
  </div>
  </div>

    <div class="input-group">
    <input type="email" id="email" required>
    <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
  </div>

    <div class="input-group">
    <textarea id="message" rows="8" required></textarea>
    <label for="message"><i class="fa-solid fa-comments"></i> Your Message</label>
  </div>
<button type="submit">Submit <i class="fa-solid fa-paper-plane"></i></button>
</form>

</div>
           

           <p style="text-align:center; font-weight:bold; font-size: 20px;">E-mail-Id : sivaranjani.s628123@gmail.com</p><br>
           <?php 
             include'includes/footer.php';
           ?>
           

     </body>

</html>