<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <div class="header">
        <h1 id="nhead" style="text-align: left;">Mkude Warehouse 
        
         <br>
         </h1>
         <div class="navbar">
            <a href="index.php" id="nbar">HOME</a><a href="about.php" id="nbar">ABOUT</a> <a href="contact.php" id="nbar">CONTACT US</a>
         </div>
        
      </div>
    <main>
        <div class="col-24 col-s-12 form">
           <form class="login" action="verification.php" method="POST">
              
               <legend>LOG IN TO PROCEED</legend>
               <br>
               <label for="email"><i style="font-size: 30px;" class="fa fa-user"></i></label>
               <input type="email" name="email" placeholder="email">
               <br>
               <label for="password"><i style="font-size: 30px;" class="fa fa-lock"></i></label>
               <input type="password" name="password" placeholder="password">
               <br>
               <!-- <label for="submit"><i style="font-size: 30px;" class="fa fa-sign-in" hidden></i></label> -->
               <input type="submit" value="LOGIN" name="login" style="background-color: #192b3c;color: whitesmoke;margin-left:6%;">
               <br>
               <?php
if (isset($_GET["request"])){
?>
<h4 style="color:white;background-color:brown;font-size:32px">  'wrong username or password'</h4>
<?php
 }

?>
<br>
               <a href="fpass.php">Forgot password or email!</a>
           </form>
          </div>
    </main>

    
    
</body>
</html>
