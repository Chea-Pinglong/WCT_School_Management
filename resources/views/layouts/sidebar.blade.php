<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
           <li>
            <a href="{{route('Admin.Teacher')}}">
              <i class="bi bi-person"></i>
              <p>Teacher</p>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.Attendance')}}">
              <i class="bi bi-person-check-fill"></i>
              <p>Attendance</p>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.Class')}}">
              <i class="bi bi-book"></i>
              <p>Class</p>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.Schedule')}}">
              <i class="bi bi-clock"></i>
              <p>Schedule</p>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.Result')}}">
              <i class="bi bi-file-check"></i>
              <p>Result</p>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.Calender')}}">
              <i class="bi bi-calendar3"></i>
              <p>Calender</p>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.Student')}}">
              <i class="bi bi-mortarboard"></i>
              <p>Student</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="{{route('Admin.index')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Profile</p>
            </a>
          </li>
        </ul>
    </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
  
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>