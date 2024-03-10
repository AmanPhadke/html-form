<?php

$con = new mysqli('localhost','root','','registration_database');
if(isset($_POST['save']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $gender=$_POST['gender'];

    $sql="insert into 'entry_details'(username,email,phone_number,gender)
    values('$username','$email','$phone_number','$gender')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{ 
        die(mysqli_error($con));
    }
}

?>