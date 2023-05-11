<?php
    require_once('connection.php');
    if(isset($_POST['feed']))
    {
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $feedback = mysqli_real_escape_string($con,$_POST['feedback']);

        if(empty($feedback))
        {
            echo"<script>alert('Please fill the feedback');</script>";
            echo"<script> window.location.href = 'Feedback.php';</script>";
        }
        else
        {
            $sql="insert into feedback(Email,Feedback) values('$email','$feedback')";
            $result=mysqli_query($con,$sql);

            if($result)
            {
                echo"<script>alert('Thank you for your feedback we will get back to you soon');</script>";
                echo"<script> window.location.href = 'homelogin.php';</script>";
            }
            else
            {
                echo 'Give again';
            }    

        }
    }
?>
