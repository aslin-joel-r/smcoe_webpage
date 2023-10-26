<?php 
include("conn.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Stella Mary's College of Engineering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="icon">
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- Preloader -->

  <div class="preloader">
    <img src="https://webdocs.pages.dev/assets/img/animlogo1.gif" alt="Loading...">
  </div>

  <style>
       /* Preloader Styles */
       .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Make sure it's on top of everything */
    }

  </style>
  
  <script>
    window.onload = function() {
        // Hide the preloader when the page is fully loaded
        document.querySelector('.preloader').style.display = 'none';
    }
</script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">SMCE</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="https://9509e6cb.webdocs.pages.dev/SMCE%20ERP.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.html">Management</a></li>
              <li><a href="principaldesk.html">Principal's Desk</a></li>
              <li><a href="oc.html">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.html">Strategic Plan</a></li>
              <li><a href="codeofconduct.html">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.html">mandatory Disclosure</a></li>
              <li><a href="#">Facts & Figures</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Under Graduate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="civil.php">Civil Engineering</a></li>
                  <li><a href="cse.php">Computer Science and Engineering</a></li>
                  <li><a href="ece.php">Electronics and Communication Engineering</a></li>
                  <li><a href="eee.php">Electrical and Electronics Engineering</a></li>
                  <li><a href="mech.php">Mechanical Engineering</a></li>
                  <li><a href="aids.php">Artificial Intelligence and Data Science</a></li>
                  <li><a href="sh.php">Science and Humanities</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Post Graduate</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="mecse.php">M.E Comuputer Science and Engineering</a></li>
                    <li><a href="meise.php">M.E Industrial Safety Engineering</a></li>
                    <li class="dropdown"><a href="mba.php"><span>Master of Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="mba.php">Operations Management</a></li>
                        <li><a href="mba.php">Human Resources Management</a></li>
                        <li><a href="mba.php">Finncial Management</a></li>
                        <li><a href="mba.php">Business Analytics Management</a></li>
                        <li><a href="mba.php">Marketing Management</a></li>
                        <li><a href="mba.php">Logistics & Supply Chain Management</a></li>
                      </ul>  
                  </ul>  
              <li><a href="placement_home.html">Placement</a></li>
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.html">Team & Code of Ethics</a></li>
                <li><a href="research_publications.html">Publications</a></li>
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                <li><a href="research_seedmoney.html">Stella Mary's Seed Money</a></li>
                <li><a href="research_mou.html">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.html">Sports</a></li>
          <li class="dropdown"><a href="#"><span>Students' Zone</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Clubs & Cells</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="culturalclub.php">Cultural Club</a></li>
                <li><a href="#">Literary Club</a></li>
                <li><a href="#">Yoga Club</a></li>
                <li><a href="cfi.php">Centre For Innovation</a></li>
                <li><a href="#">National Cadet Corps</a></li>
                <li><a href="#">Juniour Red Cross</a></li>
                <li><a href="#">Grievance Redressal Cell</a></li>
                <li><a href="#">Anti Ragging</a></li>
                <li><a href="#">Entrepreneurship Development Cell</a></li>
                <li><a href="#">Environmental Club</a></li>
                <li><a href="#">Institution Innovation Council</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="research_codeofethics.html">Research and Development Cell</a></li>
                <li><a href="placement_home.html">Career Guidance and Placement Training Cell</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="mediacell.html">Media Cell</a></li>
              </ul>
              <li><a href="#">Professional Ethics</a></li>
              <li><a href="#">Capability Enhancement</a></li>
              <li><a href="#">E-Learning</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Campus Activities</a></li>
              <li><a href="https://www.infomirrorscloud.com/smce.webopac/Imt_frm_User_Login.aspx">Library</a></li>
              <li><a href="https://nptel.ac.in">NPTEL</a></li>
              <li><a href="https://delnet.in">DELNET</a></li>
              <li><a href="alumni.php">Alumni Association</a></li>
              <li><a href="#">SWYAM - MOOC</a></li>
                <ul>
          <li><a class="nav-link scrollto" href="placement_home.html">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.html">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="mandatorydisclosure.html">Mandatory Disclosure</a></li>
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Faculty Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Faculty Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Hero Section ======= -->
<!--<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Partheeban</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section>End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
      </div>


      
      <div class="row">
      <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink FROM camps.`staff_photo` sp WHERE sp.staff_id=".$_GET['staff_id'];
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                     $sil= $data['link'];               
                    /*echo "<script>alert(".$sil.")</script>";
                     echo $data['link'];*/
                }
            }     
            ?>

      <?php
            $sql = "SELECT md.`desigination`,sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name,TIMESTAMPDIFF(YEAR,sm.dob,NOW()) age,sav.`text_val`,DATE_FORMAT(doj,'%d-%m-%Y') doj,sav2.`text_val`,sm.`institute_email_id`,sm.`mobile_no` FROM camps.`staff_master` sm INNER JOIN camps.`staff_promotion` sp ON sp.`staff_id`=sm.`staff_id` INNER JOIN camps.`master_desigination` md ON md.`md_id`=sp.`md_id`  LEFT JOIN documentation.`ss_additional_values` sav ON sav.`ss_am_id`=21 AND sav.`ss_id`=sm.staff_id LEFT JOIN documentation.`ss_additional_values` sav2 ON sav2.`ss_am_id`=10 AND sav2.`ss_id`=sm.staff_id WHERE sm.staff_id=".$_GET['staff_id'];
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) { 
            ?>
    
    <div class="col-lg-2" data-aos="fade-right">
        <img src="https://webdocs.pages.dev/assets/img/faculty/<?= $_GET['staff_id']?>.png"  class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php 
                    printf("%s", $data["desigination"]);
                    ?></h3>
         <!-- <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>-->
          <div class="row">
            <div class="col-lg-6">
              <ul><li></li>
                <ul><li></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php 
                    printf("%s", $data["staff_name"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Vidwan:</strong> <span><?php 
                    printf("%s", $data["age"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php 
                    printf("%s", $data["mobile_no"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php 
                    printf("%s", $data["institute_email_id"]);
                    ?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul><ul><li></li>
                <ul><li></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php 
                    printf("%s", $data["age"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Date of Joining:</strong> <span><?php 
                    printf("%s", $data["doj"]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>specialisation:</strong> <span><?php 
                    printf("%s", $data[""]);
                    ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong> <span><?php 
                    printf("%s", $data[""]);
                    ?></span></li>
              </ul>
            </div>
        <?php 
        }
            } ?>  
        </div>
          
          
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Facts Section ======= -->
  <section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>Facts</h2>
       <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
      </div>

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>International Journals</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Conferences</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="bi bi-list"></i>
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Sponsored Projects</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>PhD Scholars</strong></p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->
        <section id="faq" class="faq">
          <div class="container">
    

          <div class="section-title" data-aos="fade-up">
            <h2>National & International Journals</h2>
          <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center"></h5>
                <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
                <!-- Active Table -->
                <table class="table table-striped text-center table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title of paper</th>
                      <th scope="col">Author/s</th>
                      <th scope="col">Department</th>
                      <th scope="col">Journal</th>
                      <th scope="col">Year of Publication</th>
                      <th scope="col">ISSN No</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Blockchain based cloud service security architecture with distributed machine learning for smart device traffic record transaction</td>
                        <td>Dr.Pon.Partheeban</td>
                        <td>CSE</td>
                        <td>WILEY Concurrency and Computation - Practice and Experience</td>
                        <td>2021</td>
                        <td>1532-0634</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Bridie Kessler</td>
                        <td>Developer</td>
                        <td>35</td>
                        <td>2014-12-05</td>
                        <td>2021</td>
                        <td>1532-0634</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div> 
        </div>
  
  
    <div class="section-title" data-aos="fade-up">
      <h2>Conference Publications</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"></h5>
        <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
        <!-- Active Table -->
        <table class="table table-striped text-center table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title of paper</th>
              <th scope="col">Author/s</th>
              <th scope="col">Department</th>
              <th scope="col">Name of the Conference</th>
              <th scope="col">Year of Publication</th>
              <th scope="col">ISSN No</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Blockchain based cloud service security architecture with distributed machine learning for smart device traffic record transaction</td>
                <td>Dr.Pon.Partheeban</td>
                <td>CSE</td>
                <td>WILEY Concurrency and Computation - Practice and Experience</td>
                <td>2021</td>
                <td>1532-0634</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bridie Kessler</td>
                <td>Developer</td>
                <td>35</td>
                <td>2014-12-05</td>
                <td>2021</td>
                <td>1532-0634</td>
              </tr>
             
            </tbody>
          </table>
        </div>
  </div>
  
  
  
  
  <div class="section-title" data-aos="fade-up">
    <h2>Patent</h2>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center"></h5>
      <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
      <!-- Active Table -->
      <table class="table table-striped text-center table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title of patent</th>
            <th scope="col">Author/s</th>
            <th scope="col">Registration No</th>
            <th scope="col">Patent Status</th>
            
          </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Blockchain based cloud service security architecture with distributed machine learning for smart device traffic record transaction</td>
              <td>Dr.Pon.Partheeban</td>
              <td>WILEY Concurrency and Computation - Practice and Experience</td>
              <td>2021</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Bridie Kessler</td>
              <td>Developer</td>
              <td>35</td>
              <td>2021</td>
            </tr>
           
          </tbody>
        </table>
      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Stella Mary's College of Engineering</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://stellamaryscoe.edu.in/">SMCE Media Cell</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>