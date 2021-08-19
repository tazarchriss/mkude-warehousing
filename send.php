<?php

require_once('database.php');
$name=$_POST['name'];
$cname=$_POST['cname'];
$email=$_POST['email'];
$message=$_POST['message'];
if(isset($_POST['send']))
{
   
  
   
//    query preparation
    $qry="INSERT INTO `messages`( `name`, `cname`, `email`, `mesage`) VALUES( '$name', '$cname', '$email', '$message')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }
     
    else
    {
   
   header('location:contact.php?request=1');
 }
}
?>
