<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contactno=$_POST['contactno'];
$emailaddress=$_POST['emailaddress'];
$enquirytext=$_POST['enquirytext'];
$con=mysqli_connect('localhost','root','','collegedb');
//$query= "insert into enquiry (name,gender,address,contactno,emailaddress,enquirytext) values('$name','$gender','$address','$contactno',$emailaddress','$enquirytext')";
$query="INSERT INTO enquiry(`name`, `gender`, `address`, `contactno`, `emailaddress`, `enquirytext`) VALUES ('$name','$gender','$address','$contactno','$emailaddress','$enquirytext')";
$result=mysqli_query($con,$query);
if($result){
    echo "<script>alert(' Enquiry Registration is Done'); window.location.href='admin/login.php';</script>"; 
    // window.location.href='user/userlogin.php';    
}else{
    echo "<script>window.location.href='contactus.php';</script>";     
}

}
?>
