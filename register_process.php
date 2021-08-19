<?php

require_once('database.php');

if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $Pnumber=$_POST['pnumber'];
    $address=$_POST['address'];
    $sex=$_POST['sex'];
    $start_date=$_POST['start_date'];
    $salary=$_POST['salary'];
    $dob=$_POST['dob'];
    $role=$_POST['role'];

   
//    query preparation
    $qry="INSERT INTO `users`( `fname`, `sname`, `email`, `pnumber`, `password`, `address`, `sex`, `start_date`, `salary`, `dob`, `status`, `role`) VALUES ('$fname','$sname','$email','$pnumber','$password','$address','$sex','$start_date','$salary','$dob','Available','$role' )";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }
     
    else
    {
   
   header('location:login.php');
 }
}
?>
