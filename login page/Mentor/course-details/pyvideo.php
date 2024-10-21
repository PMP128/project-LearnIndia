<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LearnIndia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<form method="POST" action="login.php">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">LearnIndia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="../index.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../courses.php">Courses</a></li>
          <li><a href="../trainers.php">Trainers</a></li>
          <li><a href="../events.php">Events</a></li>
          <li><a href="../contact.php">Contact</a></li><br>
          <li><a><div class="nav-link nav-profile d-flex align-items-center pe-0">
          <div id="display-image">

            <img src="../assets/img/profile-img1.jpg" alt="Profile" class="rounded-circle profile-picture">
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              session_start();
               echo $_SESSION['email'];
              ?>
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../profile.php"> Create Profile</a></li>  
            <li><a class="dropdown-item" href="../display.php">Profile</a></li>              
              <li><a class="dropdown-item" href="../../course.php">My Courses</a></li>
              <li><a class="dropdown-item"><a class="btn btn-light" href="../../logout.php" role="button">logout</a></a></li>
            </ul>
          </div>
        </div><!-- End Profile Iamge Icon -->
      </a></li>  
      </ul><!-- End Profile Nav -->
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Course Details</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NA1BepENQZQ" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
              </div>
              <div class="container mt-5">
    <div class="row justify-content">
        <div class="col-md-12">
            <h2>Basics of Python</h2>
            <h3>This Cource covered following points:</h3>
            <div class="accordion" id="pythonBasicsAccordion">
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="introPythonHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#introPythonCollapse" aria-expanded="true" aria-controls="introPythonCollapse">
                            1. Introduction to Python
                        </button>
                    </h2>
                    <div id="introPythonCollapse" class="accordion-collapse collapse show" aria-labelledby="introPythonHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            History and background of Python.
                            <br>
                            Importance and applications of Python.
                            <br>
                            Setting up the Python environment: installation and IDEs.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="pythonSyntaxHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pythonSyntaxCollapse" aria-expanded="false" aria-controls="pythonSyntaxCollapse">
                            2. Python Syntax and Fundamentals
                        </button>
                    </h2>
                    <div id="pythonSyntaxCollapse" class="accordion-collapse collapse" aria-labelledby="pythonSyntaxHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            Variables and data types in Python.
                            <br>
                            Operators and expressions.
                            <br>
                            Control structures: if statements and loops.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="functionsPythonHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#functionsPythonCollapse" aria-expanded="false" aria-controls="functionsPythonCollapse">
                            3. Functions and Modules
                        </button>
                    </h2>
                    <div id="functionsPythonCollapse" class="accordion-collapse collapse" aria-labelledby="functionsPythonHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            Defining and using functions in Python.
                            <br>
                            Difference between built-in and user-defined functions.
                            <br>
                            Using modules and libraries.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="dataStructuresPythonHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dataStructuresPythonCollapse" aria-expanded="false" aria-controls="dataStructuresPythonCollapse">
                            4. Data Structures in Python
                        </button>
                    </h2>
                    <div id="dataStructuresPythonCollapse" class="accordion-collapse collapse" aria-labelledby="dataStructuresPythonHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            Lists, tuples, and dictionaries.
                            <br>
                            Strings and string manipulation.
                            <br>
                            Sets and file handling.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="oopPythonHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#oopPythonCollapse" aria-expanded="false" aria-controls="oopPythonCollapse">
                            5. Object-Oriented Programming (OOP) in Python
                        </button>
                    </h2>
                    <div id="oopPythonCollapse" class="accordion-collapse collapse" aria-labelledby="oopPythonHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            Classes and objects.
                            <br>
                            Inheritance and polymorphism.
                            <br>
                            Encapsulation and abstraction.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="exceptionPythonHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exceptionPythonCollapse" aria-expanded="false" aria-controls="exceptionPythonCollapse">
                            6. Exception Handling
                        </button>
                    </h2>
                    <div id="exceptionPythonCollapse" class="accordion-collapse collapse" aria-labelledby="exceptionPythonHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            Try-except blocks.
                            <br>
                            Handling different types of exceptions.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="fileHandlingPythonHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fileHandlingPythonCollapse" aria-expanded="false" aria-controls="fileHandlingPythonCollapse">
                            7. Basic File Handling
                        </button>
                    </h2>
                    <div id="fileHandlingPythonCollapse" class="accordion-collapse collapse" aria-labelledby="fileHandlingPythonHeading" data-bs-parent="#pythonBasicsAccordion">
                        <div class="accordion-body">
                            Reading and writing files.
                            <br>
                            Working with CSV and JSON.
                        </div>
                    </div>
                </div>
                
                <!-- Continue with the remaining main points and subpoints... -->
                
            </div>
        </div>
    </div>
</div>
          </div>
        </div>
      </div>
    </section><!-- End Cource Details Section -->`

   
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>LearnIndia</h3>
            <p>
              Ashta, Walwa, <br>
              Maharashtra,416301 <br><br>
              <strong>Phone:</strong> +919975591394<br>
              <strong>Email:</strong> learnindia@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">programming</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Artificial Intelligence</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Machine Learning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Deep Learning</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>LearnIndia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>