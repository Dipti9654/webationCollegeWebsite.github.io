<?php
session_start();
$emailaddress=$_POST['emailaddress'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','collegedb');
// $query= "insert into tbl_login('email','password') values('admin@gmail.com','$password')";
$query="select * from log_data where emailaddress='$emailaddress' AND password='$password'";
$result=mysqli_query($con,$query);
 //$row=mysqli_num_rows($result);
 //echo $row;
if(mysqli_num_rows($result)){
$_SESSION['emailaddress']=$emailaddress;
$_SESSION['login_time_stamp']=time();
// $_SESSION['user']

    header("location:./dashboard.php");
}
else{
    // echo "not logged in.";
    header("location:./login.php?msg=1");
}
?>