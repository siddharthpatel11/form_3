<?php
    include"config.php";
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $contact=$_REQUEST['contact'];
    //$gender=$_REQUEST['gender'];


    echo $insert="INSERT INTO `form`(`name`,`email`,`password`,`contact`) VALUES ('$name','$email','$password','$contact')";//,'$gender')";
    
    $result= mysqli_query($con,$insert);
    
    if($result == true)
    {
        header("location:form.php");
    }
    else
    {
        echo "<script>alert('not');</script>";
    }
?>