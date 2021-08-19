<?php
 session_start();
require_once('database.php');
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];

        $qry="SELECT * FROM users where email='$email' and password='$pass' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            echo mysqli_error();
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:login.php?request=1');
           
        }
        else{
            $res=mysqli_fetch_array($login);
            $id=$res['id'];
            $fname=$res['fname'];
            $sname=$res['sname'];
            $role=$res['role'];

            // session creation
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['sname']=$lname;
            $_SESSION['role']=$role;

            if ($_SESSION['role']=='1') {
                header('Location:manager.php');
            }
            else {
                header('Location:employee.php');
            }
            
        }
           
        }
    }
    ?>
