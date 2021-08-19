<?php
    session_start();
    $id=$_SESSION['id'];
    $name=$_SESSION['fname'];
    $sname=$_SESSION['sname'];
    
    if (!isset($_SESSION['id'])) {
        header("location:login.php");
    }
    else {
        if (!$id=='1') {
            header('Location:employee.php');
            die();
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
    <script src="main.js"></script>
    <title>dashboard</title>
</head>
<body>
    <div class="header">
      <h1 id="nhead" style="text-align: left;">Mkude Warehouse 
         <a href="logout.php" class="signout"><i style="float: right;" class="fa fa-sign-out"></i></a>
            <a href="viewprofile.php" class="signout"><i style="float:right;margin-right:2%;" class="fa fa-user"></i></a>
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
                    <a class="s-sidebar__nav-link" href="viewtask.php">
                       <i class="fa fa-sticky-note-o"></i><em>Task</em>
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
        <h2 style="text-align:center;background-color:brown;color:whitesmoke;font-size:34px;">WAREHOUSE PERFORMANCE</h2>
         <div class="col-32 col-s-32 stats">
         <style type="text/css">
.bar
{
    background-color:gold;
    text-align:left;
    /* position: relative; */
    height: 50px;
    margin-top: 8px;
    margin-bottom: 8px; 
}
</style>

<div id="barcontainer" style="width:60%;float:left;">

   <div class="requests" style="background-color:gray;">
      <h2 style="text-align:center;background-color:brown;color:whitesmoke;">REQUESTS STATUS</h2>
      <div class="storage">
         TOTAL REQUESTS:100
         <div class="bar" style="width:89%;background-color:lightblue;"></div>
</div>
        <div class="pending">
        PICKING REQUESTS:52
         <div id="bar2" class="bar" style="width:45%;background-color:lightblue;"></div>
        </div> 
        <div class="pending">
        SHIPPING REQUESTS:32
         <div id="bar2" class="bar" style="width:86%;background-color:lightblue;"></div>
        </div> 
     <div style="clear:both;"></div>
   </div>
   <div class="requests" style="background-color:gray;">
      <h2 style="text-align:center;background-color:brown;color:whitesmoke;">STORE STATUS</h2>
      <div class="storage">
         COOL:90%
      <div id="bar2" class="bar" style="width:90%;background-color:lightblue;"></div>
</div>
        <div class="pending">
        FREEZER: 66%
         <div id="bar2" class="bar" style="width:66%;background-color:lightblue;"></div>
        </div> 
        <div class="pending">
        DRY:79%
         <div id="bar2" class="bar" style="width:79%;background-color:lightblue;"></div>
        </div> 
     <div style="clear:both;"></div>
   </div>
   </div>
   

<div class="right" style="float:right;width:38%;background-color:purple;height:20px;">
<h2 style="text-align:center;background-color:brown;color:whitesmoke;">REVENUES</h2>
</div>
</div>
</div>
        </main>
        </div>
</body>
</html>
