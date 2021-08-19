<?php
session_start();
 $id=$_SESSION['id'];
 $name=$_SESSION['fname'];
include_once "database.php";
$sql1 = "select * from task WHERE workers='$name' limit 1 ";

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
         <h1 style="font-size:32px;width:80%; background-color: brown;color:whitesmoke;text-align:center;"> TASKS IN THE WAREHOUSE</h1>
<br>
        
<div class="request">
<?php

if (mysqli_num_rows($query1) == 0){
   ?>
   <h1 style="color:green;text-align:center;">NO TASK AVAILABLE!</h1>
  <?php
  echo "<br>";
}

else{
   ?>
    <table width="90%">
        <tr>
            <th>S/N</th>
            <th>Task Date</th>
            <th>Company Name</th>
            <th>Quantity</th>
            <th>Supervisor</th>
            <th>Equipments</th>
            <th>Store Type</th>
            <th>view</th>
            
        </tr>
        <?php
       for ($i=1; $i<=mysqli_num_rows($query1); $i++){
         $row = mysqli_fetch_array($query1);
            ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $row['task_date']; ?></td>
               <td><?php echo $row['cname']; ?></td>
               <td><?php echo $row['qty']; ?></td>
               <td><?php echo $row['workers']; ?></td>
               <td><?php echo $row['equipments']; ?></td>
               <td><?php echo $row['store_type']; ?></td>
               <td><a href="view_stask.php?id=<?php echo $row['id'];?>"><i class="fa fa-eye" style="font-size:20px;padding:10px;" ></i></a></td>
               
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

</main>
        </div>
    
</body>

</html
