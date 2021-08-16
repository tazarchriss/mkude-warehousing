<?php
session_start();
 $id=$_SESSION['id'];
 $name=$_SESSION['fname'];
include_once "database.php";
$sql1 = "select * from task WHERE workers='$name' limit 1 ";

$query1 = mysqli_query($conn, $sql1);

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    table,th,td{border:1px solid black;border-collapse: collapse;}
    th{background-color: brown;color: whitesmoke;height: 50px;}
    td{background-color:whitesmoke;height:50px;}
</style>
    <title>Inventory</title>
</head>
<body>
    <div class="header">
        <h1 id="nhead" style="text-align:left;">Mkude Warehouse 
            <a href="logout.php" class="signout"><i style="float: right;" class="fa fa-sign-out">SIGN OUT</i></a>
            
    </h1>
    <div class="navbar">
        <a href="employee.php" id="nbar">HOME</a><a href="about.php" id="nbar">ABOUT</a> <a href="contact.php" id="nbar">CONTACT US</a>
     </div>
    </div>
     
        <!-- Content -->
        <main class="s-layout__content">
            <br>
         <h1 style="font-size:32px;width:80%; background-color: brown;color:whitesmoke;text-align:center;"> CHANGE PASSWORD</h1>
<br>
        
<div class="request">
<form class="login-form" action="forgot.php" method="POST">
  <div class="login-wrap">

      <input type="password" class="form-control" placeholder="New Password" name="pass1" required>
   
   <br>
      
      <input type="password" class="form-control" placeholder="Confirm New Password" name="pass2" required>
  
   <br>
    <input type="submit" value="CHANGE PASSWORD" name="save" style="background-color: #192b3c;color: whitesmoke;width: 80%;text-align: center;">

</form>
</div>

</main>
        </div>
    
</body>

</html>
