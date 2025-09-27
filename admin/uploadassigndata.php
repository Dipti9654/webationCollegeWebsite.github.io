<?php 
    if(isset($_POST["submit"])){
    $subject = $_POST["subject"];
    $assignment_name=$_FILES["assignment"]["name"];
    $assignment_type=$_FILES["assignment"]["type"];
    $assignment_tmp=$_FILES["assignment"]["tmp_name"];
    $location="./upload/assignment/";
    move_uploaded_file($assignment_tmp,$location.$assignment_name);
    $conn=mysqli_connect('localhost','root','','collegedb');
    $query="INSERT INTO `uploadassignment` (`subject`, `assignment`) VALUES ('$subject', '$assignment_name');";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "<script>alert('Assignment uploaded');window.location.href='uploadassign.php';</script>";
    }else{
        echo "<script>alert('something went wrong');</script>";
    }
        }
    ?>