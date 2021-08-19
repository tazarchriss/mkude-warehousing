<?php

 
include_once "database.php";

$sql1 = "select * from products ";
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
    <style>
    table,th,td{border:1px solid black;border-collapse: collapse;}
    th{background-color: brown;color: whitesmoke;height: 50px;}
    td{background-color:whitesmoke;height:50px;}
</style>
</head>
<body>
    <div class="header">
        <h1 id="nhead" style="text-align: left;">Mkude Warehouse 
        <a href="login.php" class="signout"style="font: size 24px;"><i style="float: right;" class="fa fa-sign-in">SIGN IN</i></a>
         <br>
         </h1>
         <div class="navbar">
            <a href="index.php" id="nbar">HOME</a><a href="about.php" id="nbar">ABOUT</a> <a href="contact.php" id="nbar">CONTACT US</a>
         </div>
        
      </div>
    <div class="s-layout">
     <div class="top" style="height:420px;">
        <img src="home.jpg" alt="" id="hpic">
     </div>
     <div class="header">
        <marquee behavior="" direction="righ" style="font-size: 24px;">Welcome to Mkude Warehouses</marquee>
        </div>
        <div class="col-12 col-s-12 intro" align="center">
         <div class="col-12 col-s-12 services" style="background-color:#192b3c ;color: aliceblue;">
            <h1>MKUDE WAREHOUSING SERVICES</h1>
            <p>Mkude Warehousing is a full-service warehouse that offers complementary custom storage solutions.</p> <br>
            <a href="service_request.php"><button style="color:whitesmoke;height: 50px;border:1px solid  rgb(209, 94, 94);background-color:#192b3c;">CLICK TO REQUEST SERVICE</button></a>
         </div>
           <div class="col-6 col-s-6 itm">
              <h2 >FULL-SERVICE WAREHOUSE</h2>
              
              <p style="text-align: center;"><img src="cert.jpg" alt="" > <br>
               We offer a full-service warehouse as well as a variety of complementary custom storage solutions.</p>
        </div>
    
        <div class="col-6 col-s-6 itm">
         <h2 >CONVENIENT LOCATION</h2>
         
         <p style="text-align: center;"><img src="location.jpg" alt="" > <br>
            Mkude Warehousing is located in Dar es salaam,Tanzania, the largest urban centre between Kawe and Mbezi.</p>
   </div>
        <div class="col-s-12 col-12 main2">
           
           <div class="col-2 col-s-2 right">
            <h2 style="background-color: brown;color: aliceblue;">COOLER STORAGE </h2>
              <img src="cool.jpg" alt="" style="height: 40%;width: 100%;">
            
            <P>
               Mkude Warehousing offers several cooler storage options, ranging from 500 to 8,000 square feet.

            </P>
         </div>
          
         <div class="col-2 col-s-2 right">

            <h2 style="background-color: brown;color: aliceblue;">DRY STORAGE</h2>
            <img src="dry.jpg" alt=""style="height: 40%;width: 100%;">
            <P>With 100,000 square feet of dry storage space, our modern facility can handle all of your storage requirements.</P>
         </div>
         <div class="col-2 col-s-2 right">
            <h2 style="background-color: brown;color: aliceblue;">FREEZER STORAGE</h2>
            <img src="freezer.jpeg" alt="" style="height: 40%;width: 100%;">
            <p> 

               Fripp Warehousing can handle all your frozen goods in our 10,000 sq. ft. freezer space.</p>
         </div>
         <div class="col-2 col-s-2 right">
            <h2 style="background-color: brown;color: aliceblue;">OUTSIDE STORAGE</h2>
            <img src="outside.jpg" style="height: 40%;width: 100%;">
            <p>We offer outdoor storage space in our fenced, 2-acre property with high security.</p>
         </div>
         <div style="clear: both;"></div>
         <div class="request">
<?php

if (mysqli_num_rows($query1) == 0){
  echo "No parking spot has been registered.";
  echo "<br>";

?>
<a href="parking_registration.php">Register a parking spot</a>

<?php

}

else{
   ?>
    <table width="90%">
       <legend style="background-color:brown;color:white;">LIST OF PRODUCTS THAT WE STORE WITH THEIR PRICE PER DAY</legend>
        <br>
       <tr>
            <th>S/N</th>
            <th>Product Name</th>
            <th>Price Per Day</th>
            <th>Product Min</th>
            <th>Product Max</th>
            
            
        </tr>
        <?php
       for ($i=1; $i<=mysqli_num_rows($query1); $i++){
         $row = mysqli_fetch_array($query1);
            ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $row['prod_name']; ?></td>
               <td><?php echo $row['prod_price']; ?></td>
               <td><?php echo $row['prod_min']; ?></td>
               <td><?php echo $row['prod_max']; ?></td>
               
               
         </tr>
        <?php 
      }
      ?>
    </table>
    <?php

}


}

else {


  die(mysqli_error($conn));
}



mysqli_close($conn);
?>
</div>
        </div>
</body>
</html>
