<?php
    extract($_POST);
    session_start();
    require_once('database.php');
    $id=$_SESSION['id'];
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
    <form method="POST">
        <input type="file" name="file" id="">
        <input type="submit" value="upload">
        <?php
        
        if (isset($_POST['upload'])) {
            $file=rand(1000,100000)."-".$_FILES['file']['name'];
            $folder="upload/";
            $new_file_name=strtolower($file);
            $final_file=str_replace(' ','-',$new_file_name);
            if (move_uploaded_file($file_loc,$folder.$final_file)) 
            {
            $query="INSERT INTO users(pic) VALUES('$final_file') WHERE id='$id'";
            $sql=mysqli_query($conn,$query) or die("could not perform the Query");
            header('Location:viewprofile.php?status=success'); 
            }
            else{
                echo 'Error.Please try again';
            }
        }
        ?>
    </form>
</body>
</html>
