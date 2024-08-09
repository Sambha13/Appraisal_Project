<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Performance_Appraisal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/S.jpg" rel="icon">
  <link href="assets/img/sinhgad_logo.jpg" rel="sinhgad_logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
  <style> 
  #header{
    background-color: #312450;
    background-image: linear-gradient(to Right,#5e42a6,#b74e91);

  }
  #sidebar{
    background-color: #312450;
    background-image: linear-gradient(to Right,#5e42a6,#b74e91);

  }
  .tab-pane {
      padding: 30px;
	 background-color:#F0F8FF;
	 }
	
	table, th, td {
      border:none;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
      text-align: left;
    }
    table.f1 {
      width: 100%;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    .container {
      margin-top: 20px;
    }
    .card-header{
      padding-top: 10px!important;
      padding-bottom: 10px!important;
    }

    .nav>.nav-item> .nav-link{
        color:black;
    }
    .nav>.nav-item> .nav-link.active{

        background-color:#007bff;
        color:#fff;
    }
    .container {
            
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section {
            margin-bottom: 20px;
        }

        .header1,
        .subheader {
            display: flex;
            justify-content: space-between;
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .subheader {
            background-color: #d0e0f0;
        }

        .table {
            display: table;
            width: 100%;
            margin-top: 10px;
        }

        .table-row {
            display: table-row;
        }

        .table-col {
            display: table-cell;

            padding: 5px;
            text-align: center;
        }

        .guidelines {
            margin-top: 10px;
        }

        .guidelines p {
            margin: 5px 0;
        }

        .guidelines ol {
            margin: 5px 0 10px 20px;
        }

        .tbd {
            color: red;
        }

        .dropdown1 {
            cursor: pointer;
            position: relative;
            color: #007BFF;
        }

        .dropdown-content {
            display: none;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            margin-top: 5px;
            padding: 10px;
            border-radius: 4px;
            position: absolute;
            top:20px;
            z-index: 1;
        }

        .dropdown1:hover .dropdown-content {
            display: block;
        }

        .dropdown1::after {
            content: " ▼";
            font-size: 12px;
            color: #007BFF;
        }

        tbody tr td:nth-child(3),
        tbody tr td:nth-child(1) {
            text-align: center;
        }

        tbody tr:last-child td .dropdown-content{
            top: -210px;

        }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="" class="logo d-flex align-items-center">
    <img src="assets/img/S.jpg" alt="" style="border-radius:50%; height:55px; width:45px;">
        <span class="d-none d-lg-block">Sinhgad Institute </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo --> 
    <div> 
      <img src="" >

    </div>


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-1.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Bhushan Nikam</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Bhushan Nikam</h6>
              <span>Assistant Professor</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/Profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/Sinhgadportal">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>SELF APPRAISAL</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="/My_Appraisal">
              <i class="bi bi-circle"></i><span>My Appraisal</span>
            </a>
          </li>
          <li>
            <a href="/Academic_Activities">
              <i class="bi bi-circle"></i><span>Academic Activities (AA)</span>
            </a>
          </li>
          <li>
            <a href="/Professional_Extention_Activities">
              <i class="bi bi-circle"></i><span>Professional & Extention Activities (PEA) </span>
            </a>
          </li>
          <li>
            <a href="/Administration_Duties">
              <i class="bi bi-circle"></i><span>Administration Duties(AD)</span>
            </a>
          </li>
          <li>
            <a href="/Research_Contribution">
              <i class="bi bi-circle"></i><span>Research Contribution(RC)</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " href="/personal_info">
          <i class="bi bi-person"></i>
          <span>Personal Info</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-chat-4-line"></i><span>Help !</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/Contact">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Help Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div id="multiStepForm" class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
          
            <li class="nav-item">
              <a class="nav-link" id="profileone" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Step1</a>
            </li>
            
          </ul>
        </div>





<div class="tab-content" id="myTabContent">


<!-- Step 1: Your Profile -->

<section class="container">
      
        <div class="subheader">
            <div class="subtitle">3.1 Administration Duties (AD) – Essential Activity</div>
          
        </div>
        <div class="table-responsive">
        <table class="table w-100 ">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Parameter</th>
                    <th>Maximum Marks</th>
                    <th>Self Evaluation</th>
                    

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3.1</td>
                    <td >STES/SPPU Governance Responsibilities 
                        <table class="table table-bordered">
                           
                            <tr>
                            <td>Number of Responsibilities Handled</td>
                                <td><input type="number"></td>
                              
                            </tr>
                            <tr>
                                
                            </tr>
                        </table>
                        <div class="dropdown1">
                            <strong>Guidelines</strong>
                            <div class="dropdown-content">
                            <p><span class="tbd">Example to be provided</span></p>
                                <ol>
                                <li>	For each activity, Marks = 5</li>
                                    
                                </ol>
                                <p><strong>Committee Involved:</strong> Faculty Activity Committee (FAC)</p>
                                <p><strong>Input Data:</strong> FAC csv File</p>
                            </div>
                        </div>
                    </td>
                    <td>[10]</td>
                    <td>
                        <input type="text" size="10">
                    </td>
                    

                </tr>
                <tr>
                    <td>3.2</td>
                    <td>Institute Level Responsibilities
                        <table class="table table-bordered">
                           
                            <tr>
                            <td>Number of Responsibilities Handled</td>
                                <td><input type="number"></td>
                                
                            </tr>
                            <tr>
                               
                            </tr>
                        </table>
                        <div class="dropdown1">
                            <strong>Guidelines</strong>
                            <div class="dropdown-content">
                                <ol>
                                <li>	Each faculty should be associated with minimum 3 activities. </li>
                                    <li><span class="tbd">	For each activity over & above 3,Marks = 10 (Wrongly written)</span></li>
                                    <li>	For Coordinator: Member = 100%: 50%</li>
                                </ol>
                                <p><strong>Committee Involved:</strong> Faculty Activity Committee (FAC)</p>
                                <p><strong>Input Data:</strong> FAC csv File</p>
                            </div>
                        </div>
                    </td>
                    <td>[20]</td>
                    <td>
                        <input type="text" size="10">
                    </td>
                    

                </tr>
                <tr>
                    <td>3.3</td>
                    <td>Remedial Lectures, Extra Lectures, etc. conducted
                        <table class="table table-bordered">
                           
                            <tr>
                            <td>Number of Responsibilities Handled</td>
                                <td><input type="number"></td>
                               
                            </tr>
                            <tr>
                                
                            </tr>
                        </table>
                        <div class="dropdown1">
                            <strong>Guidelines</strong>
                            <div class="dropdown-content">
                                <ol>
                                <li>	Each faculty should have responsibility of minimum 3 activities.</li>
                                    <li><span class="tbd">	For each activity over & above 3 activities, Marks = 20 (Please clarify)</span></li>
                                    <li>	For Coordinator: Member = 100%:50%</li>
                                </ol>
                                <p><strong>Committee Involved:</strong> Faculty Activity Committee (FAC)</p>
                                <p><strong>Input Data:</strong> FAC csv File</p>
                            </div>
                        </div>
                    </td>
                    <td>[70]</td>
                    <td>
                        <input type="text" size="10">
                    </td>
                    

                </tr>
                
            </tbody>
        </table>
        </div>
       
    </section>
    



            
              <button type="button" class="btn btn-primary prev-tab">Previous</button>
              <button type="submit" class="btn btn-success">Submit</button>
           
          </div>
        </div>
      </div>
    </div>
  </div>


    
        

  </main><!-- End #main -->


    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sinhgad Institute</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="">MCA Student</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- jQuery and Bootstrap Bundle with Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.next-tab').click(function(){
      var nextTab = $(this).closest('.tab-pane').next().attr('id');
      $('a[href="#' + nextTab + '"]').tab('show');
    });

    $('.prev-tab').click(function(){
      var prevTab = $(this).closest('.tab-pane').prev().attr('id');
      $('a[href="#' + prevTab + '"]').tab('show');
    });
  });
</script>

</body>

</html>
