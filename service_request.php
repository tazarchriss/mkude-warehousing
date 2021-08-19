<?php 
    session_start();
    require_once('database.php');
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
<style>
    form::placeholder,label{
        text-align:right;
    } label{margin:2%;}
    input{
        height: 40px;
        width:60%;
        
    }
    select{
        height: 40px;
        width:60%;
        font-size: 24px;
    }
    td{
        width: 50%;
        align-items: flex-end;
    }
    table{
        vertical-align: middle
    }
</style>
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
     
  
        <br>
        <div class="cols-s-32 center">
        <?php
if (isset($_GET["request"])){
?>
<h3 style="color:white;background-color:brown;font-size:32px">SERVICE REQUEST HAS BEEN SUBMITED SUCCESSFULLY! </h3>
<?php
 }

?>

           <form method="POST" action="service_request_process.php">
            <legend>SERVICE REQUEST FORM</legend>
            <hr>
               <table width="100%">
                    <tr>
                        <td>
                            <label for="cname" id="cname">
                                Company Name: <br>
                                <input type="text" name="cname" id="cname" required >
                            </label>  
                        </td>
                        <td>
                              
                            <label for="cpn" id="cpn">
                            Contact Person Name: <br>
                             <input type="text" name="cpn" id="cpn" required>
                          </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email" id="email">
                                Email: <br>
                                <input type="email" name="email" id="email" placeholder="email" required>
                            </label>  
                        </td>
                    
                        <td>
                              
                            <label for="pqty" id="pnumber">
                            Phone: <br>
                             <input type="text" name="pnumber" id="pnumber" required>
                          </label>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label for="prod_name" id="prod_name">
                                What is the product that you want to store? <br>
                             
                                                            
                            <select name="prod_name" required>
	<?php
  $sql="select * from products ";
  $query=mysqli_query($conn,$sql);

  if(!$query){

  	die(mysqli_error($conn));
  }

  while ($result=mysqli_fetch_array($query)) {
  	$id=$result['id'];
  	$name=$result['prod_name'];
  	?>
 <option value="<?php echo $id; ?>">
 	<?php echo $name; ?>
 </option>

  	<?php


  }

	?>
	
</select>
                            </label>  
                        </td>
                    
                        <td>
                              
                            <label for="store_size" id="store_size">
                            What is the size are you product? <br>
                             <input type="text" name="store_size" id="store_size" placeholder="E.g 100" required>
                          </label>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label for="start_date" id="start_date">
                                Storage Start Date:
                                <input type="date" name="start_date" id="start_date" required>
                            </label> 
                        </td>
                        <td>
                            <label for="duration" id="duration">
                                Duration of storage required (In Days):
                                <input type="text" name="duration" id="duration" required>
                            </label>
                        </td>
                        </tr>
                    <tr>
                        <td >
                            <label for="pallet">
                                Are your products already palletized? <br>
                                <label id="yes1">
                                    <input type="radio" name="pallet" id="yes1" value="yes" style="width:auto;height: auto;">
                                    Yes
                                </label><br>
                                <label for="no1">
                                    <input type="radio" name="pallet" id="no1" value="no" style="width:auto;height: auto;">
                                    No
                                </label>
                            </label>
                        </td>
                        <td >
                            <label for="pick">
                                Do you require Pick-and-Pack services ?  <br>
                                <label id="yes2">
                                    <input type="radio" name="pick" id="yes2" value="yes" style="width:auto;height: auto;">
                                    Yes
                                </label><br>
                                <label for="no2">
                                    <input type="radio" name="pick" id="no2" value="no" style="width:auto;height: auto;">
                                    No
                                </label>
                            </label>
                        </td>
                    </tr>
                    
                  
                        <tr>
                            <td >
                                <label for="shipping">
                                    Do you require Shipping services ?  <br>
                                    <label id="yes3">
                                        <input type="radio" name="shipping" id="yes3" value="yes" style="width:auto;height: auto;">
                                        Yes
                                    </label><br>
                                    <label for="no3">
                                        <input type="radio" name="shipping" id="no3" value="no" style="width:auto;height: auto;">
                                        No
                                    </label>
                                </label>
                            </td>
                            <td>
                                <label for="store_type">
                          What is the type of store that you want?
                            <select name="store_type">
	<?php
  $sql="select * from store_type where status='available' ";
  $query=mysqli_query($conn,$sql);

  if(!$query){

  	die(mysqli_error($conn));
  }

  while ($result=mysqli_fetch_array($query)) {
  	$id=$result['id'];
  	$name=$result['store_name'];
  	?>
 <option value="<?php echo $id; ?>">
 	<?php echo $name; ?>
 </option>

  	<?php


  }

	?>
	
</select>
</lable>
                            </td>
                        </tr>
                   
               </table>
               <input type="submit" value="REQUEST" name="request" style="background-color: #192b3c;color: whitesmoke;width: 80%;text-align: center;">
    
            
            
            <br>
           </form>
           
            </div>
            <br>
            
        </div>
</body>
</html>
