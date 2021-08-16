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
        <a href="login.php" class="signout"style="font: size 24px;"><i style="float: right;" class="fa fa-sign-in">SIGN IN</i></a>
         <br>
         </h1>
         <div class="navbar">
            <a href="index.php" id="nbar">HOME</a><a href="about.php" id="nbar">ABOUT</a> <a href="contact.php" id="nbar">CONTACT US</a>
         </div>
        
      </div>
    <div class="s-layout">
   
     <div class="header">
        
        </div>
        <div class="col-12 col-s-12 intro" align="center" >
            <h1 style="font-size: 32px; background-color: brown;color: aliceblue;">CONTACT US</h1>
       <div class="col-6 col-s-6 address" style="text-align: left;color: whitesmoke;background-color: #192b3c;">
           <p>
            1005 kawe Street, Dar es salaam,Tanzania <br>

            Phone: 255-3245-2331 <br>
            Toll-Free: 1-866-560-2511 <br>
            Fax: 250-860-0797 <br>
            <br>
            enquiries@mkudewarehousing.com
            
            pgrewal@mkudewarehousing.com
           </p><br>
       </div>
       <div class="col-6 col-s-6 address" style="text-align: left;color: whitesmoke;background-color: #192b3c;">
        <h3>Office Hours:</h3>

           <p> Monday to Friday: 7:30 a.m. to 5:00 p.m. EAT</p>
        <h3>Shipping/Receiving Hours:</h3>
<br>
        <p>Monday to Friday: 7:30 a.m. to 5:00 p.m. EAT</p>
        <p>Last Loading Time: 4:30PM EAT</p>

        <br>

    </div>
    
    <hr>
    <div class="col-10 col-s-10 intouch" style="text-align: left;">
        <form action="send.php" method="POST" style="background-color: rgb(195, 111, 111);padding: 20px;">
            <legend>GET IN TOUCH</legend>
            <label for="name" style="font-size:18px;">
            <?php
if (isset($_GET["request"])){
?>
<h3 style="color:white;background-color:brown;font-size:32px ">MESSAGE HAS BEEN SENT SUCCESSFULLY! </h3>
<?php
 }

?>
<br>
                Name: </label><br>

                <input type="text" name="name" id="name"> <br>
                <label for="cname" style="font-size:18px;">
                    Company Name: </label><br>
    
                    <input type="text" name="cname" id="name">
                    <br>
                    <label for="email" style="font-size:18px;">
                        Email: </label><br>
        
                        <input type="text" name="email" id="email">
                    <br>
                    <label for="message" style="font-size:18px;">What can we help with?</label>
                    <br>
                    <textarea name="message" id="message" cols="70" rows="10"></textarea>
                    <br>
                    <input type="submit" value="SUBMIT"  style="background-color: #192b3c;color: whitesmoke;" name="send" >
              
          
        </form>
    </div>
   
         
         <div style="clear: both;"></div>
        </div>
</body>
</html>
