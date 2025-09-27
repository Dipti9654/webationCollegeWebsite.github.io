<?php
    session_start();
    if ($_SESSION['emailaddress'] == '' && ($_SESSION['emailaddress'] == 0)) {
        session_destroy();
        header('location:login.php');
    }
    // echo(time()-$_SESSION['login_time_stamp']);
        if(isset($_SESSION['emailaddress'])){
            if((time()-$_SESSION['login_time_stamp'])>121){
                session_destroy();
                header('location:login.php');
            }
        }
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Website</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet"href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* background-color: #302f49; */
        padding: 20px 80px;
       }

      .bottom-links {
        display: flex;
        justify-content: space-around;
        align-items: center;
        /* padding: 40px 0; */
      }
      .bottom-links .links span {
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
        margin: 10px 0;
      }

      .bottom-links .links a {
        text-decoration: none;
        color: #a1a1a1;
        padding: 10px 20px;
      }
    </style>
</head>
<body>
<!-- dashboard  -->
<div class="container-fluid pt-5" style="background-color:cadetblue"> 
  <h1 style="text-align:center;">All Registration</h1><hr style="margin-left: 600px; width:20%;height:5px;background-color:orange; border-radius: 20px; border: 2px solid orange;">
    <div class="row pt-3">
        <div class="col-sm-2" style="background-color:black;">
            <div class="navbar">
                <ul>
                    <li class="form-control bg-success" ><a href="dashboard.php" class="active">Wlecome Admin</a></li>
                    <li class="form-control bg-success"><a href="viewstuassign.php">View Student Assignment</a></li>
                    <li class="form-control bg-success"><a href="allstudent.php">View All Student</a></li>
                    <li class="form-control bg-success"><a href="viewenquiry.php">View Enquery</a></li>
                    <li class="form-control bg-success"><a href="uploadassign.php">Upload Assignment</a></li>
                    <li class="form-control bg-success"><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-10">
            <table class="table" style="background-color: burlywood;">
                <tr>
                    <th style="background-color: red;">id</th>
                    <th style="background-color: red;">Name</th>
                    <th style="background-color: red;">Gender</th>
                    <th style="background-color: red;">Email</th>
                    <th style="background-color: red;">Password</th>
                    <th style="background-color: red;">Contact</th>
                    <th style="background-color: red;">Photo</th>
                    
                </tr>
                <?php 
                    $conn=mysqli_connect('localhost','root','','collegedb');
                    $query = "SELECT * FROM reg_data";
                    $res = mysqli_query($conn,$query);
                    $i=1;
                    if(mysqli_num_rows($res)){
                    while($row = mysqli_fetch_assoc($res)){
                ?> 
                <tr>
                    <td><?php echo $i;?><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['emailaddress']?></td>
                    <td><?php echo $row['password']?></td>
                    <td><?php echo $row['contactno']?></td>
                    <td><?php echo $row['photo_name']?></td>
                </tr>
                        <?php
                            $i++;
                            }
                        }
                        ?> 
            </table>
        </div>
    </div>
</div>
<!-- dashboard  -->
<!-- footer  -->
    <div class="container-fluid mt-3 bg-dark p-3">
        <div class="row">
            <div class="col-sm-4 text-center">
                <h2 style="color:white;">About Us</h2>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet,consectetur adipisicing
                    elit.Perferendis repudiandae earum aspernatur?
                    Reprehenderit,debitis eligendi sed nulla numquam ex amet
                    ducimus perspiciatis maxime incidunt laborum
                </p>
                <p class="pt-4 text-muted">
                    @2022-2023 desiged and developed by:<span class="text-danger">Dipti Singh</span>
                </p>
            </div>
            <div class="col-sm-2">
                <h1 style="color:white;">College User</h1>
                <p class="text-muted">Stay Updated</p>
                <form class="form-inline">
                    <div class="col pl-0">
                        <div class="input-group pr-5">
                            <input type="text" class="form-control bg-dark text-white"
                                id="inlineFormInputGroupUsername2" placeholder="Email" />
                            <div class="input-group-prepend">
                                <div class="input-group-text gradient">
                                    <div style="color: palevioletred">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-2">
                <footer class="footer">
                    <div class="bottom-links">
                    <div class="links">
                        <span style="color:white;">More Info</span>
                        <a href="index.php">Home</a>
                        <a href="aboutus.php">About</a>
                        <a href="gallery.php">Gallery</a>
                        <a href="registration.php">Registation</a>
                        <a href="contactus.php">Contact</a>
                    </div>
                    </div>
                </footer>
            </div>
            <div class="col-sm-4 text-center">
                <h1 style="color:white;">Follow Us</h1>
                <p class="text-muted">Let us be social</p>
                <div class="column text-light">
                    <div style="color: palevioletred">
                        <ul>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                        </ul>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.367633220126!2d80.96034943488772!3d26.923557400000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd7e0637bf21%3A0x730fe46201abc68a!2sSoftpro%20Learning%20Center!5e0!3m2!1sen!2sin!4v1662702586659!5m2!1sen!2sin"
                            width="400" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
