@extends('layouts.navbar')
@section('navbar')
  

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      @include('layouts.sidebar')
    </div>
    <div class="main-panel">
      
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Notifications</h5>
                <p class="card-category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-plain">
                      <div class="card-header">
                        <h5 class="card-title">Notifications Style</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <span>This is a plain notification</span>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span>This is a notification with close button.</span>
                        </div>
                        <div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                          <span data-notify="message">This is a notification with close button and icon.</span>
                        </div>
                        <div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span data-notify="icon" class="nc-icon nc-chart-pie-36"></span>
                          <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-plain">
                      <div class="card-header">
                        <h5 class="card-title">Notification states</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-primary alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title">
                        Notifications Places
                        <p class="category">Click to view notifications</p>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          {{-- <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div> --}}
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
@endsection