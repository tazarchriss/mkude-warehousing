<?php
    session_start();
    $id=$_SESSION['id'];
    $name=$_SESSION['fname'];
    $sname=$_SESSION['sname'];
    
    if (!isset($_SESSION['id'])) {
        header("location:login.php");
    }
    else {
        if ($id=="1") {
            header('Location:manager.php');
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
    <div class="s-layout">
     
        <div class="prof">
            <div id="img">
                <img src="prof.png" style="border-radius: 100%;">
                <br>
            </div>
            <h2><?php echo $name." ".$sname;?></h2>
        </div>
        <br>
        <div class="col-s-12 col-12 cente" style="text-align:center;margin:10%;margin-top:0px;">
       
              <div class="col-4 col-s-4 pan">
                  <a href="mytask.php">
                    <p>MY TASKS</p>
                    </a>
              </div>
              <div class="col-4 col-s-4 pan">
                <a href="attendance.php"> 
                    <p>ATTENDANCE</p>
                </a>
            </div>
            <div class="col-4 col-s-4 pan">
                <a href="wreq.php">
                    <p>REQUEST</p>
                </a>
            </div>
            <div class="col-4 col-s-4 pan">
                <a href="eprofile.php">
                    <p>MY PROFILE</p>
                </a>
            </div>
            </div>
            <br>
            
        </div>
</body>
</html>
