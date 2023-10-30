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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.php">Management</a></li>
              <li><a href="principaldesk.php">Principal's Desk</a></li>
              <li><a href="oc.php">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.php">Strategic Plan</a></li>
              <li><a href="codeofconduct.php">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.php">mandatory Disclosure</a></li>
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
              <li><a href="placement_home.php">Placement</a></li>
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.php">Team & Code of Ethics</a></li>
                <li><a href="research_publications.php">Publications</a></li>
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                <li><a href="research_seedmoney.html">Stella Mary's Seed Money</a></li>
                <li><a href="research_mou.php">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.php">Sports</a></li>
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
                <li><a href="research_codeofethics.php">Research and Development Cell</a></li>
                <li><a href="placement_home.php">Career Guidance and Placement Training Cell</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="mediacell.php">Media Cell</a></li>
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
          <li><a class="nav-link scrollto" href="placement_home.php">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.php">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="mandatorydisclosure.php">Mandatory Disclosure</a></li>
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Publications</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Publications</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        

        <div class="section-title" data-aos="fade-up">
          <h2>National & International Journals</h2>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Staff Publications</h5>
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
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Student Publications</h5>
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
      <h5 class="card-title text-center">Staff Publications</h5>
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
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Student Publications</h5>
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
    <h5 class="card-title text-center">Staff Publications</h5>
    <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
    <!-- Active Table -->
    <table class="table table-striped text-center table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title of Patent</th>
          <th scope="col">Author/s</th>
          <th scope="col">Department</th>
          <th scope="col">Registration No</th>
          <th scope="col">Year of Publication</th>
          <th scope="col">Patent Status</th>
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
<div class="card">
<div class="card-body">
  <h5 class="card-title text-center">Student Publications</h5>
  <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
  <!-- Active Table -->
  <table class="table table-striped text-center table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title of patent</th>
        <th scope="col">Author/s</th>
        <th scope="col">Department</th>
        <th scope="col">Registration No</th>
        <th scope="col">Year of Publication</th>
        <th scope="col">Patent Status</th>
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
  <h2>Funded Projects</h2>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Staff Publications</h5>
    <!--<p>Add <code>.table-borderless</code> for a table without borders.</p>-->
    <!-- Active Table -->
    <table class="table table-striped text-center table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title of the proposal</th>
          <th scope="col">Invsteigator, Co-Investigator</th>
          <th scope="col">Department</th>
          <th scope="col">Date of Registration</th>
          <th scope="col">Amount</th>
          <th scope="col">Status</th>
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





    </section>

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