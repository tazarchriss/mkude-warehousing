<?php
require_once('database.php');
include_once('request_availability.php');
$sql1 = "DELETE FROM task WHERE id='".$_GET['id']."'";
$query1 = mysqli_query($conn, $sql1);
$qry5="UPDATE users SET status='available' WHERE id='$uid'";
 $qry6="UPDATE service_requests SET status='pending' WHERE req_id='".$_GET['req_id']."'";
$qry7="UPDATE `store_type` SET `remaining`='$rem1',`used`='$us2' WHERE id='$s_type'";
$upd0=mysqli_query($conn,$qry7);
 $upd=mysqli_query($conn,$qry5);
 $upd1=mysqli_query($conn,$qry6);
if (!$query1) {
    echo 'not deleted';
}
else {
    header('Location:viewtask.php?status=deleted');
}
?>
