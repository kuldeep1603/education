<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manoeuvre</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="./assets/css/fontawesome-free-6.4.0-web/css/all.css" />
    <!-- owl carsouel cdn link  -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css" />
    <!-- slick slider cdn link  -->
    <link rel="stylesheet" href="./assets/css/slick.css" />
    <link rel="stylesheet" href="./assets/css/slick-theme.css" />
    <!-- swiper css  -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="./assets/css/swiper.css" />
    <!-- bootstrap5 cdn link  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- custom css link  -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- responsive css link  -->
    <link rel="stylesheet" href="./assets/css/responsive.css" />
</head>


<body>
    <!-- upper header  -->
    <section class="upper-hedaer py-08 position-relative">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <ul class="d-flex flex-wrap align-items-center gap-2 position-relative z-2">
                        <li>
                            <a class="text-white fs-15 secondary-font " href="tel:+91 8828851455">+91 8828851455 &nbsp;&nbsp;|</a>
                        </li>
                        <li>
                            <a class="text-white fs-15 secondary-font " href="mailto:manoeuvre.helpdesk.com">manoeuvre.helpdesk.com
                                &nbsp;&nbsp;|</a>
                        </li>
                        <li>
                            <a class="text-white fs-15 secondary-font " href="#">Mon - Sat: 10:00 AM - 07:00 PM</a>
                        </li>
                    </ul>
                    <img src="./assets/img/Hedaer/bg.png" class="img-fluid position-absolute pattern d-xl-block d-none" alt="">
                </div>
                <div class="col-xl-5 p-lg-0  col-lg-6 col-md-12 mt-lg-0 mt-2">
                    <ul class="d-flex flex-wrap  align-items-center gap-sm-5 gap-2">
                        <li class="d-flex gap-3 align-items-center position-relative z-2">
                            <span class="text-white fs-15 secondary-font ">Follow Us</span>
                            <ul class="d-flex flex-wrap align-items-center gap-3">
                                <li>
                                    <a href="#"><i class="fa-brands fs-14 text-white fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fs-14 text-white fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fs-14 text-white fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fs-14 text-white fa-youtube"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-flex gap-2 align-items-center">
                            <a href="#login-register" data-bs-toggle="modal" class="text-white secondary-font  fs-15">Login / </a>
                            <a href="#login-register" data-bs-toggle="modal" class="text-white secondary-font  fs-15">Register</a>
                        </li>
                        <li class="d-flex gap-1 align-items-center">
                            <a href="#" class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <iconify-icon class="fs-24 mt-1" icon="healthicons:ui-user-profile" style="color: white;"></iconify-icon>
                            </a>
                            <ul class="dropdown-menu px-3  rounded-0 " aria-labelledby="navbarDropdown">
                                <li class="d-flex justify-content-between align-items-center  border-bottom ">
                                    <a href="./student-admin/my-course.php" class="dropdown-item d-flex gap-3 align-items-center flex-wrap text-uppercase fs-16 fw-medium py-2">
                                        <iconify-icon icon="oi:home" class="fs-22 primary-color"></iconify-icon>
                                        <p class="">Dashboard</p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom ">
                                    <a href="./student-admin/my-course.php" class="dropdown-item d-flex gap-3 align-items-center flex-wrap text-uppercase fs-16 fw-medium py-2">
                                        <iconify-icon icon="websymbol:logout" class="fs-22 primary-color"></iconify-icon>
                                        <p class="">Logout</p>
                                    </a>
                                </li>
                            </ul>
                            <a href="./cart.php" class="position-relative">
                                <iconify-icon class="fs-24 mt-1" icon="mdi:cart" style="color: white;"></iconify-icon>
                                <span class="position-absolute fs-10  badge bg-danger top-0 p-1 rounded-pill badge-notifications">5</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- upper header  -->

    <!-- main header  -->
    <section class="main-header shadow">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand me-5" href="./index.php">
                    <img src="./assets/img/Hedaer/Group.png" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarheader" aria-controls="navbarheader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarheader">
                    <li class="nav-item dropdown buy-course d-none ">
                        <a href="#" class=" nav-link dropdown-toggle btn-color rounded-3 fs-15 py-2 px-4 text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Buy Courses</a>
                        <ul class="dropdown-menu px-3  rounded-0 " aria-labelledby="navbarDropdown">
                            <li class="d-flex justify-content-between align-items-center  border-bottom ">
                                <a class="dropdown-item fs-13" href="#">MBA ENTRANCE</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center  border-bottom">
                                <a class="dropdown-item fs-13" href="#">LAW ENTRANCE</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center  border-bottom">
                                <a class="dropdown-item fs-13" href="#">TISS ENTRANCE</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center  border-bottom">
                                <a class="dropdown-item fs-13" href="#">GOVERNMENT EXAMS</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center  border-bottom">
                                <a class="dropdown-item fs-13" href="#">BBA ENTRANCE</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center  border-bottom">
                                <a class="dropdown-item fs-13" href="#">HOTEL MANAGEMENT</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center  border-bottom">
                                <a class="dropdown-item fs-13" href="#">MCA ENTRANCE</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                            <li class="d-flex justify-content-between align-items-center ">
                                <a class="dropdown-item fs-13" href="#">TEACHER ENTRANCE</a>
                                <i class="fa-solid fa-caret-right"></i>
                            </li>
                        </ul>
                    </li>
                    <!-- large screen menus  -->
                    <li class="nav-item dropdown dropdown-mega position-static d-lg-block d-none">
                        <a class="nav-link dropdown-toggle text-uppercase btn-color rounded-3 fs-15 py-2 px-4 text-white" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Buy course</a>
                        <div class="dropdown-menu border-0 rounded-0 py-0">
                            <div class="mega-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 p-0 ">
                                            <div class="card rounded-0 shadow card-body border-0 ">
                                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <a href="#MBA-ENTRANCE" class="nav-link px-3 py-3 rounded-0 d-block w-100 active" id="MBA-ENTRANCE-tab" data-bs-toggle="pill" data-bs-target="#MBA-ENTRANCE" type="button" role="tab" aria-controls="MBA-ENTRANCE" aria-selected="true">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">SSC Exams</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="LAW-ENTRANCE-tab" data-bs-toggle="pill" data-bs-target="#LAW-ENTRANCE" type="button" role="tab" aria-controls="LAW-ENTRANCE" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">Banking Exams </b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>

                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="TISS-ENTRANCE-tab" data-bs-toggle="pill" data-bs-target="#TISS-ENTRANCE" type="button" role="tab" aria-controls="TISS-ENTRANCE" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">TISS Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="GOVERNMENT-EXAMS-tab" data-bs-toggle="pill" data-bs-target="#GOVERNMENT-EXAMS" type="button" role="tab" aria-controls="GOVERNMENT-EXAMS" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">Government Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="BBA-ENTRANCE-tab" data-bs-toggle="pill" data-bs-target="#BBA-ENTRANCE" type="button" role="tab" aria-controls="GOVERNMENT-EXAMS" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">BBA Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="HOTEL-MANAGEMENT-tab" data-bs-toggle="pill" data-bs-target="#HOTEL-MANAGEMENT" type="button" role="tab" aria-controls="GOVERNMENT-EXAMS" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">Hotel Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="MCA-ENTRANCE-tab" data-bs-toggle="pill" data-bs-target="#MCA-ENTRANCE" type="button" role="tab" aria-controls="MCA-ENTRANCE" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">MCA Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item border-bottom pb-2 mb-1" role="presentation">
                                                        <button class="nav-link  px-3 py-3 rounded-0 d-block w-100" id="TEACHER-ENTRANCE-tab" data-bs-toggle="pill" data-bs-target="#TEACHER-ENTRANCE" type="button" role="tab" aria-controls="MCA-ENTRANCE" aria-selected="false">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">Teacher Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 bg-body-color">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active custom-tab-pane" id="MBA-ENTRANCE" role="tabpanel" aria-labelledby="MBA-ENTRANCE-tab">
                                                    <div class="container py-3">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 border-0 py-1 bg-white shadow card-body">
                                                                    <a href="./package-select.php" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="./package-select.php" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="./package-select.php" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="./package-select.php" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="./package-select.php" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="./package-select.php" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6 col-12 mb-3">
                                                                <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                    <a href="#" class="px-3 py-2">
                                                                        <ul class="d-flex justify-content-between align-items-center">
                                                                            <li>
                                                                                <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                            </li>
                                                                        </ul>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="LAW-ENTRANCE" role="tabpanel" aria-labelledby="LAW-ENTRANCE-tab">LAW-ENTRANCE</div>
                                                <div class="tab-pane fade" id="TISS-ENTRANCE" role="tabpanel" aria-labelledby="TISS-ENTRANCE-tab">TISS ENTRANCE</div>
                                                <div class="tab-pane fade" id="GOVERNMENT-EXAMS" role="tabpanel" aria-labelledby="GOVERNMENT-EXAMS-tab">GOVERNMENT-EXAMS</div>
                                                <div class="tab-pane fade" id="BBA-ENTRANCE" role="tabpanel" aria-labelledby="BBA-ENTRANCE-tab">BBA ENTRANCE</div>
                                                <div class="tab-pane fade" id="HOTEL-MANAGEMENT" role="tabpanel" aria-labelledby="HOTEL-MANAGEMENT-tab">GOVERNMENT-EXAMS</div>
                                                <div class="tab-pane fade" id="MCA-ENTRANCE" role="tabpanel" aria-labelledby="MCA-ENTRANCE-tab">MCA ENTRANCE</div>
                                                <div class="tab-pane fade" id="TEACHER-ENTRANCE" role="tabpanel" aria-labelledby="TEACHER-ENTRANCE-tab">TEACHER ENTRANCE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- large screen menus  -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <!-- small screen menus  -->
                        <li class="nav-item dropdown dropdown-mega d-lg-none d-block position-static">
                            <a class="nav-link dropdown-toggle text-uppercase" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Exam</a>
                            <div class="dropdown-menu border-0 rounded-0 py-0">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul>
                                                    <li class="border-bottom pb-2 mb-1">
                                                        <a class=" w-100 d-block" data-bs-toggle="collapse" href="#SSC-Exams" role="button" aria-expanded="false" aria-controls="SSC-Exams">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">SSC Exams</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                        <div class="collapse" id="SSC-Exams">
                                                            <div class="card card-body">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 border-0 py-1 bg-white shadow card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium text-ellipsis heading-text">CAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/MBACET.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">MBACET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/CMAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">CMAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 bg-white shadow border-0 py-1  card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/TISS-ENTRANCE.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium heading-text">TISSNET</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="border-bottom pb-2 mb-1">
                                                        <a class=" w-100 d-block" data-bs-toggle="collapse" href="#Banking-Exams" role="button" aria-expanded="false" aria-controls="Banking-Exams">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">Banking Exams </b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                        <div class="collapse" id="Banking-Exams">
                                                            <div class="card card-body">
                                                                <div class="container">
                                                                    <div class="row ">
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 border-0 py-1 bg-white shadow card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium text-ellipsis heading-text">CAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="border-bottom pb-2 mb-1">
                                                        <a class=" w-100 d-block" data-bs-toggle="collapse" href="#TISS-Entrance" role="button" aria-expanded="false" aria-controls="TISS-Entrance">
                                                            <ul class="d-flex justify-content-between align-items-center">
                                                                <li class="d-flex gap-3 align-items-center">
                                                                    <img src="./assets/img/Hedaer/mega-menus.png" class="img-fluid w-25a" alt="">
                                                                    <b class="fw-medium fs-15 heading-text">TISS Entrance</b>
                                                                </li>
                                                                <li>
                                                                    <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                        <div class="collapse" id="TISS-Entrance">
                                                            <div class="card card-body">
                                                                <div class="container">
                                                                    <div class="row ">
                                                                        <div class="col-xl-4  col-sm-6 col-12 mb-3">
                                                                            <div class="card px-0 border-0 py-1 bg-white shadow card-body">
                                                                                <a href="#" class="px-3 py-2">
                                                                                    <ul class="d-flex justify-content-between align-items-center">
                                                                                        <li>
                                                                                            <img src="./assets/img/Hedaer/cAT.png" class="w-30 object-fit-contain img-fluid" alt="">
                                                                                        </li>
                                                                                        <li>
                                                                                            <p class="fs-14 fw-medium text-ellipsis heading-text">CAT</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <iconify-icon icon="ant-design:caret-up-filled" style="color: #333;" rotate="90deg"></iconify-icon>
                                                                                        </li>
                                                                                    </ul>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- small screen menus  -->
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" aria-current="page" href="./result-page.php">Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" aria-current="page" href="./Career.php">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" aria-current="page" href="./Event.php">Event</a>
                        </li>
                        <li class="nav-item dropdown buy-course ">
                            <a href="#" class=" nav-link dropdown-toggle text-uppercase rounded-3 fs-16 py-2 px-4 text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Connect Us</a>
                            <ul class="dropdown-menu px-3  rounded-0 " aria-labelledby="navbarDropdown">
                                <li class="d-flex justify-content-between align-items-center  border-bottom ">
                                    <a class="dropdown-item text-uppercase fs-16" href="./contact.php">Contact Us</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item text-uppercase fs-16" href="./Course-Enquiry.php">Course Enquiry</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item text-uppercase fs-16" href="./Support.php">Support / Help</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item text-uppercase fs-16" href="./B2B-Associates.php">B2B Associates</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <div class="btn-group dropstart Find-Us-on">
                                        <a class="text-uppercase fs-16 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Find Us on
                                        </a>
                                        <ul class="dropdown-menu px-3 rounded-0 py-1">
                                            <li class=" border-bottom"> <a class="dropdown-item text-uppercase fs-16 py-1" href="#">Youtube</a></li>
                                            <li class=" border-bottom"> <a class="dropdown-item text-uppercase fs-16 py-1" href="#">Instagram</a></li>
                                            <li class=" border-bottom"> <a class="dropdown-item text-uppercase fs-16 py-1" href="#">Facebook</a></li>
                                            <li class=" border-bottom"> <a class="dropdown-item text-uppercase fs-16 py-1" href="#">Linkedin</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown buy-course ">
                            <a href="#" class=" nav-link dropdown-toggle  rounded-3 fs-16 py-2 px-4 text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown">OTHER</a>
                            <ul class="dropdown-menu px-3  rounded-0 " aria-labelledby="navbarDropdown">
                                <li class="d-flex justify-content-between align-items-center  border-bottom ">
                                    <a class="dropdown-item  text-uppercase fs-16" href="./result-page.php">Result</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item  text-uppercase fs-16" href="./blog.php">Blog</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item  text-uppercase fs-16" href="./Event.php">Event</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item  text-uppercase fs-16" href="./gallery.php">Gallery</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center  border-bottom">
                                    <a class="dropdown-item  text-uppercase fs-16" href="./student-admin/Gk-list-1.php">GK/CA</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- main hedaer  -->
    <!-- <a href="#before-expiry" data-bs-toggle="modal">Before expiry</a>
    <a href="#After-expiry" data-bs-toggle="modal">After expiry</a> -->

    <!-- login with email -->
    <div class="modal fade" id="email-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-start">Welcome to <span class="primary-color section-heading fs-4 text-start">Manoeuvre</span></h3>
                                <p class="heading-text fs-5 mt-1 mb-3 fw-medium">Login</p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="email" name="" class="form-control" placeholder="email address" id="">
                                </div>
                                <div class="col-12  mb-4 position-relative">
                                    <input type="text" name="" class="form-control" placeholder="Password" id="password">
                                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                                        <i class="fa fa-eye-slash"></i>
                                    </span>
                                </div>
                                <div class="col-12 mb-4">
                                    <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                        <li class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked value="" id="remember-me">
                                                <label class="form-check-label fw-medium fs-6" for="remember-me">Remember me</label>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="heading-text">Forgot Password</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 mb-4">
                                    <button type="submit" class="bg-primary py-3 px-4 shadow rounded-2 text-white fs-16
                                    3 d-block w-100 border-0">Login</button>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="row">
                                        <div class="col-lg-5 col-5">
                                            <img src="./assets/img/login-singup/line-pattern.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-2 col-2 text-center">
                                            <p class="para-text">OR</p>
                                        </div>
                                        <div class="col-lg-5 col-5">
                                            <img src="./assets/img/login-singup/line-pattern.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="fs-16  para-text text-center">Login by <a href="#phone-login" data-bs-toggle="modal" data-bs-dismiss="modal" class="fw-bold fs-16 ">Phone Number</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login with email -->


    <!-- before-expiry -->
    <div class="modal fade" id="before-expiry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-8 col-12">
                                <img src="./assets/img/package-select/before-expiry.gif" alt="" class="img-fluid">
                                <p class="text-color text-center fw-medium fs-16 secondary-font">The expiration date for this package or course is <a href="#" class="fw-bold primary-color">February 12, 2024</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- before-expiry -->
    <!-- After-expiry -->
    <div class="modal fade" id="After-expiry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-9 col-12">
                                <img src="./assets/img/package-select/After-expiry.png" alt="" class="img-fluid">
                                <p class="text-color text-center fw-medium fs-16 secondary-font">Your package or course is expiry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- After-expiry -->




    <!-- =============== New Login ===============  -->
    <!--login / Register  -->
    <div class="modal fade" id="login-register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="modal-body py-5">
                                <div class="container p-sm-2 p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="section-heading fs-4 text-start">
                                                Welcome to
                                                <span class="primary-color section-heading fs-4 text-start">Manoeuvre</span>
                                            </h3>
                                            <p class="heading-text fs-5 mt-1 mb-3 fw-medium">
                                                Login
                                            </p>
                                            <p class="mb-3">
                                                Accessing this course requires a login. Please enter
                                                your credentials below..!
                                            </p>
                                        </div>
                                    </div>
                                    <form action="#" autocomplete="off">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <input type="email" name="" class="form-control" placeholder="email address" id="" />
                                            </div>
                                            <div class="col-12 mb-3 position-relative">
                                                <input type="text" name="" class="form-control password" placeholder="Password" />
                                                <span class="toggle-password" onclick="togglePasswordVisibility(this)">
                                                    <i class="fa fa-eye-slash"></i>
                                                </span>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                                    <li class="">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" checked value="" id="rememberme" />
                                                            <label class="form-check-label fw-medium fs-6" for="rememberme">Remember me</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#forget-password-phone" data-bs-toggle="modal" data-bs-dismiss="modal" class="heading-text">Forgot Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <button type="submit" class="bg-primary py-3 px-4 shadow rounded-2 text-white fs-16 3 d-block w-100 border-0">
                                                    Login
                                                </button>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5 col-5">
                                                        <img src="./assets/img/login-singup/line-pattern.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="col-lg-2 col-2 text-center">
                                                        <p class="para-text">OR</p>
                                                    </div>
                                                    <div class="col-lg-5 col-5">
                                                        <img src="./assets/img/login-singup/line-pattern.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <p class="fs-16  para-text text-center">Login by <a href="#phone-login" data-bs-toggle="modal" data-bs-dismiss="modal" class="fw-bold fs-16 ">Phone Number</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-primary d-flex align-items-center ">
                            <div class="modal-body py-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="section-heading fs-4 text-start">
                                                <span class="text-white section-heading fs-4 text-start">Register</span>
                                            </h3>
                                            <p class="mb-3 text-white">
                                                Don't have an account? Register Now..!
                                            </p>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <button type="submit" data-bs-target="#Register-phone-number" data-bs-dismiss="modal" data-bs-toggle="modal" class="bg-white py-3 px-4 shadow rounded-2 primary-color fs-16 3 d-block w-100 border-0">
                                                Register
                                            </button>
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
    <!--login / Register  -->
    <!-- Phone Number Enter -->
    <div class="modal fade" id="Register-phone-number" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-start">Welcome to <span class="primary-color section-heading fs-4  text-start">Manoeuvre</span></h3>
                                <p class="heading-text fs-18 mt-2 mb-4 fw-medium">Register</p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row icons-text">
                                <div class="col-12 mb-4 form-icons">
                                    <div class="img d-flex gap-2 align-items-center">
                                        <img src="./assets/img/login-singup/phone.png" class="img-fluid" alt="">
                                        <span class="fw-medium fs-15">+91</span>
                                    </div>
                                    <input type="number" name="" class="form-control numberInput" placeholder="Phone number">
                                </div>
                                <div class="col-12 mb-3">
                                    <a href="#Register-otp" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" class="bg-primary py-3 px-4 shadow rounded-2 text-center text-white fs-16 d-block w-100 border-0">Send OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Phone Number Enter -->
    <!-- Register otp -->
    <div class="modal otpmodal fade otp" id="Register-otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-center">Verify OTP </h3>
                                <p class="heading-text text-center fs-6 para-text mt-2 mb-4 ">Enter your OTP which has been sent to your phone number <span class="fw-medium heading-text">9004991391</span>&nbsp;&nbsp;<a href="#Register-phone-number" data-bs-toggle="modal" data-bs-dismiss="modal" class="heading-text fw-medium" style="color:#0D5EF4">Edit</a></p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row icons-text">
                                <div class="col-12 mb-4">
                                    <ul class="d-flex  align-items-center gap-3 inputs" id="inputs">
                                        <input class="input form-control" type="text" autofocus inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" type="text" inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" type="text" inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" type="text" inputmode="numeric" maxlength="1" />
                                    </ul>
                                </div>
                                <div class="col-12 mb-4">
                                    <p class="heading-text text-center fs-6 para-text mt-2 mb-4">A code has been sent to your phone <br> <span class="fw-bold fs-6 heading-text">Resend in <a href="#" class="timer">01:00</a></span></p>

                                </div>
                                <div class="col-12 mb-3">
                                    <a href="#register" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit" class="bg-primary text-center py-3 px-4 shadow rounded-2 text-white fs-14 d-block w-100 border-0">Confirm OTP</a>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="fs-16  para-text text-center"><a href="#Register-phone-number" data-bs-toggle="modal" data-bs-dismiss="modal">Go Back</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register otp -->
    <!-- register -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body  py-md-5 py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-start">Welcome to <span class="primary-color section-heading fs-4 text-start">Manoeuvre</span></h3>
                                <p class="heading-text fs-5 mt-1 mb-3 fw-medium">Register</p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-group">
                                        <select class="px-2" aria-label="">
                                            <option selected>Mr .</option>
                                            <option value="1">Mrs .</option>
                                            <option value="2">Miss</option>
                                            <option value="3">Other</option>
                                        </select>
                                        <input type="text" placeholder="Name" class="form-control" required class="form-control" style="border-left : 0px;">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="number" disabled placeholder="9004991391" class="form-control" required name="" id="numberInput">
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="email" placeholder="Email ID" class="form-control" name="" required id="">
                                </div>
                                <div class="col-12  mb-4 position-relative">
                                    <input type="text" name="" class="form-control password" placeholder="Password">
                                    <span class="toggle-password" onclick="togglePasswordVisibility(this)">
                                        <i class="fa fa-eye-slash"></i>
                                    </span>
                                </div>
                                <div class="col-12  mb-4 position-relative">
                                    <input type="text" name="" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="col-md-12 col-12  mb-4  form-icons">
                                    <input type="text" placeholder="Birth Date" class="form-control" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                                </div>
                                <div class="col-12  mb-4">
                                    <div class="row">
                                        <div class="col-md-6 col-12  form-icons">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select State</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 ">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select City</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  mb-4">
                                    <div class="row">
                                        <div class="col-md-6 col-12  form-icons">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Category</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 ">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Exam</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="bg-primary py-3 px-4  rounded-2 text-white fs-16 d-block w-100 border-0">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>6
    </div>
    <!-- register -->

    <!-- =============== New Login  =============== -->







    <!-- ======Phone Login ==================== -->
    <!-- login with phone -->
    <div class="modal fade" id="phone-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-start">Welcome to <span class="primary-color section-heading fs-4  text-start">Manoeuvre</span></h3>
                                <p class="heading-text fs-18 mt-2 mb-4 fw-medium">Login</p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row icons-text">
                                <div class="col-12 mb-4 form-icons">
                                    <div class="img d-flex gap-2 align-items-center">
                                        <img src="./assets/img/login-singup/phone.png" class="img-fluid" alt="">
                                        <span class="fw-medium fs-15">+91</span>
                                    </div>
                                    <input type="number" name="" class="form-control numberInput" placeholder="Phone number" id="">
                                </div>
                                <div class="col-12 mb-3">
                                    <a href="#login-phone-otp" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" class="bg-primary py-3 px-4 shadow rounded-2 text-center text-white fs-16 d-block w-100 border-0">Send OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login with phone -->
    <!-- otp -->
    <div class="modal fade otpmodal otp" id="login-phone-otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-center">Verify OTP </h3>
                                <p class="heading-text text-center fs-6 para-text mt-2 mb-4 ">Enter your OTP which has been sent to your phone number <span class="fw-medium heading-text">9004991391</span>&nbsp;&nbsp;<a href="#phone-login" data-bs-toggle="modal" data-bs-dismiss="modal" class="heading-text fw-medium" style="color:#0D5EF4">Edit</a></p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row icons-text">
                                <div class="col-12 mb-4">
                                    <ul class="d-flex  align-items-center gap-3 phonelogin " id="phonelogin">
                                        <input class="input form-control" type="text" autofocus inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" type="text" autofocus inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" type="text" autofocus inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" type="text" autofocus inputmode="numeric" maxlength="1" />
                                    </ul>
                                </div>
                                <div class="col-12 mb-4">
                                    <p class="heading-text text-center fs-6 para-text mt-2 mb-4">A code has been sent to your phone <br> <span class="fw-bold fs-6 heading-text">Resend in <a href="#" class="timer">01:00</a></span></p>

                                </div>
                                <div class="col-12 mb-3">
                                    <button type="submit" class="bg-primary text-center py-3 px-4 shadow rounded-2 text-white fs-14 d-block w-100 border-0">Confirm OTP</button>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="fs-16  para-text text-center"><a href="#phone-login" data-bs-toggle="modal" data-bs-dismiss="modal">Go Back</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- otp -->
    <!-- ======Phone Login ==================== -->


    <!-- ======forget password ==================== -->
    <!-- login with phone -->
    <div class="modal fade" id="forget-password-phone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-start">Welcome to <span class="primary-color section-heading fs-4  text-start">Manoeuvre</span></h3>
                                <p class="heading-text fs-18 mt-2 mb-4 fw-medium">Forget Password</p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row icons-text">
                                <div class="col-12 mb-4 form-icons">
                                    <div class="img d-flex gap-2 align-items-center">
                                        <img src="./assets/img/login-singup/phone.png" class="img-fluid" alt="">
                                        <span class="fw-medium fs-15">+91</span>
                                    </div>
                                    <input type="number" name="" class="form-control numberInput" placeholder="Phone number" id="">
                                </div>
                                <div class="col-12 mb-3">
                                    <a href="#forget-otp" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" class="bg-primary py-3 px-4 shadow rounded-2 text-center text-white fs-16 d-block w-100 border-0">Send OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login with phone -->
    <!-- otp -->
    <div class="modal otpmodal fade otp" id="forget-otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body  py-5">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-center">Verify OTP </h3>
                                <p class="heading-text text-center fs-6 para-text mt-2 mb-4 ">Enter your OTP which has been sent to your phone number <span class="fw-medium heading-text">9004991391</span> <a href="#forget-password-phone" data-bs-toggle="modal" data-bs-dismiss="modal" class="heading-text fw-medium" style="color:#0D5EF4">Edit</a></p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row icons-text">
                                <div class="col-12 mb-4">
                                    <ul class="d-flex  align-items-center gap-3 inputs " id="ForgetInputs">
                                        <input class="input form-control" autofocus type="text" inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" autofocus type="text" inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" autofocus type="text" inputmode="numeric" maxlength="1" />
                                        <input class="input form-control" autofocus type="text" inputmode="numeric" maxlength="1" />
                                    </ul>
                                </div>
                                <div class="col-12 mb-4">
                                    <p class="heading-text text-center fs-6 para-text mt-2 mb-4">A code has been sent to your phone <br> <span class="fw-bold fs-6 heading-text ">Resend in <span class="timer">01:00</span></span></p>
                                </div>
                                <div class="col-12 mb-3">
                                    <a href="#NewPassword" data-bs-toggle="modal" data-bs-dismiss="modal" class="bg-primary py-3 px-4 shadow rounded-2 text-white text-center fs-14 d-block w-100 border-0">Confirm OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- otp -->
    <!-- New-Password -->
    <div class="modal fade" id="NewPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body  py-md-5 py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-heading fs-4 text-start">Welcome to <span class="primary-color section-heading fs-4 text-start">Manoeuvre</span></h3>
                                <p class="heading-text fs-5 mt-1 mb-3 fw-medium">Set New Password</p>
                            </div>
                        </div>
                        <form action="#" autocomplete="off">
                            <div class="row">
                                <div class="col-12  mb-4 position-relative">
                                    <input type="text" name="" class="form-control password" placeholder="New Password">
                                    <span class="toggle-password" onclick="togglePasswordVisibility(this)">
                                        <i class="fa fa-eye-slash"></i>
                                    </span>
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="text" placeholder="Confirm Password" class="form-control" required name="" id="">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="bg-primary py-3 px-4  rounded-2 text-white fs-16 d-block w-100 border-0">Set New Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>6
    </div>
    <!-- New-Password -->
    <!-- ======forget password ==================== -->


    <script>
        // Function to start the countdown timer
        function startCountdown(duration, display) {
            let timer = duration;
            const countdownInterval = setInterval(function() {
                let minutes = parseInt(timer / 60, 10);
                let seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownInterval);
                    // Timer has reached 0, you can perform any action here
                    alert("Time's up!");
                }
            }, 1000);
        }

        // Start countdown for each modal when it is shown
        const modals = document.querySelectorAll('.otpmodal');
        modals.forEach(function(modal) {
            modal.addEventListener('shown.bs.modal', function() {
                const timerDisplay = modal.querySelector('.timer');
                startCountdown(60, timerDisplay); // Start countdown from 1 minute for each modal
            });
        });
    </script>
