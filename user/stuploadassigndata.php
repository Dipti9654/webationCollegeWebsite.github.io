<?php 
    if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $assignment_name=$_FILES["assignment"]["name"];
    $assignment_type=$_FILES["assignment"]["type"];
    $assignment_tmp=$_FILES["assignment"]["tmp_name"];
    $location="./upload1/assignment/";
    move_uploaded_file($assignment_tmp,$location.$assignment_name);
    $conn=mysqli_connect('localhost','root','','collegedb');
    $query="INSERT INTO `stuloadassignment` (`name`,`student`, `assignment`,`tmp_name`) VALUES ('$name','$subject', '$assignment_name','$assignment_tmp');";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "<script>alert('Assignment uploaded');window.location.href='stuloadassign.php';</script>";
    }else{
        echo "<script>alert('something went wrong');</script>";
    }
        }
?>