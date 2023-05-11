<?php
    require_once('connection.php');
    if(isset($_POST['btnsave']))
    {
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $ltext = mysqli_real_escape_string($con,$_POST['ltext']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $address = mysqli_real_escape_string($con,$_POST['address']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        if(empty($password))
        {
            echo 'Please fill the Password';
        }
        else
        {
            $check_duplicate_email="SELECT Email from users where Email='$email'";
            $checkemailr=mysqli_query($con,$check_duplicate_email);
            $count=mysqli_num_rows($checkemailr);
            if($count>0)
            {
                echo "<script>alert('Email id already exists');</script>";
                echo"<script> window.location.href ='Sign-Up.php';</script>";
            }
            $check_duplicate_phone="SELECT Phone from users where Phone=$phone";
            $checkphoner=mysqli_query($con,$check_duplicate_phone);
            $count1=mysqli_num_rows($checkphoner);
            if($count1>0)
            {
                echo "<script>alert('Phone number already exists');</script>";
                echo"<script> window.location.href ='Sign-Up.php';</script>";
            }
            else
            {
                $sql="insert into users(Fname,Lname,Email,Phone,Address,Password) values('$name','$ltext','$email', '$phone', '$address', '$password')";
                $result=mysqli_query($con,$sql);
                if($result)
                {
                    echo "<script>alert('Successfully created account');</script>";
                    echo"<script> window.location.href ='Login.php';</script>";
                }
                else
                {
                    echo 'Check your connection and try again';
                }
            }        

        }

        
      
    }
?>