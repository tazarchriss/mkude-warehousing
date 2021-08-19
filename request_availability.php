<?php
    session_start();
    require_once('database.php');
    $uid=$_SESSION['id'];
  
   
    $select="SELECT * FROM service_requests WHERE req_id='".$_GET['req_id']."'";
    $result=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($result);
    $start_date=$row['start_date'];
    $prod_namme=$row['prod_name'];
    $s_type=$row['store_type'];
    $qty=$row['store_size'];
    $pick=$row['pick'];
    $ship=$row['ship'];
    $duration=$row['duration'];
    $co_name=$row['cname'];
    // For storage type
    $select1="SELECT * FROM store_type WHERE id='$s_type'";
    $result1=mysqli_query($conn,$select1);
    $row1=mysqli_fetch_array($result1);
    $store_name=$row1['store_name'];
    $capacity=$row1['capacity'];
    $remaining=$row1['remaining'];
    $used=$row1['used'];

    $rem0=$remaining-$qty;
    $rem1=$remaining+$qty;
    $us1=$used+$qty;
    $us2=$used-$qty;
    //For checking workers availability
    $select2="SELECT * FROM users WHERE status='available' AND role='3'";
    $result2=mysqli_query($conn,$select2);
    $row2=mysqli_fetch_array($result2);
    $fname=$row2['fname'];
    $role=$row2['role'];
    $no_of_workers=mysqli_num_rows($result2);
    // for products
    $select3="SELECT * FROM products";
    $result3=mysqli_query($conn,$select3);
    $row3=mysqli_fetch_array($result3);
    $price=$row3['prod_price'];
        // for products
        $select4="SELECT * FROM equipments";
        $result4=mysqli_query($conn,$select4);
        $row4=mysqli_fetch_array($result4);
        $eq_name=$row4['eq_name'];
    
    

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
   
  

<?php
    if(isset($_POST['view'])){

        // checking is the quantity requested can be stored 
    
        if ($qty<$remaining) {
            $status='available';
        }
        else{
            $status='not available';
        }
    
?>
    <h1>REQUEST AVAILABILITY REPORT</h1>
    <hr>
    <h2>Task Date:<?php echo $start_date;?></h2>
    <h2>Storage Type: <?php echo $store_name;?></h2>
    <h2>Product Name: <?php echo $prod_namme;?></h2>
    
    <h2>No of  Workers: <?php echo $no_of_workers;?></h2>
    <h2>Status: <i  style="color:green"><?php echo $status?></i> </h2>
<?php
    }?> 



<?php if (isset($_POST['task'])) {
     $task_date=$start_date;
     $cname=$co_name;
     $workers=$fname;
     $equipments=$eq_name;
     $store_nam=$store_name;
     $qty=$qty;
     $duration=$duration;
     $bill=$duration*$price;
     $rem0=$rem0;
     $us1=$us1;
     $us2=$us2;
     if ($qty<$remaining) {
        $status='available';
    }
    else{
        $status='not available';
    }
    
 if($status=='available'){

   
 //    query preparation
 $qry4="INSERT INTO `task`(`cname`, `task_date`, `workers`, `equipments`, `store_type`, `qty`, `duration`, `bill`) VALUES ('$cname', '$task_date', '$workers', '$equipments', '$store_nam', '$qty', '$duration', '$bill')";
 $qry5="UPDATE users SET status='not available' WHERE id='$uid'";
 $qry6="UPDATE service_requests SET status='processed' WHERE req_id='".$_GET['req_id']."'";
$qry7="UPDATE `store_type` SET `remaining`='$rem0',`used`='$us1' WHERE id='$s_type'";
$upd0=mysqli_query($conn,$qry7);
 $upd=mysqli_query($conn,$qry5);
 $upd1=mysqli_query($conn,$qry6);
  // query execution 
 $register=mysqli_query($conn,$qry4);

 if ($register) {
  echo 'success!';
 }
 else{
     die(mysqli_error($conn));
 }
 }
 else echo "TASK CANT BE PROCESSED";
 
}
?>

    </body>
    </html>
