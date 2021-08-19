
<?php

$conn=mysqli_connect("127.0.0.1","root","","mkude");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>my form</title>
</head>
<body>
<?php
if (isset($_GET["register"])){
?>
<h3 style="color:white;background-color:green;font-size:50px">An admin as been added </h3>
<?php
 }

?>


<form action="add.php" method="POST">

	
<select name="admin">
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
   <br><br>

	
	<input type="submit" name="submit" value="register">
</form>

</body>
</html>
