<!DOCTYPE html>
<html lang="en">
<html lang="{{ app()->getLocale() }}">

<head >

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clinic Management</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Custom fonts for this template-->
  <link href="{{ url('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="{{ url('/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ url('/css/w3.css') }}" rel="stylesheet">
  <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ url('/css/dbuttons.css') }}" rel="stylesheet">
  <link href="{{ url('/css/bluetable.css') }}" rel="stylesheet">


</head>

<body id="page-top" style="margin: -10px;" >

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
        <img src="{{ asset('/img/1staidkit.png')}}" alt="no logo" class="responsive" style="width: 30%; height: auto;">
        <div class="sidebar-brand-text mx-3" style="font-size: 12px;"><h6><b>Clinic Management</b></h6></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{ url ('/docsappointment/calendartasks') }}">
          <i class="fas fa-clipboard-list"></i>
          <span>Tasks</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url ('/docsappointment/medicines') }}">
          <i class="fas fa-pills"></i>
          <span>Medicines</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html"><link rel="icon" href="{{ asset('img/myimage.png') }}"/>Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dr. {{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="data:image/jpeg;base64,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">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ url('/edit/user') }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}"
                     method="POST" style="display: none;">{{ csrf_field() }}
                </form>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <div class="container">
              @yield('content')
          </div>

        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url('/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ url('/js/demo/chart-pie-demo.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  <script type="text/javascript">
      window.onload=function(){
      $('.selectpicker').selectpicker();
      $('.rm-mustard').click(function() {
        $('.remove-example').find('[value=Mustard]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-ketchup').click(function() {
        $('.remove-example').find('[value=Ketchup]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-relish').click(function() {
        $('.remove-example').find('[value=Relish]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.ex-disable').click(function() {
          $('.disable-example').prop('disabled',true);
          $('.disable-example').selectpicker('refresh');
      });
      $('.ex-enable').click(function() {
          $('.disable-example').prop('disabled',false);
          $('.disable-example').selectpicker('refresh');
      });
      // scrollYou
      $('.scrollMe .dropdown-menu').scrollyou();
      prettyPrint();
      };
    </script>

</body>

</html>