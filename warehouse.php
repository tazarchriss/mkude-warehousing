<?php
    include_once('database.php');
  
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
<body>
    <div class="header">
      <h1 id="nhead" style="text-align: left;">Mkude Warehouse 
         <a href="logout.php" class="signout"><i style="float: right;" class="fa fa-sign-out"></i></a>
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
         <h1 style="text-align: center;font-size: 42px; width:80%; height:50px; background-color: brown;color: whitesmoke;"> WAREHOUSE STATUS</h1>
            <div class="col-s-6 col-6 main">
               
  
                <div class="col-3 col-s-3 lpan">
                 <a href="cool.php" style="font-size:30px;">
                    
                   <p>COOL</p>
                   </a> 
             </div>
             
                <div class="col-2 col-s-2 lpan">
                    <a href="freezer.php" style="font-size:30px;">
                       
                      <p>FREEZER</p>
                      </a> 
                </div>
                <div class="col-2 col-s-2 lpan">
                  <a href="dry.php" style="font-size:30px;">
                  
                      <p>DRY</p>
                  </a>
              </div>
              <div class="col-2 col-s-2 lpan">
                  <a href="outside.php"style="font-size:30px;">
                      
                      <p>OUTSIDE</p>
                  </a>
              </div>
            
            </div>
        </main>
        <div class="col-s-6 col-6 main">
            <a href="">VIEW PRODUCTS</a>
            <a href="">VIEW EQUIPMENTS</a>

    </div>        
</body>
</html>
