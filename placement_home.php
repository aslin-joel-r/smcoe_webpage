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

    

        <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">
  
          <div class="section-title">
            <br>
            <h2>Team</h2>
            <p></p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1026.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1026">Dr.Pon.Partheeban</a></h4>
                  <span>Talent Acquisition Head</span>
                  <p>Department of Computer Science and Engineering</p>
                  <div class="social">
                
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1126.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1126">Ms.M.Ashni</a></h4>
                  <span>Training Head</span>
                  <p>Department of Civil Engineering </p>
                  <div class="social">
              
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/r&d/BijuGeorge.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1257">Mr.Sree Kumara Ganapathy</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Civil Engineering</p>
                  <div class="social">
              
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1019.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                 
                  <h4 class="title"><a href="faculty.php?staff_id=1019">Mr.Senthil Kumar</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Computer Science and Engineering</p>
                  <div class="social">
          
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/CIVIL/ASHNI.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                 
                  <h4 class="title"><a href="faculty.php?staff_id=1051">Ms.Ramola</a></h4>
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
                <div class="pic"><img src="https://webdocs.pages.dev/assets/img/faculty/1266.png" class="img-fluid" alt=""></div>
                <div class="member-info">
              
                  <h4 class="title"><a href="faculty.php?staff_id=1266">Mr.Milton</a></h4>
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
                <div class="pic"><img src="assets/img/CIVIL/ASHNI.png" class="img-fluid" alt=""></div>
                <div class="member-info">
              
                  <h4 class="title"><a href="1362">Mr.Prakash</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Mechanical Engineering</p>
                  <div class="social">
         
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <!--<div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/CSE/PARTHEBAN.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                 
                  <h4 class="title"><a href="">Ms.A.L.Merlin Sheela</a></h4>
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
                <div class="pic"><img src="assets/img/CSE/SHINYMALAR.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  
                  <h4 class="title"><a href="">Dr.S.A.Sumi</a></h4>
                  <span>Assistant Professor</span>
                  <p>Department of Science and Humanities</p>
                  <div class="social">
      
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>-->
  
          </div>
  
        </div>
      </section><!-- End Doctors Section -->


      <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6  d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <li>Equipping the students with relevant and conceptualized professional skills and guiding them towards a bright future and career all around the world with the values of – Sincerity, Hard Work and Justice.</li>
                <li>To develop national and international links with the business organizations to be able to create meaningful relationship & opportunities for the placement of the students in the global job markets.</li>
                <li>To develop students who are globally employable & ready hands to the industry.</li>
              </div>
            </div>
  
            <div class="col-md-6  d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li>To strengthen and enhance Industry – Institute partnership by way of campus connect.</li>
                <li>To create maximum opportunities for the placements of the eligible students in the job market by establishing a rapport with the industry people.</li>
                <li>To impart personality development training to the students to face this competitive era.</li>
                <li>To provide industry-institute-interaction opportunities in order to motivate inter-disciplinary research capabilities with an inquiring mind.</li>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section --></div>


      <section id="resume" class="resume">
        <div class="container">
  
       
  
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <h3 class="resume-title">Responsibilities of Placement & Training Cell</h3>
              <div class="resume-item pb-0">
                <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                <ul>
                  <strong></strong><li>To register the names of students in the Placement Cell.</li>
                  <strong></strong><li>To collect their resume along with their mark details.</li>
                  <strong></strong><li>To train and groom the students by arranging Soft skill workshops</li>
                  <strong></strong><li>To prepare Brochures of various departments</li>
                  <strong></strong><li>To invite prospective companies to campus for recruitment.</li>
                  <strong></strong><li>To arrange facilities required on the day of interview</li>
                  <strong></strong><li>To collect appointment letters and distribute them to selected students.</li>
                  <strong></strong><li>To inform the students about various competitive examinations</li>
                  <strong></strong><li>To achieve maximum possible placements for students.</li>
                  </ul>
              </div>
            </div>
            </div>


            <div class="row">
              <div class="col-lg-12" data-aos="fade-up">
                <h3 class="resume-title">Responsibilities of Placement Officer</h3>
                <div class="resume-item pb-0">
                  <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                  <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                  <ul>
                    <strong></strong><li>To prepare brochures for departments and to send to the prospective companies by April of every year.</li>
                    <strong></strong><li>To correspond to prospective companies for interview date and schedule of events.</li>
                    <strong></strong><li>To arrange for interview facilities at the campus.</li>
                    <strong></strong><li>To receive the personnel and provide necessary inputs about the college and to co-ordinate student representatives for smooth functioning at various locations.</li>
                    <strong></strong><li>To collect the appointment letters or correspond to get them as soon as the interview is over.</li>
                    <strong></strong><li>To distribute appointment letters and collect acceptance letters from the students and dispatch to them.</li>
                    <strong></strong><li>To identify a standby placement officer to take over the responsibilities during the absence of Placement Officer.</li>
                    </ul>
                </div>
              </div>
              </div>


              <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                  <h3 class="resume-title">Responsibilities of Department Coordinators</h3>
                  <div class="resume-item pb-0">
                    <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                    <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                    <ul>
                      <strong></strong><li>The Coordinators shall take care of the placement activities of the students of their department.</li>
                      <strong></strong><li>To help the meritorious students prepare their resume at the beginning of the 7th semester.</li>
                      <strong></strong><li>Collect bio-data with students having primary eligibility at the start of the 7th semester. Verify their credentials with respect their marks sheets and once the results of a semester has been obtained, update the data and the eligible students for that semester.</li>
                      <strong></strong><li>Arrange for interview facilities at the campus and written test halls.</li>
                      <strong></strong><li>Obtain the information about possible visit from the placement officer and depending on the eligibility criteria asked by the organization, submit the bio-data of students to the placement officer.</li>
                      <strong></strong><li>Identify two student representatives for the department who will actively participate in placement work.</li>
                      <strong></strong><li> Inform the students about the date and time of interview.</li>
                      <strong></strong><li>Be present at the time of interview on a date given along with the two student representatives.</li>
                      <strong></strong><li>Regulate students who have to be interviewed as per the order given by the employer.</li>
                      <strong></strong><li>Collect the list of selected students and inform the students individually.</li>
                      <strong></strong><li>Should inform the date and time of campus interview to their department Head and should relieve oneself by adjusting the classes.</li>

                    
                    
                    </ul>
                  </div>
                </div>
                </div>


               <!--<div class="row">
                  <div class="col-lg-12" data-aos="fade-up">
                    <h3 class="resume-title">General guidelines</h3>
                    <div class="resume-item pb-0">
                      <h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                      <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>
                      <ul>
                        <strong></strong><li>Student's eligibility will be finalized on company's discretion.</li>
                        <strong></strong><li>If interviewer/s relaxes the eligibility criteria and advices the Placement & Training officer to send students for the interview, the Placement & Training officer may discuss the same with the Management and finalize.</li>
                        <strong></strong><li>The above mentioned point has to be viewed seriously. This is only to maintain the decorum and the image of the college with the visiting representatives of the organization.</li>
                        </ul>
                    </div>
                  </div>
                  </div>-->



                  <div class="row">
                    <div class="col-lg-12" data-aos="fade-up">
                      <h3 class="resume-title">Responsibilities of Department Students Representatives:</h3>
                      <div class="resume-item pb-0">
                        <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                        <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                        <ul>
                          <strong></strong><li>To collect bio-data with students having primary eligibility at the start of the 7th semester and to verifv their credentials with respect to their marks sheets and once the results of a semester has been obtained, update the data and the eligible students for that semester are listed.</li>
                          <strong></strong><li>To obtain the information about possible visit from the placement officer and depending on the eligibility criteria asked by the organization, submit the biodata of students to the placement officer.</li>
                          <strong></strong><li>To inform the students about the date and time of interview.</li>
                          <strong></strong><li>To be present at the time of interview on a date given along with the two student representatives.</li>
                          <strong></strong><li>To regulate students who have to be interviewed as per the order given by the employer.</li>        
                          </ul>
                      </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12" data-aos="fade-up">
                        <h3 class="resume-title">General guidelines for the Students</h3>
                        <div class="resume-item pb-0">
                          <!--<h4>The institution has a stated code of ethics to check malpractices and plagiarism in Research</h4>
                          <p><em>The institution has a stated code of ethics to check malpractices and plagiarism in Research which states:</em></p>-->
                          <ul>
                            <strong></strong><li>Students should attend all the Placement & training programme organized by Stella Mary's compulsorily. Those students only will be necessarily allowed to appear for the campus recruitment drive organized by Stella Mary's.</li>
                            <strong></strong><li>Even if they have the eligibility as specified by the company they will not be allowed to appear for the campus recruitment drive organized by Stella Mary's</li>
                            <strong></strong><li>Student's eligibility will be finalized on company's discretion.</li>
                            <strong></strong><li>Students should register their names in the placement office after verifying their primary eligibility conditions with their department placement coordinator. They should provide Xerox copies of all their marks while registration.</li>
                            <strong></strong><li>Bio-data of the students should be provided to the department placement Coordinator for every company visiting the campus.</li>
                            <strong></strong><li>The students should take every effort to maintain the decorum and the image of the college with the visiting representatives of the organization.</li>
                            <strong></strong><li>The Principal/Placement officer, for any reasons, receives adverse comments on the behavior and conduct of the interviewee from the interviewers; he/she may have to face severe consequences.</li>
                            <strong></strong><li>It is the responsibility of the students to look at the notices and other information from the notice board of the placement cell</li>
                            <strong></strong><li>The students must make their own arrangements such as transport, food etc. for attending the Interviews</li>          
                            </ul>
                        </div>
                      </div>
                      </div>

            </div>
            </section>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Placement History</h2>
      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
          <h3><a href="">2022-23</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #5578ff;"></i>
          <h3><a href="">2021-22</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e80368;"></i>
          <h3><a href="">2020-21</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e361ff;"></i>
          <h3><a href="">2019-20</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #47aeff;"></i>
          <h3><a href="">2018-19</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffa76e;"></i>
          <h3><a href="">2017-18</a></h3>
        </div>
      </div>
      <!--<div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #11dbcf;"></i>
          <h3><a href="">Girls Hostel</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #4233ff;"></i>
          <h3><a href="">Transport</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b2904f;"></i>
          <h3><a href="">Cafeteria</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b20969;"></i>
          <h3><a href="">Sports</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ff5828;"></i>
          <h3><a href="">Campus Activities</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #29cc61;"></i>
          <h3><a href="">Student Zone</a></h3>
        </div>
      </div>-->
    </div>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Abroad Placement</h2>
      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
          <h3><a href="">2022-23</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #5578ff;"></i>
          <h3><a href="">2021-22</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e80368;"></i>
          <h3><a href="">2020-21</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #e361ff;"></i>
          <h3><a href="">2019-20</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #47aeff;"></i>
          <h3><a href="">2018-19</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ffa76e;"></i>
          <h3><a href="">2017-18</a></h3>
        </div>
      </div>
      <!--<div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #11dbcf;"></i>
          <h3><a href="">Girls Hostel</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #4233ff;"></i>
          <h3><a href="">Transport</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b2904f;"></i>
          <h3><a href="">Cafeteria</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #b20969;"></i>
          <h3><a href="">Sports</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #ff5828;"></i>
          <h3><a href="">Campus Activities</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-check-double-line" style="color: #29cc61;"></i>
          <h3><a href="">Student Zone</a></h3>
        </div>
      </div>-->
    </div>

  </div>
</section><!-- End Features Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Words from our alumins</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Vaishnavi.jpeg" class="testimonial-img" alt="">
                  <h3>Vaishnavi M J</h3>
                  <h4>ECE - Alumni 2019-23 &amp; Software Developer @ Agile Cyber Solutions</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I am glad to share that I have achieved the remarkable milestone of securing the top position and being awarded the first mark in my class. It is with immense pride and gratitude that I extend my heartfelt thanks to each and everyone for their unwavering support and valuable contributions throughout this journey.
From the very beginning, my collective dedication to excellence and shared pursuit of knowledge have propelled me forward, allowing me to excel academically. The invaluable guidance, mentorship, and encouragement that I have received from my staffs have played a pivotal role in shaping my academic accomplishments.
Moreover, it is worth acknowledging that the exceptional educational infrastructure provided by our institution Stella Mary's College of Engineering and the unwavering support of my teachers have been instrumental in facilitating my achievement. The constant guidance and insightful feedback they have imparted have enriched my learning experience and empowered me to reach new heights. I am forever thankful..
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->




  </div>
</section><!-- End Features Section -->

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