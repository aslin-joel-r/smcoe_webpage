<?php
$servername = "172.18.0.1";
$username = "root";
$password = "root";
$db="mysql";
$port="33070";  
$dbcon = mysqli_connect($servername, $username, $password,$db,$port);
if (!$dbcon) {
    die("Connection failed: " .  mysqli_connect_error());
}
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">SMCE</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="https://9509e6cb.webdocs.pages.dev/SMCE%20ERP.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.html">Management</a></li>
              <li><a href="principaldesk.html">Principal's Desk</a></li>
              <li><a href="oc.html">Organisation Chart</a></li>
              <li><a href="iqac.html">IQAC</a></li>
              <li><a href="strategicplan.html">Strategic Plan</a></li>
              <li><a href="codeofconduct.html">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.html">mandatory Disclosure</a></li>
              <li><a href="#">Facts & Figures</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Under Graduate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="civil.html">Civil Engineering</a></li>
                  <li><a href="cse.html">Computer Science and Engineering</a></li>
                  <li><a href="ece.html">Electronics and Communication Engineering</a></li>
                  <li><a href="eee.html">Electrical and Electronics Engineering</a></li>
                  <li><a href="mech.html">Mechanical Engineering</a></li>
                  <li><a href="aids.html">Artificial Intelligence and Data Science</a></li>
                  <li><a href="sh.html">Science and Humanities</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Post Graduate</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="mecse.html">M.E Comuputer Science and Engineering</a></li>
                    <li><a href="meise.html">M.E Industrial Safety Engineering</a></li>
                    <li class="dropdown"><a href="#more-services" href="#"><span>Master of Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="#">Operations Management</a></li>
                        <li><a href="#">Human Resources Management</a></li>
                        <li><a href="#">Finncial Management</a></li>
                        <li><a href="#">Business Analytics Management</a></li>
                        <li><a href="#">Marketing Management</a></li>
                        <li><a href="#">Logistics & Supply Chain Management</a></li>
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
                <li><a href="#">Code of Ethics</a></li>
                <li><a href="#">Publications</a></li>
                <li><a href="#">Sponsored Projects</a></li>
                <li><a href="#">Startup Policy</a></li>
                <li><a href="#">IPR CELL</a></li>
                <li><a href="#">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.html">Sports</a></li>
          <li class="dropdown"><a href="#"><span>Students' Zone</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">Clubs</a></li>
              <li><a href="#">Professional Ethics</a></li>
              <li><a href="#">Capability Enhancement</a></li>
              <li><a href="#">E-Learning</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Campus Activities</a></li>
              <li><a href="#">Library</a></li>
              <li><a href="#">NPTEL</a></li>
              <li><a href="#">DELNET</a></li>
              <li><a href="#">Alumni Association</a></li>
              <li><a href="#">SWYAM - MOOC</a></li>
              <li><a href="#">Sports</a></li>
                <ul>
          <li><a class="nav-link scrollto" href="placement_home.html">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.html">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
          <li><a class="getstarted scrollto" href="#CAMPS">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="container">
          <h2>Artificial Intelligence and Data Science</h2>
        <p class="text-justify">The Department of Artificial Intelligence and Data Science pioneers cutting-edge algorithms and technologies to extract valuable insights from complex data, driving innovation across various industries.</p>
      </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-7">
          <img src="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" class="img-fluid" alt="">
          
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Head of the Department</h5>
            <p><a href="#">Dr.Berlin Shaheema</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Total Intake</h5>
            <p>60</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Budding Engineers</h5>
            <p>60</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Proud Alumni</h5>
            <p>0</p>
          </div>

        </div>
        <h3> Overview</h3>
          <p class="text-justify">
            Department focuses on the study and application of electrical principles, systems, and devices to design, develop, and optimize power generation, distribution, and electronic systems for various industries and applications.    
        </p>
      </div>

    </div>
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Vision & MISSION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Faculty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Non-Teaching</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Laboratory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Syllabus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Program Outcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Calender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Newsletter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Brochure</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title "><a href="">VISION</a></h4>
                <p class="description text-justify">To provide world class technical education with ethics and professionalism and to create civil engineer with high technical competencies who would full fill the challenges and needs of today’s scenario with the help of green technology.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li class="text-justify">To impart quality technical education, imbibing lifelong learning and concern for environment.</li>
                <li class="text-justify">To create job opportunities in research, industry and consultancy both nationally and internationally.</li>
                <li class="text-justify">To provide technical skills, leadership qualities and team spirit among the students.</li>
                <li class="text-justify">To establish center of excellence in emerging areas of research to find solution to the problem faced by the society.</li>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section --></div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Teaching Faculty</h2>
            <p>The pillars of Civil Engineering</p>
          </div>
  
          <div class="row justify-content-center">
            <?php
            $sql = "SELECT staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='4' GROUP BY staff_master.staff_id;";
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    
            ?>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($data['photo']);?>" class="img-fluid" alt="">
                                <div class="social">
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4 class="title"><a href="faculty.html">
                                <?php 
                                printf("%s", $data["first_name"]);
                                ?>
                                </a></h4>
                                <span>Assistant Professor</span>
                              </div>
                            </div>
                          </div>
                        <?php
                } 
            }     
                        ?>

          

            
          </div>
        </div>
      </section><!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Non-Teaching Faculty</h2>
            <p>The supporting hands of Civil Engineering</p>
          </div>
  
          <div class="row justify-content-center">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/CIVIL/SATHEESH.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="">Mr.Satheesh</a></h4>
                  <span>Lab Instructor</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/CIVIL/JOHNABISHA.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="">Mrs.John Abisha</a></h4>
                  <span>Lab Instructor</span>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="assets/img/CSE/Gopi.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Mr.V.Gopi</a></h4>
                    <span>Lab Instructor</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section><!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Environmental Engineering Laboratory</h3>
                  <p class="fst-italic text-justify">In this laboratory the students will be able to know the common environmental experiements relating to water and wastewater quality.</p>
                  <strong>Experiments</strong> <li class="text-justify"> Determination of Ammonia Nitrogen in wastewater, Coagulation and Precipitation process for treating waste water, Determination of suspended, volatile, fixed and settleable solids in wastewater,B.O.D. test,C.O.D. test, Nitrate in wastewater,Phosphate in wastewater, Determination of Calcium, Potassium and Sodium, Heavy metals determination - Chromium, Lead and Zinc.(Demonstration only)</li>
                  <strong>Equipments</strong> <li class="text-justify"> Oxygen analyzer,Spectrophotometer, Ion – selective electrode, Sodium Potassium Analyzer – Flame Photometer 5.Gas Chromatography, Atomic absorption spectroscopy (Ni, Zn, Pb),Nephlo-turbidity me ter, BOD Analyser,COD Analyser,Jar Test Apparatus.</li>
                       
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/CM.png" alt="" class="img-fluid">
                </div>
              </div>
            
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Soil Mechanics Laboratory</h3>
                  <p class="fst-italic">Students will able to identify physical and mechanical properties of soil in the field and laboratory settings. This include preparing soil samples for testing, performing the test, collecting and analyzing data, interpreting the results and writing technical reports.</p>
                  <strong>Experiments</strong> <li> Determination of index properties, Permeability determination (constant head and falling head methods), One dimensional consolidation test (Determination of co-efficient of consolidation only),Direct shear test in cohesion-less soil,Unconfined compression test in cohesive soil,Laboratory vane Shear test in cohesive soil ,Tri-axial compression test in cohesion-less soil(Demonstration only),California Bearing Ratio Test.</li>
                  <strong>Equipments</strong> <li> Sieves,Hydrometer,Liquid and plastic limit apparatu, Shinkage limit apparatus,Proctor compaction apparatus, UTM of minimum of 20KN capacity,Direct shear apparatus , Thermeometer, Field den sity measuring device ,Triaxial shear apparatus , Three gang consolidation test device,</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Strength of materials Laboratory</h3>
                  <p class="fst-italic">Demonstrating the basic principles in the area of strength and mechanics of materials and structural analysis to the students through a series of experiments.</p>
                  <strong>Experiments</strong> <li> Tension test on mild steel rod,Compression test on wood, Double shear test on metal,Torsion test on mild steel rod , Impact test on metal specimen (Izod and Charpy) , Hardness test on metals (Rockwell and Brinell Hardness Tests), Deflection test on metal beam,Compression test on helical spring, Deflection test on carriage spring,Test on Cement.</li>
                  <strong>Equipments</strong> <li> UTM of minimum 400 kN capacity,Torsion testing machine for steel rods,Izod impact testing machine,Hardness testing machine, Beam deflection test apparatus,Extensometer,Compressometer, Dial gauges,Le Chatelier’s apparatus,Vicat’s apparatus, Mortar cube moulds.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Survey Laboratory</h3>
                  <p class="fst-italic">Students learn techniques for gathering field data with both traditional and modern instruments and demonstrate their proficiency on weekly lab exercises and a comprehensive semester project and final exam.</p>
                  <strong>Experiments</strong> <li> Study of theodolite,Measurement of horizontal angles by reiteration and repetition and vertical angles,Theodolite survey traverse,Heights and distances - Triangulation - Single plane method,Tacheometry - Tangential system - Stadia system - Subtense system,Setting out works - Foundation marking - Simple curve (right/ left-handed) - Transition curve, Field observation for and Calculation of azimuth,Field work using Total Station.</li>
                  <strong>Equipments</strong> <li> Total Station,Theodolites Atleast 1 for every,Dumpy level, Plane table,Pocket stereoscope,Ranging rods,Levelling staff , Cross staff, Chains,Tapes, Arrows, Hand held GPS.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Concrete and Highway Laboratory</h3>
                  <p class="fst-italic">The behavior and properties of structural materials, e.g. concrete, asphalt and steel can be better understood by detailed, well-designed, first hand experience with these materials. The students will become familiar with the nature and properties of these materials by conducting laboratory tests.</p>
                  <strong>Experiments</strong> <li> Tests on fresh concrete,Test on hardener concrete,Theodolite survey traverse,Test on aggregates, Tests on bitumen, Test on bitumen mixes.</li>
                  <strong>Equipments</strong> <li> Concrete cube moulds,Concrete cylinder moulds,Concrete Prism moulds, Sieves,Concrete Mixer,Slump cone,Flow table,Vibrator,Trovels and planers, UTM – 400 kN capacity,Vee Bee Consistometer,Aggregate impact testing machine,CBR Apparatus,Los - Angeles abrasion testing machine, Marshall Stability Apparatus.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Hydraulics Engineering laboratory</h3>
                  <p class="fst-italic">The main objective of this lab is to build fundamental concepts combined with strong analytical and problem solving abilities that would form the backbone of many other subjects in higher educations</p>
                  <strong>Experiments</strong> <li> Flow measurement,Losses in pipes,Pumps,Turbines, Determination of metacentric height.</li>
                  <strong>Equipments</strong> <li> Bernoulli’s theorem – Verification Apparatus, Calculation of Metacentric height water tank Ship model with accessories,Measurement of velocity Pitot tube assembly, Venturimeter,Orificemeter,Flow through mouthpiece, Centrifugal pump assembly with accessories (single stage), Centrifugal pump assembly with accessories (multi stage), Reciprocating pump assembly with accessories, Deep well pump assembly set with accessories.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
          
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-12 details order-2 order-lg-1">
                  <h3>Achievements</h3>
                  <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                  <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                 <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      2021
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>All the computer science department students</strong> <li> haveparticipated in the Lecture Series on “ Mobile Application Development using Android Studio “ held on 22-05-2021 organized by Institution’s Innovative Councilin association with Department of Computer Science andEngineering,Stella Mary’s College of Engineering.</li>
                      <strong>All the computer science department students</strong> <li>have participated in the Lecture Serieson “ InnovationinNetworkSimulationusingNS2 ” held on 29-05-2021 organized by Institution’s Innovative Councilin association with Department of Computer Science andEngineering,Stella Mary’s College of Engineering. </li>
                      <strong>All the computer science department students</strong> <li> have participated in the Lecture Series on “Opportunities inSoftware Testing ”held on 21-05-2021 organized by Institution’s Innovative Councilin association with Department of Computer Science and Engineering, StellaMary’s College of Engineering.</li>
                      
                    
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      2020
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>K.Lakshmi Prabha</strong> <li> second year CSE participated a Webinar on "DEVOPS" organized by Star Certification on 11th May 2020.</li>
                      <strong>J.ShaksiyaBrindha Mol</strong> <li> second year CSE participated in a Webinar on "Data Science for Engineers" organized by Sri Eswar College of Engineering, Coimbatore on 13th May 2020.</li>
                      <strong>J.ShaksiyaBrindha Mol</strong> <li> econd year CSE participated in a Webinar on "Artificial Intelligence and Machine Learning" organized by Sri Eswar College of Engineering, Coimbatore on 14th May 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended One Day Live Webinar on "Employability Skills for the Future” presented by Mr. Daniel Jacob, Vice President, HR EC Group International on 20th May 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended one day Live Webinar on "Data Science and its Applications” presented by Mr.DilipMuralidaran, Senior Technical Instructor, Splunk on 9th June 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended one day Live Webinar on "Internet of Things” presented by Mr. Solomon Ashok, Director, Splendio Technologies on 18th June 2020.</li>
                      <strong>All the students of Computer Science Department</strong> <li> have attended one day Live Webinar on "Explore Yourselves in Real time Projects” presented by Mrs. Sandhi Durairaj on 18th June 2020.</li>
                      <strong>Dhamodaran.N</strong> <li> third year student won first prize inDebugging held at St.Xavier's College of Engineering on7th February 2020.</li>
                      <strong>Renold.A</strong> <li>third year student won second prize in WebDesigning held at St.John's College of Arts and Science on11th February 2020. </li>
                      <strong>Dhamodaran.N</strong> <li> third year student won second prize inSmart Coding held at St.John's College of Arts and Scienceon 11th February 2020.</li>
                      <strong>Ashik Christo Mourin.M</strong> <li>second year student won firstprize in Paper Presentation and Cinematography held atPonjesly College of Engineering on 22nd February 2020. </li>
                      <strong>Dhamodaran.N</strong> <li> third year student won first prize inCode Debugging held at Ponjesly College of Engineeringon 22nd February 2020.</li>
                      <strong>Ashik Christo Mourin.M</strong> <li> second year student wonsecond prize in Project Presentation held at PonjeslyCollege of Engineering on 22nd February 2020.</li>
                      <strong>Dhamodaran.N</strong> <li>third year student won second prize inWeb Designing and Technical Quiz held at PonjeslyCollege of Engineering on 22nd February 2020. </li>
                  

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      2019
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>M.Jayindra, K.Lakshmi Prabha</strong> <li> second year haveparticipated and presented a paper as a part ofKRYPTOZ in Mar Ephraem College of Engineeringon 8th August 2019.</li>
                      <strong>Minisha P.M</strong> <li> of final year presented a paper entitled"Sentimental Analysis of Twitter Data" in BethlehemCollege of Engineering on 9th August 2019.</li>
                      <strong>K.Lakshmi Prabha</strong> <li>second year has participatedand presented a paper in Bethlehem College Of Engineering on 9th August 2019. </li>
                      <strong>Minisha P.M </strong> <li> final year presented a paper entitled"Sentimental Analysis of Twitter Data " in LoyalaInstitute of Technology on 31st August 2019.</li>
                      <strong>Ashik Christo Mourin.M</strong> <li> ofthird year presented a paperentitled "Integration of CloudComputing with Internet ofThings" and won second prizein Loyala Institute ofTechnology on 31st August2019.</li>
                      <strong>Minisha M.P</strong> <li> third year student presented a paper entitled“Sentimental Analysis of Twitter Data" and secured first prize inStella Mary's College of Engineering, Azhikal on 20th February2019.</li>
                      <strong>Minisha M.P</strong> <li> third year has participated and secured third prize in Tech Talk, National Level Technical Symposium held at Stella Mary’s College of Engineering on 20th February 2019.</li>
                      <strong>Akshai.R</strong> <li>third year student presented a paper entitled"Crossed-Dipole Arrays for DS-CDMA Systems" held at PonjeslyCollege of Engineering on 2nd February 2019. </li>
                      <strong>J. Joel David</strong> <li> third year student presented a paper entitled "Riskbased Estimation of Manufacturing Order Cost with ArtificialIntelligence" in Ponjesly College of Engineering on 2nd February2019.</li>
                      <strong>Minisha.M.P</strong> <li> third year has participated and secured first prizein the paper presentation in Just a Minute & Quiz, National LevelTechnical Symposium held at Ponjesly College of Engineering on2nd February 2019.</li>
                      <strong>J.Joel David</strong> <li> third year has participated and secured secondprize in Photography, National Level Technical Symposium held atRajas College of Engineering on 2nd February 2019. </li>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      2018
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>B.Aishwarya</strong> <li> third year student presented a PaperPresentation on 5G Wireless Technology, National LevelTechnical Symposium held at Rajas International Instituteof Technology on 5th October 2018.</li>
                      <strong>B.Aishwarya</strong> <li> third Year has participated and securedfirst prize in Code Debugging, National Level TechnicalSymposium held at Rajas College of Engineering on 5thOctober 2018.</li>
                      <strong>B.Aishwarya</strong> <li> third year student presented a paper entitled "A Smart Home Energy Management System Using Big Data Analytics" on National Level Technical Symposium in Rajas International Institute of Technology on 28th September 2018.</li>
                      <strong>Ajini A.V</strong> <li> Final year student got third place in Technical Quiz organized by Rohini college Of Engineering &Technology on 20th March 2018.</li>
                      <strong>Ajini A.V</strong> <li> Final year student got second place in paper presentation in National Level Technical Symposium held at Kalaivanar N.S.K College of Engineering on 16th March 2018.</li>
                      <strong>A.George Stalin Britto</strong> <li> Final year student wonfirst prize in ElocutionCompetition held at St.Hindu College,Nagercoil (NationalVoters Day on 25thJanuary 2018).</li>
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      2017
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Archana Vijayan and Catherine SethiRaj.K</strong> <li>secondyear have participated and presented a paper entitled"Location Privacy preserving using Semi-TTP Server" inHeera College of Engineering and Technology,Trivandrum on 11th September 2017. </li>
                      <strong>Artheya R.S, Prabha.S and Priyanka Lidiya.P</strong> <li>secondyear have participated and presented a paper entitled "ANew Method of Text Categorization and Summarizationwith Fuzzy Confusion Matrix" in Heera College ofEngineering and Technology, Trivandrum on 11thSeptember 2017. </li>
                      <strong>Ashwini Priya.J, JeyaBrintha.M.R</strong> <li> hird year have participated and presented a paper entitled "Novel Algorithm for Finding the Closest l-mers in Biological Data" and secured second prize held at Marian Engineering College, Trivandrum on 4th September 2017.</li>
                      <strong>M.SornaRevathy and W.SherlinVivitha</strong> <li>Second year students presented a paper entitled "Effective Method for Energy Saving" in Rohini College of Engineering on 21st February 2017. </li>
                      <strong>M.SoranaRevathy and W.SherlinVivitha</strong> <li> Second yearstudents presented a paper entitled "Effective Method forEnergy Saving" in Arunachala College of Engineering forWomen on 25th January 2017.</li>
                      <strong>Sheeba Ann Thomas and SahayaNishanthini.M</strong> <li> Finalyear students presented a paper entitled "A Real Time EventDetection and Notification Listing Social Media" inArunachala College of Engineering for Women on 25thJanuary 2017.</li>
                      <strong>Ajini.A.V and Gokul Priya.C</strong> <li> third year studentspresented a paper entitled "Security Issues IRV6:AComprehensive Overview" in Arunachala College ofEngineering for Women on 25th January 2017.</li>
                     
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      2016
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>George Stalin Britto</strong> <li>third year student presented a paperentitled "A Secured Dynamic Multi-Keyword Ranked SearchScheme Over Encrypted Cloud Data” and secured secondprize held at Marian Engineering College, Trivandrum on23rd August 2016. </li>
                      <strong>Anusha.V</strong> <li>Final year Student presented a paper entitled"Providing User Security Guarantees in Public InfrastructureClouds" held at Marian Engineering College, Trivandrum on23rd August 2016. </li>
                      <strong>S.Sahaya Aswin Binu</strong> <li>Third year student presented a paperentitled "Efficient Wireless Multimedia Multicast inMulti-rate Multichannel Mesh Network" held at MarianEngineering College, Trivandrum on 23rd August 2016. </li>
                      <strong>A.NaveenAmreesh</strong> <li> Final year student presented a papertitled "Real Time Big Data Delivery in Wireless Network"held at Marian Engineering College, Trivandrum on 23rdAugust 2016.</li>
                      <strong>B.Anusha</strong> <li> third year CSE presented a paper entitled"LI-FI TECHNOLOGY" in Arunachala College ofEngineering for Women on 16th March 2016.</li>
                      <strong>M.Sahaya Nishanthini</strong> <li>third year has participated andsecured first prize in the Tech Connect Contest of the IETsponsored National Level Technical Symposium held atArunachala College of Engineering for Women on 16thMarch 2016. </li>
                      <strong>Sheeba Ann Thomas</strong> <li> third year presented a paper entitled "Effective Machine to Machine Communication in Smart Cord Network" in Stella Mary’s College of Engineering on 10th March 2016.</li>
                      <strong> I.Nagorin</strong> <li>third year presented a paper entitled "Effective Machine to Machine Communication in Smart Cord Network" in Stella Mary’s College of Engineering on 10th March 2016. </li>
                      <strong>M.Sahaya Nishanthini</strong> <li>has attended one day workshop on "Personality Development" in Noorul Islam Centre for Higher Education on 1st March 2016. </li>
                      <strong>A.Naveen Amrish</strong> <li>third year presented a paper entitled “A General Self Organized Tree Based-Energy Balance Routing Protocol for Wireless Sensor Networks" in Bethlahem Institute of Engineering on 27/2/2016. </li>
                      <strong>A.Naveen Amrish</strong> <li> has attended two days workshop on "Android Mobile Application Development" in Rohini College of Engineering on 18/2/2016 - 19/2/2016.</li>
                      <strong>Third year CSE girls</strong> <li>attended one day workshop on "Mobile Application Development” organized by Arunachala College of Engineering on 8th February 2016. </li>
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->
                
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="">Regulation 2021</a></h4>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="">Regulation 2017</a></h4>
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                  <h4 class="title"><a href="">Programme Outcomes</a></h4>
                  </div>
              </div>
              <div class="col-md-7 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                  <h4 class="title"><a href="">Program Specfic Outcomes</a></h4>
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-8">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2018-19 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2018-19 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2019-20 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2019-20 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2020-21 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2020-21 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2021-22 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2021-22 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2022-23 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2022-23 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2023-24 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2023-24 EVEN</a></h4>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-9">
                <div class="row">
                    <section id="features" class="features">
                        <div class="container">
                  
                          <div class="section-title" data-aos="fade-up">
                            <h2>Newsletter</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
                  
                          <div class="row" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-lg-3 col-md-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffbb2c;"></i>
                                <h3><a href="">APRIL 2016</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #5578ff;"></i>
                                <h3><a href="">NOVEMBER 2016</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                <h3><a href="">APRIL 2017</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e361ff;"></i>
                                <h3><a href="">NOVEMBER 2017</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #47aeff;"></i>
                                <h3><a href="">APRIL 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffa76e;"></i>
                                <h3><a href="">NOVEMBER 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #11dbcf;"></i>
                                <h3><a href="">APRIL 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #4233ff;"></i>
                                <h3><a href="">NOVEMBER 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b2904f;"></i>
                                <h3><a href="">APRIL 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b20969;"></i>
                                <h3><a href="">NOVEMBER 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ff5828;"></i>
                                <h3><a href="">APRIL 2021</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #29cc61;"></i>
                                <h3><a href="">NOVEMBER 2021</a></h3>
                              </div>
                            </div>
                          </div>
                  
                        </div>
                      </section><!-- End Features Section -->
                      </div>
                      </div>
                      <div class="tab-pane" id="tab-10">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>Brochure</h2>
                                    <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                                  </div>
                          
                                  <div class="row" data-aos="fade-up" data-aos-delay="300">
                                    <div class="col-lg-3 col-md-4">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                                        <h3><a href="">AJAX BASICS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                                        <h3><a href="">BOOTSTRAP</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #e80368;"></i>
                                        <h3><a href="">HADOOP</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                                        <h3><a href="">MACHINE LEARNING AND DATA ANALYTICS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-bar-chart-box-line" style="color: #47aeff;"></i>
                                        <h3><a href="">MATLAB</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #ffa76e;"></i>
                                        <h3><a href="">MOBILE APP DEVELOPMENT</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #11dbcf;"></i>
                                        <h3><a href="">NETWORK STORAGE CONCEPTS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-disc-line" style="color: #4233ff;"></i>
                                        <h3><a href="">NS2</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-anchor-line" style="color: #b2904f;"></i>
                                        <h3><a href="">U-TURN MOTIVATION OF ENGINEERS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #b20969;"></i>
                                        <h3><a href="">WEB DESIGNING USING WORDPRESS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #ff5828;"></i>
                                        <h3><a href="">WEB DEVELOPMENT</a></h3>
                                      </div>
                                    </div>
                                  </div>
                          
                                </div>
                              </section><!-- End Features Section -->
                              </div>
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