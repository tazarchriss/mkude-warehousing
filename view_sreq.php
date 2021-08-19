<?php

 
include_once "database.php";

$sql1 = "select * from service_requests WHERE req_id='".$_GET['req_id']."'";
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
    <title>dashboard</title>
</head>
<style>
    table,th,td{border:1px solid black;border-collapse: collapse;}
    th{background-color: brown;color: whitesmoke;height: 50px;}
    td{background-color:whitesmoke;height:50px;}
</style>
<body>
    <div class="header">
      <h1 id="nhead" style="text-align: left;">Mkude Warehouse 
         <a href="login.php" class="signout"><i style="float: right;" class="fa fa-sign-out"></i></a>
            <a href="#" class="signout"><i style="float: right;margin-right:2%;" class="fa fa-user"></i></a>
          <br>
          </h1>
          <div class="navbar">
             <a href="manager.php" id="nbar">HOME</a><a href="about.php" id="nbar">ABOUT</a> <a href="contact.php" id="nbar">CONTACT US</a>
          </div>
            
    </h1>
    </div>
    <div class="s-layout">
     
        <!-- Sidebar -->
        <div class="s-layout__sidebar">
          <a class="s-sidebar__trigger" href="#0">
             <i class="fa fa-bars"></i>
          </a>
        
          <nav class="s-sidebar__nav">
             <ul>
                <li>
                   <a class="s-sidebar__nav-link" href="manager.php">
                      <i class="fa fa-home"></i><em>Home</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="requests.php">
                     <i class="fa fa-database"></i><em>Requests</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="workers.php">
                      <i class="fa fa-group"></i><em>workers</em>
                   </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link" href="#0">
                       <i class="fa fa-calendar"></i><em>Schedules</em>
                    </a>
                 </li>
                 <li>
                    <a class="s-sidebar__nav-link" href="#0">
                       <i class="fa fa-sticky-note-o"></i><em>Reports</em>
                    </a>
                 </li>
                <li>
                    <a class="s-sidebar__nav-link" href="#0">
                       <i class="fa fa-cog"></i><em>Settings</em>
                    </a>
                 </li>
             </ul>
          </nav>
        </div>
        
        <!-- Content -->
        <main class="s-layout__content">
            <br>
         <h1 style="width: 50%; background-color: brown;color:whitesmoke;text-align:center;">LIST OF STORAGE REQUESTS</h1>
<br>
        
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
        <tr>
            <th>S/N</th>
            <th>Company Name</th>
            <th>Product Name</th>
            <th>Arrival Date</th>
            <th>Duration</th>
            <th>Storage type</th>
            <th>status</th>
            
        </tr>
        <?php
       for ($i=1; $i<=mysqli_num_rows($query1); $i++){
         $row = mysqli_fetch_array($query1);
         $name=$row['store_type'];
         $sql2 = "select * from store_type WHERE id='$name'";
         $query2 = mysqli_query($conn, $sql2);
         $row2 = mysqli_fetch_array($query2);
            ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $row['cname']; ?></td>
               <td><?php echo $row['prod_name']; ?></td>
               <td><?php echo $row['start_date']; ?></td>
               <td><?php echo $row['duration']; ?></td>
               <td><?php echo $row2['store_name']; ?></td>
               <td style="color:green;"><?php echo $row['status']; ?></td>
               
         </tr>
        <?php 
      }
      ?>
    </table>
    <br>
    <form action="" method="POST" style="margin:auto;">
        <input  style="width:28%;" type="submit" value="VIEW AVAILABILITY" name="view">
        <input style="width:28%;" type="submit" value=" TASK" name="task">
        <a href="viewtask.php"><input style="width:28%;" type="button" value="VIEW TASK"></a>
        
        
        </form>
    <div class="report" style="margin:auto;width:70%;background-color:brown;color:white;padding:10px;">
       <?php include('request_availability.php');?>
    </div>
  <br>
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

</html>
