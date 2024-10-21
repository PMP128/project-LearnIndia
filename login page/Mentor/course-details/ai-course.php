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

  <!-- ======= Header ======= -->
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
          <div class="col-lg-8">
            <img src="../assets/img/new/Intro-to-AI-Naimo.jpg" class="img-fluid" alt="">
            <div class="container mt-5">
    <div class="row justify-content">
        <div class="col-md-12">
            <h2>Introduction to Artificial Intelligence (AI)</h2>
            <h3>Main Points covered in This Course are:</h3>
            <div class="accordion" id="aiIntroductionAccordion">
                
                <!-- Point 1: Understanding Artificial Intelligence -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiUnderstandingHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#aiUnderstandingCollapse" aria-expanded="true" aria-controls="aiUnderstandingCollapse">
                            1. Understanding Artificial Intelligence
                        </button>
                    </h2>
                    <div id="aiUnderstandingCollapse" class="accordion-collapse collapse show" aria-labelledby="aiUnderstandingHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Definition and scope of AI.
                            <br>
                            Historical developments and milestones.
                        </div>
                    </div>
                </div>
                
                <!-- Point 2: Problem Solving and Search Algorithms -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiProblemSolvingHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiProblemSolvingCollapse" aria-expanded="false" aria-controls="aiProblemSolvingCollapse">
                            2. Problem Solving and Search Algorithms
                        </button>
                    </h2>
                    <div id="aiProblemSolvingCollapse" class="accordion-collapse collapse" aria-labelledby="aiProblemSolvingHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Problem representation and solving techniques.
                            <br>
                            Search algorithms: depth-first, breadth-first, A*.
                        </div>
                    </div>
                </div>
                
                <!-- Point 3: Knowledge Representation -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiKnowledgeRepresentationHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiKnowledgeRepresentationCollapse" aria-expanded="false" aria-controls="aiKnowledgeRepresentationCollapse">
                            3. Knowledge Representation
                        </button>
                    </h2>
                    <div id="aiKnowledgeRepresentationCollapse" class="accordion-collapse collapse" aria-labelledby="aiKnowledgeRepresentationHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Logic, propositional calculus, and predicate logic.
                            <br>
                            Semantic networks, frames, and ontologies.
                        </div>
                    </div>
                </div>
                
                <!-- Point 4: Machine Learning and AI -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiMachineLearningHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiMachineLearningCollapse" aria-expanded="false" aria-controls="aiMachineLearningCollapse">
                            4. Machine Learning and AI
                        </button>
                    </h2>
                    <div id="aiMachineLearningCollapse" class="accordion-collapse collapse" aria-labelledby="aiMachineLearningHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Relationship between AI and machine learning.
                            <br>
                            Types of machine learning: supervised, unsupervised, reinforcement.
                        </div>
                    </div>
                </div>
                
                <!-- Point 5: Natural Language Processing (NLP) -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiNlpHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiNlpCollapse" aria-expanded="false" aria-controls="aiNlpCollapse">
                            5. Natural Language Processing (NLP)
                        </button>
                    </h2>
                    <div id="aiNlpCollapse" class="accordion-collapse collapse" aria-labelledby="aiNlpHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Basics of language processing and understanding.
                            <br>
                            Text analysis, sentiment analysis, and language generation.
                        </div>
                    </div>
                </div>
                
                <!-- Point 6: Computer Vision -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiComputerVisionHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiComputerVisionCollapse" aria-expanded="false" aria-controls="aiComputerVisionCollapse">
                            6. Computer Vision
                        </button>
                    </h2>
                    <div id="aiComputerVisionCollapse" class="accordion-collapse collapse" aria-labelledby="aiComputerVisionHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Image processing, feature extraction, and analysis.
                            <br>
                            Object detection, recognition, and image understanding.
                        </div>
                    </div>
                </div>
                
                <!-- Point 7: Robotics and AI -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiRoboticsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiRoboticsCollapse" aria-expanded="false" aria-controls="aiRoboticsCollapse">
                            7. Robotics and AI
                        </button>
                    </h2>
                    <div id="aiRoboticsCollapse" class="accordion-collapse collapse" aria-labelledby="aiRoboticsHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Applications of AI in robotics and automation.
                            <br>
                            Control systems, sensors, and AI-driven decision making.
                        </div>
                    </div>
                </div>
                
                <!-- Point 8: Ethical and Societal Considerations in AI -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="aiEthicalConsiderationsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aiEthicalConsiderationsCollapse" aria-expanded="false" aria-controls="aiEthicalConsiderationsCollapse">
                            8. Ethical and Societal Considerations in AI
                        </button>
                    </h2>
                    <div id="aiEthicalConsiderationsCollapse" class="accordion-collapse collapse" aria-labelledby="aiEthicalConsiderationsHeading" data-bs-parent="#aiIntroductionAccordion">
                        <div class="accordion-body">
                            Addressing bias in AI algorithms and decision making.
                            <br>
                            Privacy concerns, data ethics, and transparency.
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Trainer</h5>
              <p><a href="#">Walter White</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p>Free</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>cource-details</h5>
              <p> Introduction to Artificial Intelligence (AI)</p>
            </div>

            
              <a class="btn btn-success" href="cregister.php" role="button">Enroll Now</a>
            

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    

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
              <strong>Email:</strong> learnindiacoltd@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../contact.php">contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../Readme.txt">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../Readme.txt">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our cources</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="web-course.php">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="c-course.php">c programming</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="c++-course.php">c++ programming</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="python-course.php">python programming</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ai-course.php">Artificial Intelligence</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ml-course.php">Machine Learning</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>for any problem contact Us through Email and stay updated with Our Newsletter.</p>
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
          Designed by <a href="https://bootstrapmade.com/">LearnIndia.Co.Ltd</a>
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