<?php

 
include_once "database.php";

$sql1 = "select * from messages WHERE id='".$_GET['req_id']."'";
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
         <a href="login.html" class="signout"><i style="float: right;" class="fa fa-sign-out"></i></a>
            <a href="#" class="signout"><i style="float: right;margin-right:2%;" class="fa fa-user"></i></a>
          <br>
          </h1>
          <div class="navbar">
             <a href="index.html" id="nbar">HOME</a><a href="about.html" id="nbar">ABOUT</a> <a href="contact.html" id="nbar">CONTACT US</a>
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
                   <a class="s-sidebar__nav-link" href="warehouse.php">
                     <i class="fa fa-database"></i><em>Warehouse</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="requests.php">
                     <i class="fa fa-sign-in"></i><em>Requests</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="messages.php">
                      <i class="fa fa-envelope"></i><em>messages</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="workers.php">
                      <i class="fa fa-group"></i><em>workers</em>
                   </a>
                </li>
              
                 <li>
                    <a class="s-sidebar__nav-link" href="#0">
                       <i class="fa fa-sticky-note-o"></i><em>Reports</em>
                    </a>
                 </li>
                <li>
                    <a class="s-sidebar__nav-link" href="settings.php">
                       <i class="fa fa-cog"></i><em>Settings</em>
                    </a>
                 </li>
             </ul>
          </nav>
        </div>
        <!-- Content -->
        <main class="s-layout__content">
            <br>
        
<br>
        
<div class="request">
<?php

if (mysqli_num_rows($query1) == 0){
  echo "NO MESSAGE TO VIEW.";
  

?>


<?php

}

else{
   ?>
    <div class="message">
      
        <?php
       for ($i=1; $i<=mysqli_num_rows($query1); $i++){
         $row = mysqli_fetch_array($query1);
            ?>
            <tr>
               
               <div style="background-color:brown;color:white;width:80%;font-size:23px;padding:10px;border-radius:5%;">
               <h3>sender:<?php echo $row['name']; ?></h3>
               <h3>sender:<?php echo $row['email']; ?></h3>
               <h3>company Name:<?php echo $row['cname']; ?></h3>
               <br>
               <h4 style="background-color:white;color:black;padding:2%;width:60%"><?php echo $row['mesage']; ?></h4>
                <a href="reply.php"><button style="font-size:30px;text-align:center;margin:2%">Reply</button></a>   
            </div>
               
         </tr>
        <?php 
      }
      ?>
    </div>
    <br>
  
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
