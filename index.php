<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Website</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.bundle.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <link rel="stylesheet"href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .achievements {
        display: flex;
        justify-content: space-around;
        /* border:2px solid black; */
        align-items: center;
        padding: 40px 80px;
      }

      .achievements .work {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 40px;
      }

      .achievements .work i {
        width: fit-content;
        font-size: 50px;
        color: #333333;
        border-radius: 50%;
        border: 2px solid #333333;
        padding: 12px;
      }

      .achievements .work .work-heading {
        font-size: 20px;
        color: #333333;
        text-transform: uppercase;
        margin: 10px 0;
      }

      .achievements .work .work-text {
        font-size: 15px;
        color: #585858;
        margin: 10px 0;
      }

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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Registration</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login</a>
                          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li><a class="dropdown-item" href="./admin/login.php">Admin Login</a></li>
                          <li><a class="dropdown-item" href="./user/userlogin.php">User Login</a></li>
                          </ul>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact</a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
         <!-- navbar end -->
        <!-- crousel  -->
        <div id="carouselExampleControls" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner1.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="images/banner3.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="images/background1.png" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- crousel end  -->
    </div>
    <!-- facility start   -->
<div class="container-fluid pt-5">
<h1 style="text-align:center">Our facilities</h1><hr style="margin-left: 600px; width:20%;height:5px;background-color:red; border-radius: 20px; border: 2px solid red;">
<div class="row pt-3" style="background-color:grey">
<div class="col-sm-6">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        MODERN COMPUTER LAB
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
	  The College has fully furnished air conditioned Computer Lab equipped with Broadband Internet and video projection facility.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        24*7 INTERNET FACILITY
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  The College has fully furnished air conditioned Computer Lab equipped with Broadband Internet and video projection facility.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ANNUAL JOB FAIR
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      We will organize Job Fair every year for Better Opportunity to our students as we as for students for other polytechnic students.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        CLASSROOMS
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
   The college has classrooms which are spacious, well furnished, and ventilated form the basic infrastructure of the college.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        SPORTS & GAMES
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
	  The College lays considerable emphasis on student participation in various outdoor and indoor games.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        LIBRARY
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  The College Library provides a very conducive atmosphere for reading and learning. It is well equipped with more than 3000 books. Government Polytechnic Mohammdi is member of National Digital Library and also every student have their email account on this library.
	  </div>
    </div>
  </div>
</div>
</div>
<div class="col-sm-3 pt-5">
<img src="images/library2.png" alt="">
</div>
<div class="col-sm-3 pt-5">
<img src="images/basketball1.png" alt="">
</div>
</div>
</div>
  <!-- facility end   -->
  <!-- achievement-->
  <div class="container-fluid mt-5" style="border:5px solid cadetblue; border-radius: 10px; box-shadow: 0px 0px 6px 6px cadetblue; padding-bottom:50px; padding-top:10px;">
  <h1 style="text-align:center">Achievements</h1><hr style="margin-left: 550px; width:28%;height:5px;background-color:red; border-radius: 20px; border: 2px solid red;">
  <div class="achievements">
    <div class="work" style="border:2px solid yellow; border-radius: 10px; box-shadow: 0px 0px 6px 6px yellow;">
      <i class="fas fa-atom"></i>
      <p class="work-heading">Projects</p>
      <p class="work-text">I have worked on many projects and I am very proud of them. I am a very good developer and I am always looking for new projects.</p>
    </div>
    <div class="work" style="border:2px solid yellow; border-radius: 10px; box-shadow: 0px 0px 6px 6px yellow;">
      <i class="fas fa-skiing"></i>
      <p class="work-heading">Skills</p>
      <p class="work-text">I have a lot of skills and I am very good at them. I am very good at programming and I am always looking for new skills.</p>
    </div>
    <div class="work" style="border:2px solid yellow; border-radius: 10px; box-shadow: 0px 0px 6px 6px yellow;">
      <i class="fas fa-ethernet"></i>
      <p class="work-heading">Network</p>
      <p class="work-text">I have a lot of network skills and I am very good at them. I am very good at networking and I am always looking for new network skills.</p>
    </div>
  </div>
  </div>
   <!-- achievement end-->
<!-- course start   -->
<div class="container-fluid pt-5">
<h1 style="text-align:center">Courses We Offers</h1><hr style="margin-left: 550px; width:28%;height:5px;background-color:red; border-radius: 20px; border: 2px solid red;">
<h4 style="text-align:center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
<div class="row pt-5" style="margin-top: 5%;
	display: flex;
	justify-content: space-between;">
  
  <div class="col-sm-3 ee" style="border-radius: 10px;background-color: burlywood;margin-bottom: 5%;
	padding: 20px 12px;box-sizing: border-box; transition: 0.5s;">
    <h3 style="text-align:center">Intermediate</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aut exercitationem est labore laboriosam expedita! Eum ab voluptates exercitationem laboriosam itaque earum delectus adipisci error. Reiciendis nihil quibusdam ea. Ducimus. </p>
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-4 ee" style="border-radius: 10px;background-color: burlywood;box-sizing: border-box;margin-bottom: 5%; padding: 20px 12px; transition: 0.5s;">
  <h3 style="text-align:center">Degree</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aut exercitationem est labore laboriosam expedita! Eum ab voluptates exercitationem laboriosam itaque earum delectus adipisci error. Reiciendis nihil quibusdam ea. Ducimus. </p>
  </div>
  <div class="col-sm-1"></div>
  
  <div class="col-sm-3 ee" style="border-radius: 10px;background-color: burlywood;box-sizing: border-box; margin-bottom: 5%;
	padding: 20px 12px; transition: 0.5s;">
  <h3 style="text-align:center">Post Graduation</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aut exercitationem est labore laboriosam expedita! Eum ab voluptates exercitationem laboriosam itaque earum delectus adipisci error. Reiciendis nihil quibusdam ea. Ducimus. </p>
    </div>
   
    
</div>

</div>
    <!-- course end  -->
    <!-- footer  -->
    <div class="container-fluid mt-5 bg-dark p-3">
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
