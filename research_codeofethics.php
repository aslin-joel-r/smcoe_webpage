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
          <h2>Team & Code of Ethics</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Code of Ethics</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

        <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">
  
          <div class="section-title">
            <h2>Team</h2>
            <p></p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1131.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1131">Dr.R.K.Madhumathi</a></h4>
                  <span>Joint Director - Research </span>
                  <p>Department of Civil Engineering</p>
                  <div class="social">
                
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1296.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1296">Dr.M.Supriya</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Computer Science and Engineering </p>
                  <div class="social">
              
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1269.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1269">Mr.G.Biju George</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Electronics and Communication Engineering</p>
                  <div class="social">
              
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1265.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                 
                  <h4 class="title"><a href="faculty.php?staff_id=1265">Ms.A.Annie Steffy Beula</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Electrical and Electronics Engineering</p>
                  <div class="social">
          
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1270.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                 
                  <h4 class="title"><a href="faculty.php?staff_id=1270">Mr.I.P.Rakhesh</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Mechanical Engineering</p>
                  <div class="social">
            
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1276.png" class="img-fluid" alt=""></div>
                <div class="member-info">
              
                  <h4 class="title"><a href="faculty.php?staff_id=1276">Dr.M.Benjamin</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Science and Humanities</p>
                  <div class="social">
                 
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1275.png" class="img-fluid" alt=""></div>
                <div class="member-info">
              
                  <h4 class="title"><a href="faculty.php?staff_id=1275">Dr.L.Mary Novena</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Science and Humanities</p>
                  <div class="social">
         
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1093.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                 
                  <h4 class="title"><a href="faculty.php?staff_id=1093">Ms.A.L.Merlin Sheela</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Science and Humanities</p>
                  <div class="social">
     
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1107.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  
                  <h4 class="title"><a href="faculty.php?staff_id=1107">Dr.S.A.Sumi</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Science and Humanities</p>
                  <div class="social">
      
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Doctors Section -->


      <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Code of Ethics</h2>
            </div>
  
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <h3 class="resume-title">Anti Plagiarism Policy</h3>
              <div class="resume-item pb-0">
                <h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>
                <ul>
                  <strong>Integrity:</strong><li>The researcher is responsible for the trustworthiness of his or her own research. Fabrication, falsification, plagiarism and similar serious violations of good academic practice are incommensurate with such trustworthiness.</li>
                  <strong>Respect:</strong><li>People who participate in research, as informants or otherwise, shall be treated with respect.</li>
                  <strong>Fairness:</strong><li>All research projects shall be designed and implemented fairly.</li>
                  <strong>Quest for Truth:</strong><li>Research activity is a quest for new knowledge, with critical and systematic verification and peer review.</li>
                  <strong>Academic freedom:</strong><li>Institution shall assist in ensuring the researchers’ freedom in their choice of topic and methodology, implementation of research and publication of results.</li>
                  <strong>Quality:</strong><li>Research should be of high academic quality. The researcher and institution are required to possess the necessary competence, design relevant research questions, undertake suitable choices of methodology and ensure sound and appropriate project implementation in terms of data collection, data processing and safekeeping/storage of the material.</li>
                  <strong>Voluntary informed Consent:</strong><li>Consent is the main rule in research on individuals or on information and material that can be linked to individuals. This consent should be informed, explicit, voluntary and documentable.</li>
                  <strong>Confidentiality:</strong><li>As a general principle, those who are made the subjects of research are entitled to have their personal information treated confidentially. The researcher must prevent any use and communication of information that might inflict damage on individuals who are the subjects of research.</li>
                  <strong>Collegiality:</strong><li>Researchers must show each other respect. They must agree on and comply with good practices for data ownership and sharing, authorship, publication, peer review and cooperation in general.</li>
                  <strong>Institutional responsibility:</strong><li>The responsibility for ethical conduct rests not only with the individual researcher, but also with the research institution.</li>
                  <strong>Availability of Results:</strong><li>As a main rule, research results should be made available. Openness regarding research findings is essential for ensuring verifiability, for returning some benefit to the research participants and society in general, and for ensuring a dialogue with the public.</li>
                  <strong>Social Responsibility:</strong><li>Researchers have an independent responsibility to ensure that their research will be of benefit to research participants, relevant groups or society in general, and for preventing it from causing harm.</li>
                  <strong>Laws and Regulations:</strong><li>In the field of research, there are national laws and regulations as well as applicable international conventions and agreements, and researchers and research institutions must abide by these.</li>
              
                  




                  </ul>
              </div>
            </div>
            </div>
            </div>
            </section>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <!--<div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>-->
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>QUICK LINKS 1</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">NIRF</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ANTI RAGGING CELL</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">GRIEVANCE REDRESSAL CELL</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">INTERNAL COMPLIANCE CELL</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">MANDATORY DISCLOSURE</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>QUICK LINKS 2</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ONLINE ADMISSION</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">NAAC CERTIFICATE</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">NAAC SSR</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">AICTE Centralised Support System</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Online Payment - Privacy Policy</a></li>
              </ul>
            </div>
  
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
            <a href="/Users/partheebanpon/Documents/Vesperr-2/index.html" class="scrollto">Home</a>
            <a href="/Users/partheebanpon/Documents/Vesperr-2/index.html" class="scrollto">About</a>
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