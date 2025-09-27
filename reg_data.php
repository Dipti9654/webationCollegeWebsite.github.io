<?php
session_start();
if(isset($_POST['register'])){
$name=$_POST['name'];
$gender=$_POST['gender'];
$emailaddress=$_POST['emailaddress'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$contactno=$_POST['contactno'];
$photo_name=$_FILES["photo"]["name"];
$photo_type=$_FILES["photo"]["type"];
$photo_tmp=$_FILES["photo"]["tmp_name"];
$location="upload/photo/";
move_uploaded_file($photo_tmp,$location.$photo_name);
$con=mysqli_connect('localhost','root','','collegedb');
// $query="INSERT INTO reg_data(`name`, `gender`, `emailaddress`, `password`, `conpassword`, `contactno`, `photo_name`, `photo_type`, `photo_tmp`, `occupation`) VALUES ('$name','$gender','$emailaddress','$password','$conpassword','$contactno','$photo_name','$photo_type','$photo_tmp','$occupation')";
$query= "INSERT INTO `reg_data` (`name`, `gender`, `emailaddress`, `password`, `conpassword`, `contactno`, `photo_name`, `photo_type`, `photo_tmp`) VALUES ('$name', '$gender', '$emailaddress', '$password', '$conpassword', '$contactno', '$photo_name', '$photo_type', '$photo_tmp')";
$result=mysqli_query($con,$query);
if($result){
    echo "<script>alert('Student registration success'); window.location.href='user/userlogin.php';</script>";
}else{
    // $_SESSION['user']=$name;
    // header("location:userlogin.php");
    echo "<script>window.location.href='registration.php';</script>";
}
}
?>
