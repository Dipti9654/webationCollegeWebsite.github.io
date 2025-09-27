<?php
session_start();
error_reporting(0);
$msg = $_REQUEST['msg'];
if ($msg == 1) {
    $err = "*Invalid Email or Password!";
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
  <!-- navbar  -->
  <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="me-auto"></div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../gallery.php">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../registration.php">Registration</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Login</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../admin/login.php">Admin Login</a></li>
                            <li><a class="dropdown-item" href="userlogin.php">User Login</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contactus.php">Contact</a>
                        </li>

                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<!-- navbar end -->
<!-- about  -->
<div class="container-fluid pt-5" style="background-color:cadetblue">
<h1 style="text-align:center;">User Login</h1><hr style="margin-left: 600px; width:20%;height:5px;background-color:red; border-radius: 20px; border: 2px solid red;">
<div class="row pt-3">

        <div class="col-sm-5">
            <img src="images/login1.jfif" width="600px" alt="">
        </div>
        <div class="col-sm-7 pt-5" style="border-radius: 10px;background-color: burlywood;margin-bottom: 5%;
	padding: 20px 12px;box-sizing: border-box; transition: 0.5s;">
    <h1 style="text-align:center;color:red">Login to your account</h1>
    <form  action="userlogin_data.php" method="post" enctype="multipart/form-data">
    <span style="color:red;"><?php echo $err; ?></span><br>
    <b>Enter Email Address :</b>
    <input type="email" name="emailaddress" id="emailaddress" placeholder="Enter Email Id" required class="form-control"/> <br/><br>
    <b>Enter Password :</b>
    <input type="password" name="password"placeholder="Enter Password" required class="form-control" ><br><br>
    <div class="col-sm-12 pb-5" style="text-align:center">
    
    <button type="submit" class="btn btn-primary mt-3" style="width: 130px; margin-bottom:20px;">Login</button>
    </div>
    </form>
    <button class="btn btn-danger mt-3" style="width: 130px;" onclick="location.href='http://localhost/webationCollegeWebsite/./index.php'">Back</button>
        </div>
    </div>
</div>

<!-- about end  -->
<!-- card start   -->

<!-- card end  -->
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
