<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> GIANTY Admin</title>
  <link rel="stylesheet" href="{{asset('public/backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/css/vendor.bundle.base.css')}}">
  <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="{{asset('public/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/js/select.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{asset('public/frontend/images/favicon.jpg')}}" />
  
</head>
<body>
  <div class="container-scroller"> 
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div>
          <a class="navbar-brand brand-logo" href="{{URL::to('/trang-chu')}}">
            <img src="{{asset('public/frontend/images/logo2.png')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Xin chào, <span class="text-black fw-bold">
                <?php
                $name= Session::get('admin_name');
                if($name){
                    echo $name;    
                }
                ?>
                </span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control1">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{URL::to('public/uploads/personal/1.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <p class="mb-1 mt-3 font-weight-semibold">
                    <?php
                    $name= Session::get('admin_name');
                    if($name){
                    echo $name;    
                }
                ?>
                </p>
                <p class="fw-light text-muted mb-0">
                    <?php
                    $email= Session::get('admin_email');
                    if($email){
                    echo $email;    
                    }
                ?>
                </p>
              </div>
              <a class="dropdown-item"href="{{URL::to('/dashboard')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Tài khoản của tôi <span class="badge badge-pill badge-danger">!</span></a>
              <a class="dropdown-item" href="{{URL::to('/logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Đăng xuất</a></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
  
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/dashboard')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tổng quan</span>
            </a>
          </li>
          <li class="nav-item nav-category">Quản lý thành phần</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Quản lý tuyển dụng</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-hiring')}}">Tổng hợp đơn xin việc</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Quản lý website</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Quản lý danh mục</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/add-category')}}">Thêm danh mục</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-category')}}">Tổng hợp danh mục</a></li>
             </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Quản lý nghề nghiệp</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/add-job')}}">Thêm nghề nghiệp</a></li>
				        <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-job')}}">Tổng hợp nghề nghiệp</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Quản lý blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-blog')}}">Thêm blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-blog')}}">Tổng hợp blog</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      @yield('admin_content')             
    </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Designed By </a> NguyenVanQuocTuan.</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
 
  <script src="{{asset('public/backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('public/backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('public/backend/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <script src="{{asset('public/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/backend/js/template.js')}}"></script>
  <script src="{{asset('public/backend/js/settings.js')}}"></script>
  <script src="{{asset('public/backend/js/todolist.js')}}"></script>
  <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
  <script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
  </script>
  <script src="{{asset('public/backend/js/dashboard.js')}}"></script>
  <script src="{{asset('public/backend/js/Chart.roundedBarCharts.js')}}"></script>
  
</body>

</html>




