<?php
    require_once('connection.php');
    if(isset($_POST['btnlogin']))
    {        
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $query="select *from users where email='$email'";
        $result=mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_password=$row['Password'];

            //if(md5($password)==$db_password) this is for decryption if we had encrypted in the database
            if($password==$db_password)
            {
                session_start();
                $_SESSION['email']=$email;
                header("location:homelogin.php");
            }
            else
            {
                echo "<script>alert('Incorrect Credentials');</script>";
                echo"<script> window.location.href ='Login.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Please check Your Email');</script>";
            echo"<script> window.location.href ='Login.php';</script>";

        }

    }
?>