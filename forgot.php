<?php

require_once ('database.php');
session_start();
$id=$_SESSION['id'];


?>
<?php
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if (isset($_POST['save'])) {

    $query = "SELECT * FROM `users` 
    WHERE id='$id' AND ";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        if($pass1==$pass2){
            $sql = "UPDATE `users` SET `password` = SHA1('$pass1') WHERE `fname`.`email` = '$email'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Pasword updating succeeded'); window.location='index.php'</script>";
            } else {
                echo "<script>alert('Erro!'); window.location='forgot.php'</script>";
            }
        }else {
            echo "<script>alert('Erro! New Password And Confirm Password Mismatched. you must put the same password for in both fields'); window.location='forgot.php'</script>";
        }

      
    } else{
        echo "<script>alert('You Have entered Incorrect username or email.. try again!'); window.location='forgot.php'</script>"; 
    }    
}
?>
