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
            die();
        }
    }
    ?>
<?php

include_once "database.php";
$sql1 = "select * from users where id='$id'";
$query1 = mysqli_query($conn, $sql1);
if ($query1){
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
    <div class=" col-12 col-s-12 s-layout" style="width:80%;margin:auto;">
     
    <div class="request" style="width:80%">
<?php

if (mysqli_num_rows($query1) == 0){
   ?>
   <h1 style="color:green;text-align:center;">NO WORKERS AVAILABLE!</h1>
  <?php
  echo "<br>";
}

else{
   ?>
    <div class="prof">
        
        
        <?php
       for ($i=1; $i<=mysqli_num_rows($query1); $i++){
         $row = mysqli_fetch_array($query1);
            ?>
            
            <a href="profpic.php"><img src="uploads/<?php echo $row['File']?>" alt="upload profile picture"></a>
               <h1>First Name:<?php echo $row['fname']; ?></h1>
               <h1>Last Name:<?php echo $row['sname']; ?></h1>
               <h1>Email:<?php echo $row['email']; ?></h1>
               <h1>Address:<?php echo $row['address']; ?></h1>
               <h1>Salary:<?php echo $row['salary']; ?>TSH</h1>
                <br>
                <a href="changepass.php" ><button>UPDATE PROFILE</button></a>
                
                <a href="changepass.php"><button>CHANGE PASSWORD</button></a>
        <?php 
      }
      ?>
    </div>
    <?php

}


}

else {


  die(mysqli_error($conn));
}



mysqli_close($conn);
?>
</div>

</main>
        </div>
    
</body>

</html
