<?php

require_once('database.php');

if(isset($_POST['request']))
{
    $cname=$_POST['cname'];
    $cpn=$_POST['cpn'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $prod_name=$_POST['prod_name'];
    $store_size=$_POST['store_size'];
    $start_date=$_POST['start_date'];
    $duration=$_POST['duration'];
    $pallet=$_POST['pallet'];
    $pick=$_POST['pick'];
    $ship=$_POST['shipping'];
    $store_type=$_POST['store_type'];

   
//    query preparation
    $qry="INSERT INTO `service_requests`( `cname`, `cpn`, `email`, `pnumber`, `prod_name`, `store_size`, `start_date`, `duration`, `pallet`, `pick`, `ship`, `store_type`, `status`) VALUES( '$cname', '$cpn', '$email', '$pnumber', '$prod_name', '$store_size', '$start_date', '$duration', '$pallet', '$pick', '$ship', '$store_type', 'pending')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }
     
    else
    {
   
   header('location:service_request.php?request=1');
 }
}
?>
