<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" id="layout-menus" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Student Dashboard</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
  <!-- Owl Carousel css  -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <!-- style css  -->
  <link rel="stylesheet" href="assets/css/demo.css" />
  <!-- website css  -->
  <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
  <!-- Responsive css  -->
  <link rel="stylesheet" href="assets/css/Responsive.css">

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->


  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->
  <script src="assets/js/config.js"></script>

</head>

<body>


  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- sidebar -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme " data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="app-brand demo px-3 ">
          <a href="./my-course.php">
            <img src="assets/img/New/logo.png" class="img-fluid" alt="">
          </a>
          <!-- <a href="javascript:void(0);" class="layout-menu-toggle d-xl-none shadow bg-white menu-link text-large ms-auto"> -->
          <a href="javascript:void(0);" class="layout-menu-toggle d-xl-none shadow bg-white menu-link text-large ms-auto">
            <!-- <i class="bx bx-chevron-left bx-sm "></i> -->
            <iconify-icon icon="ph:x-bold" class="align-middle fs-25 p-1" style="color: #586a84;"></iconify-icon>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <li class="menu-item mt-2 sidebarmenu  active ">
            <a href="./my-course.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div class="text-truncate secondary-font">My Course</div>
            </a>

          </li>
          <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Assignment-List.php" class="menu-link">
              <!-- <i class=" bx bx-calendar"></i> -->
              <iconify-icon icon="material-symbols-light:assignment-add-outline" class="menu-icon tf-icons"></iconify-icon>
              <div class="text-truncate secondary-font">Assignment</div>
            </a>
          </li>
          <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Forum-list.php" class="menu-link">
              <!-- <i class=" bx bx-chat"></i> -->
              <iconify-icon icon="fluent-mdl2:survey-questions" class="menu-icon tf-icons"></iconify-icon>
              <div class="text-truncate secondary-font">Forum</div>
            </a>
          </li>
          <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Gk-list-1.php" class="menu-link">
              <!-- <i class="bx bx-calendar"></i> -->
              <iconify-icon icon="carbon:ibm-watson-knowledge-catalog" class="menu-icon tf-icons"></iconify-icon>
              <div class="text-truncate secondary-font">GK</div>
            </a>
          </li>
          <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Personal-Details.php" class="menu-link">
              <!-- <i class="menu-icon tf-icons bx bx-chat"></i> -->
              <iconify-icon icon="uil:info-circle" class="menu-icon tf-icons"></iconify-icon>
              <div class="text-truncate secondary-font">Personal Details</div>
            </a>
          </li>
          <!-- <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Mock-Tests.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-calendar"></i>
              <div class="text-truncate secondary-font">Mock Test</div>
            </a>
          </li>
          <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Ebooks.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-chat"></i>
              <div class="text-truncate secondary-font">Ebooks</div>
            </a>
          </li> -->
          <li class="menu-item mt-2 sidebarmenu ">
            <a href="#" class="menu-link">
              <i class="bx bx-power-off fs-20 me-2" style="color: #697a8d;"></i>
              <div class="text-truncate secondary-font">Logout</div>
            </a>
          </li>
          <!-- <li class="menu-item mt-2 sidebarmenu ">
            <a href="./Order-History.php" class="menu-link">
              <iconify-icon icon="ri:links-fill" class="fs-20 me-2" style="color: #697a8d;"></iconify-icon>
              <div class="text-truncate secondary-font">Order History</div>
            </a>
          </li> -->
        </ul>
      </aside>
      <!-- / sidebar-->
      <!-- Layout container -->
      <div class="layout-page">

        <!-- header -->
        <nav class="layout-navbar  container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


            <a href="javascript:void(0);" class="layout-menu-toggle d-xl-block d-none me-2 menu-link text-large">
              <iconify-icon icon="humbleicons:bars" class="fs-24 heading-text" style="color: #586a84;"></iconify-icon>
            </a>

            <!-- Search -->
            <div class="navbar-nav d-sm-block d-none align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <form action="#" autocomplete="off">
                  <div class="input-group flex-nowrap">
                    <span class="input-group-text border-0 bg-light-card" id="addon-wrapping"><iconify-icon icon="ic:baseline-search" class="fs-20" style="color: #586a84;"></iconify-icon></span>
                    <input type="text" class="form-control border-0 bg-light-card py-1 px-4 " placeholder="Search here...">
                  </div>
                </form>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav gap-sm-1 gap-2 flex-row align-items-center ms-auto">

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./Personal-Details.php">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle fw-medium  text-color-2">My Profile</span>
                    </a>
                  </li>


                  <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle fw-medium  text-color-2">Log Out</span>
                </a>
              </li>
            </ul>
            </li>
            <!--/ User -->
            </ul>
          </div>


          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
          </div>


        </nav>
        <!-- / header -->

        <!-- Content wrapper -->
        <div class="content-wrapper">


          <script>
            const sidebarmenu = document.querySelectorAll(".sidebarmenu");
            sidebarmenu.forEach(item => {
              item.addEventListener("click", function() {
                sidebarmenu.forEach(item => {
                  item.classList.remove("active");
                });
                this.classList.add("active");
              });
            });
          </script>