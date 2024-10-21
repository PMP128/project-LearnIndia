<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LearnIndia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="contact.php">Contact</a></li><br>
          <li><a><div class="nav-link nav-profile d-flex align-items-center pe-0">
          <div id="display-image">

            <img src="assets/img/profile-img1.jpg" alt="Profile" class="rounded-circle profile-picture">
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              session_start();
               echo $_SESSION['email'];
              ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php"> Create Profile</a></li>
              <li><a class="dropdown-item" href="display.php">Profile</a></li>
              <li><a class="dropdown-item" href="../course.php">My Courses</a></li>
              <li><a class="dropdown-item"><a class="btn btn-light" href="../logout.php" role="button">logout</a></a></li>
            </ul>
          </div>
        </div><!-- End Profile Iamge Icon -->
      </a></li>  
      </ul><!-- End Profile Nav -->
      <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
            </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Welcome to LearnIndia</h3>
            <p class="fst-italic">
            Welcome to LearnIndia, your premier destination for high-quality and accessible e-learning solutions! We are a cutting-edge online education platform dedicated to empowering learners of all ages and backgrounds to unlock their true potential and achieve their academic and professional goals. At LearnIndia, we believe that education is the key to individual and societal growth, and we are committed to making learning an enjoyable and enriching experience for everyone.
            </p>
            
            <p>
            Whether you are a student looking to excel academically, a professional seeking to upskill or switch careers, or simply an avid learner hungry for knowledge, LearnIndia welcomes you with open arms. Join us on this exciting journey of discovery and growth, and let's pave the way for a brighter future together!

At LearnIndia, education knows no boundaries - because knowledge has the power to transform lives.

Start your learning journey with LearnIndia today!
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- Bootstrap Container -->
  <div class="container">
    <h1 class="text-center my-5">Our Vision and Mission</h1>
    <p>Our Vision: LearnIndia envisions a world where education knows no boundaries. We aspire to create a global learning community that fosters knowledge exchange, embraces diversity, and nurtures creativity. By leveraging the power of technology, we aim to democratize education, making it accessible to learners across India and beyond, regardless of their geographical location or economic status.</p>
    <p>Our Mission: At LearnIndia, our mission is to revolutionize the way people learn and engage with educational content. We strive to build a dynamic, interactive, and personalized learning ecosystem that caters to the unique learning styles and needs of each individual. Our platform is designed to empower learners with the knowledge, skills, and confidence to excel in their chosen fields and become lifelong learners.</p>
    <p>What Sets Us Apart: <br>
    1. Diverse Course Catalog: LearnIndia offers a wide range of courses covering various subjects, including academic topics, professional development, vocational skills, and personal growth. From mathematics and science to business management and creative arts, we have something to cater to every learner's interests and ambitions.<br>
    2. Expert Instructors: Our team of experienced and passionate educators ensures that the courses on LearnIndia are not only informative but also engaging. Our instructors come from diverse backgrounds, bringing their expertise and real-world insights to the virtual classroom.<br>
    3. Interactive Learning: We believe in the power of active learning. Our platform is equipped with interactive features, such as quizzes, discussions, and hands-on projects, to enhance learners' understanding and retention of the course material.<br>
    4. Flexibility and Convenience: LearnIndia understands that learners have different schedules and commitments. Hence, our platform allows users to access courses at their own pace and convenience, anytime and anywhere, be it on a computer, tablet, or smartphone.<br>
    5. Supportive Learning Community: We foster a collaborative and supportive learning environment, where learners can connect with fellow students, share ideas, and seek assistance from instructors whenever needed.<br>
    6. Continuous Improvement: We are committed to staying at the forefront of educational innovation. LearnIndia regularly updates its course offerings, content, and platform features to ensure that learners have access to the latest and most relevant information.</p>
    <p>Whether you are a student looking to excel academically, a professional seeking to upskill or switch careers, or simply an avid learner hungry for knowledge, LearnIndia welcomes you with open arms. Join us on this exciting journey of discovery and growth, and let's pave the way for a brighter future together!</p>
    <p>At LearnIndia, education knows no boundaries - because knowledge has the power to transform lives.</p>
    <p>Start your learning journey with LearnIndia today!</p>
  </div>

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
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">contact us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Readme.txt">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Readme.txt">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our cources</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/web-course.php">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/c-course.php">c programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/c++-course.php">c++ programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/python-course.php">python programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/ai-course.php">Artificial Intelligence</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/ml-course.php">Machine Learning</a></li>
          
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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>