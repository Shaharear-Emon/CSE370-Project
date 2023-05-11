<?php
require_once('connection.php');
if(isset($_POST['sell']))
{
    $file1=$_FILES['imagese1'];
    //echo"<pre>";//pre text to print the info off image
    //print_r($_FILES['imagese1']);//to print the info off image
    //echo"</pre>";
    $file1name=$file1['name'];
    $file1tmp=$file1['tmp_name'];
    $file1e=$file1['error'];
    $file2=$_FILES['imagese2'];
    //echo"<pre>";//pre text to print the info off image
   // print_r($_FILES['imagese2']);//to print the info off image
    //echo"</pre>"; 
    $file2name=$file2['name'];
    $file2tmp=$file2['tmp_name'];
    $file2e=$file2['error'];
    if($file1e===0 && $file2e===0)
    {
        $img_ex1 = pathinfo($file1name,PATHINFO_EXTENSION);// to take the extenction of the image
        $img_ex2 = pathinfo($file2name,PATHINFO_EXTENSION);
        $img_ex1_lc= strtolower($img_ex1);//if extention is upper case make it into lower case
        $img_ex2_lc= strtolower($img_ex2);
        //echo"$img_ex1_lc";
        //echo"$img_ex2_lc";
        $allowed_exs1 = array("jpg","jpeg","png","webp","svg");
        $allowed_exs2 = array("jpg","jpeg","png","webp","svg");
        if(in_array($img_ex1_lc,$allowed_exs1) && in_array($img_ex2_lc,$allowed_exs2))
        {
            $new_img1_name=uniqid("IMGse1-",true).'.'.$img_ex1_lc;
            $new_img2_name=uniqid("IMGse2-",true).'.'.$img_ex2_lc;
            $img1_upload_path='picsseller/'.$new_img1_name;
            $img2_upload_path='picsseller/'.$new_img2_name;
            move_uploaded_file($file1tmp,$img1_upload_path);
            move_uploaded_file($file2tmp,$img2_upload_path);
            //echo"Correct";
            $name=mysqli_real_escape_string($con,$_POST['name']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $pname=mysqli_real_escape_string($con,$_POST['pname']);
            $ptype=mysqli_real_escape_string($con,$_POST['ptype']);
            $pprice=mysqli_real_escape_string($con,$_POST['Pprice']);
            $phone=mysqli_real_escape_string($con,$_POST['Phone']);
            $ploc=mysqli_real_escape_string($con,$_POST['ploc']);
            $pdesc=mysqli_real_escape_string($con,$_POST['sellerdesc']);
            $queryu="insert into sellerproperty(Pimg1,Pimg2,Name,Email,Pname,Ptype,Price,Phone,Loc,Sellerdesc) values( '$new_img1_name','$new_img2_name','$name','$email','$pname','$ptype',
            '$pprice','$phone','$ploc','$pdesc')";
            $result=mysqli_query($con,$queryu);
            echo"<script>alert('Your Property has been sent to Admin and will verfiy and contact you soon');</script>";
            echo"<script> window.location.href ='Sell.php';</script>";
        }
        else
        {
            echo"<script>alert('Choose correct image file');</script>";
        }
        
    }    
    else
    {
        echo"nope";
    }
} 
else{
    echo "not working";
}
?>
