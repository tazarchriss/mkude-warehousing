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
      <h1 id="nhead" style="text-align: left;">Mkude Warehouse 
      <a href="login.html" class="signout"style="font: size 24px;"><i style="float: right;" class="fa fa-sign-in">SIGN IN</i></a>
       <br>
       </h1>
       <div class="navbar">
          <a href="index.html" id="nbar">HOME</a><a href="about.html" id="nbar">ABOUT</a> <a href="contact" id="nbar">CONTACT US</a>
       </div>
      
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
                   <a class="s-sidebar__nav-link" href="manager.html">
                      <i class="fa fa-home"></i><em>Home</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="inventory.html">
                     <i class="fa fa-database"></i><em>Inventory</em>
                   </a>
                </li>
                <li>
                   <a class="s-sidebar__nav-link" href="#0">
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
          <div class="col-s-32 main">
              <h1 >Inventory Management</h1>
              <div class="col-3 col-s-3 nav">
                  <a href="receive.html">
                      <i style="font-size:80px;" class="fa fa-cart-arrow-down"></i>
                    <p>REQUESTS</p>
                    </a>
              </div>
              <div class="col-3 col-s-6 nav">
                <a href="">
                    <i style="font-size:80px;" class="fa fa-truck"></i>
                    <br>
                    <p>PACKING</p>
                </a>
            </div>
            <div class="col-3 col-s-3 nav">
                <a href="">
                    <i style="font-size:80px;" class="fa fa-ship"></i>
                    <br>
                    <p>SHIPPING</p>
                </a>
            </div>
            <div class="col-3 col-s-3 nav">
                <a href="">
                    <i style="font-size:80px;" class="fa fa-truck"></i>
                    <br>
                    <p>DELIVERING</p>
                </a>
            </div>
          </div>
        </main>
        </div>
</body>
</html>
