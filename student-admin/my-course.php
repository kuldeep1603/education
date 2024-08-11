<?php include('header.php'); ?>


<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y admin">
    <div class="row">
        <div class="col-lg-9 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card  bg-blue-card-color">
                        <div class="card-body pb-0 rounded-3 shadow">
                            <div class="row ">
                                <div class="col-1 pe-0 d-sm-block d-none" style="width:4.9%">
                                    <img src="assets/img/New/line-pattern.png" class="img-fluid w-25" alt="">
                                </div>
                                <div class="col-sm-8 col-12 ">
                                    <h5 class="heading primary-font fw-bolder mt-2 fs-24 text-capitalize">My courses</h5>
                                    <span class="fs-14 text-color-2 fw-medium mt-3 d-block">It seems like there might be a typo in your question, and you might be asking about how to lower </span>
                                    <ul class="nav nav-tabs purple-tabs mt-4" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 d-flex gap-2 align-items-center active" id="home-tab" data-bs-toggle="tab" data-bs-target="#In-Process" type="button" role="tab" aria-controls="In-Process" aria-selected="true">
                                                <iconify-icon icon="carbon:in-progress" class="fs-20" style="color: #969696;"></iconify-icon>
                                                In Process
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-2 d-flex gap-2 align-items-center" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Completed" type="button" role="tab" aria-controls="Completed" aria-selected="false">
                                                <iconify-icon icon="quill:mail" class="fs-20" style="color: #969696;"></iconify-icon>
                                                Completed
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 col-3 d-sm-block d-none">
                                    <img src="assets/img/New/right-boy.svg.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-course-list">
                        <div class="col-12">
                            <div class="tab-content px-0" id="myTabContent">
                                <div class="tab-pane fade show active" id="In-Process" role="tabpanel" aria-labelledby="In-Process-tab">
                                    <div class="card mb-2">
                                        <div class="card-body  rounded-3 card-border-2px  px-md-2 px-sm-4 px-3 py-3 bg-card-color shadow">
                                            <div class="row justify-content-md-center justify-content-start align-items-center">
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk19IL04YZP9CgEVhw_cd3zvDxP5U34qE_Bw73q8xolhCu2_Rx54rfk6jJeXovJfcWHkA&usqp=CAU" class="img-fluid " alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-12 mt-sm-0 mt-3">
                                                    <h6 class="heading fs-16 fw-extrabold fw-bold-1 mt-3">Machine Learning and Data analysis </h6>
                                                    <div class="progress mt-3">
                                                        <div class="progress-bar bg-yellow-1 " role="progressbar" style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <ul class="d-flex mt-2 justify-content-between align-items-center">
                                                        <li>
                                                            <b class="fs-14 fw-medium heading-text">43% Completed</b>
                                                        </li>
                                                        <li>
                                                            <span class="fs-14 para-text">Validation</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-10 mt-md-0 mt-sm-3 ps-md-0 ps-2">
                                                    <ul class="d-flex gap-2 align-items-center">
                                                        <li class="d-flex gap-1 align-items-center">
                                                            <iconify-icon icon="fluent:clipboard-bullet-list-16-regular" style="color: #86a1ae;"></iconify-icon>
                                                            <span class="fs-13 para-text text-color-2"> 12 lessons |</span>
                                                        </li>
                                                        <li>
                                                            <span class="fs-13 para-text text-color-2">7 quiz</span>
                                                        </li>
                                                    </ul>
                                                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="bg-primary text-white justify-content-center d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                        <span class="fs-14 text-white text-truncate">Go to Classroom </span>
                                                        <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <div class="collapse pt-3 px-2" id="collapseExample">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a href="./Course-Details.php">
                                                                    <div class="card h-100 card-border-2px rounded-2 py-2 bg-card-color card-body">
                                                                        <ul class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <li>
                                                                                <p class="secondary-font text-truncate fw-medium fs-15 ">MBACET</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa-solid fa-angle-right"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="./Course-Details.php">
                                                                    <div class="card h-100 card-border-2px rounded-2 py-2 bg-card-color card-body">
                                                                        <ul class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <li>
                                                                                <p class="secondary-font fw-medium fs-15">MBA</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa-solid fa-angle-right"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="./Course-Details.php">
                                                                    <div class="card h-100 card-border-2px rounded-2 py-2 bg-card-color card-body">
                                                                        <ul class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <li>
                                                                                <p class="secondary-font fw-medium fs-15 text-truncate">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa-solid fa-angle-right"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-body  rounded-3 card-border-2px  px-md-2 px-sm-4 px-3 py-3 bg-card-color shadow">
                                            <div class="row justify-content-md-center justify-content-start align-items-center">
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-12 mt-sm-0 mt-3">
                                                    <h6 class="heading fs-16 fw-extrabold fw-bold-1 mt-3">Machine Learning and Data analysis </h6>
                                                    <div class="progress mt-3">
                                                        <div class="progress-bar bg-yellow-1 " role="progressbar" style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <ul class="d-flex mt-2 justify-content-between align-items-center">
                                                        <li>
                                                            <b class="fs-14 fw-medium heading-text">43% Completed</b>
                                                        </li>
                                                        <li>
                                                            <span class="fs-14 para-text">Validation</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-10 mt-md-0 mt-sm-3 ps-md-0 ps-2">
                                                    <ul class="d-flex gap-2 align-items-center">
                                                        <li class="d-flex gap-1 align-items-center">
                                                            <iconify-icon icon="fluent:clipboard-bullet-list-16-regular" style="color: #86a1ae;"></iconify-icon>
                                                            <span class="fs-13 para-text text-color-2"> 12 lessons |</span>
                                                        </li>
                                                        <li>
                                                            <span class="fs-13 para-text text-color-2">7 quiz</span>
                                                        </li>
                                                    </ul>
                                                    <a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1" class="bg-primary text-white justify-content-center d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                        <span class="fs-14 text-white text-truncate">Go to Classroom </span>
                                                        <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <div class="collapse pt-3 px-2" id="collapseExample1">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a href="./Course-Details.php">
                                                                    <div class="card h-100 card-border-2px rounded-2 py-2 bg-card-color card-body">
                                                                        <ul class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <li>
                                                                                <p class="secondary-font text-truncate fw-medium fs-15 ">MBACET</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa-solid fa-angle-right"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="./Course-Details.php">
                                                                    <div class="card h-100 card-border-2px rounded-2 py-2 bg-card-color card-body">
                                                                        <ul class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <li>
                                                                                <p class="secondary-font fw-medium fs-15">MBA</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa-solid fa-angle-right"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="./Course-Details.php">
                                                                    <div class="card h-100 card-border-2px rounded-2 py-2 bg-card-color card-body">
                                                                        <ul class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <li>
                                                                                <p class="secondary-font fw-medium fs-15 text-truncate">TISSNET</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa-solid fa-angle-right"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Completed" role="tabpanel" aria-labelledby="Completed-tab">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-course-list">
                        <div class="col-12">
                            <div class="card card-body px-2">
                                <h4 class="d-flex gap-2 border-bottom pb-2 align-items-center">
                                    <iconify-icon icon="mdi:bookshelf" class="fs-24" style="color: black;"></iconify-icon>
                                    <span class="fw-bold fs-18 lato-font">Recommendation Explore</span>
                                </h4>

                                <div class="card mt-3">
                                    <div class="card-body  rounded-3 card-border-2px px-md-2 px-sm-4 px-3 py-3 bg-card-color ">
                                        <div class="row justify-content-md-center justify-content-start align-items-center">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-5 col-12 mt-sm-0 mt-3">
                                                <ul class="d-flex gap-2 align-items-center">
                                                    <li class="d-flex gap-1 align-items-center">
                                                        <iconify-icon icon="fluent:clipboard-bullet-list-16-regular" style="color: #86a1ae;"></iconify-icon>
                                                        <span class="fs-13 para-text text-color-2"> 12 lessons |</span>
                                                    </li>
                                                    <li>
                                                        <span class="fs-13 para-text text-color-2">7 quiz</span>
                                                    </li>
                                                </ul>
                                                <h6 class="heading fs-16 mt-2 mb-3 primary-color">Machine Learning and Data analysis </h6>
                                                <!-- <a href="#" class="green-linear-bg text-uppercase fs-12 text-white px-3 py-1 rounded-2">Shams Tabrez</a> -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-10 mt-md-0 mt-sm-3 ps-md-0 ps-2">
                                                <a href="../../MANOEUVRE/course-details.php" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                    <span class="fs-14 text-white">View Course</span>
                                                    <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body  rounded-3 card-border-2px px-md-2 px-sm-4 px-3 py-3 bg-card-color ">
                                        <div class="row justify-content-md-center justify-content-start align-items-center">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-5 col-12 mt-sm-0 mt-3">
                                                <ul class="d-flex gap-2 align-items-center">
                                                    <li class="d-flex gap-1 align-items-center">
                                                        <iconify-icon icon="fluent:clipboard-bullet-list-16-regular" style="color: #86a1ae;"></iconify-icon>
                                                        <span class="fs-13 para-text text-color-2"> 12 lessons |</span>
                                                    </li>
                                                    <li>
                                                        <span class="fs-13 para-text text-color-2">7 quiz</span>
                                                    </li>
                                                </ul>
                                                <h6 class="heading fs-16 mt-2 mb-3 primary-color">Machine Learning and Data analysis </h6>
                                                <!-- <a href="#" class="green-linear-bg text-uppercase fs-12 text-white px-3 py-1 rounded-2">Shams Tabrez</a> -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-10 mt-md-0 mt-sm-3 ps-md-0 ps-2">
                                                <a href="../../MANOEUVRE/course-details.php" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                    <span class="fs-14 text-white">View Course</span>
                                                    <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body  rounded-3 card-border-2px px-md-2 px-sm-4 px-3 py-3 bg-card-color ">
                                        <div class="row justify-content-md-center justify-content-start align-items-center">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-5 col-12 mt-sm-0 mt-3">
                                                <ul class="d-flex gap-2 align-items-center">
                                                    <li class="d-flex gap-1 align-items-center">
                                                        <iconify-icon icon="fluent:clipboard-bullet-list-16-regular" style="color: #86a1ae;"></iconify-icon>
                                                        <span class="fs-13 para-text text-color-2"> 12 lessons |</span>
                                                    </li>
                                                    <li>
                                                        <span class="fs-13 para-text text-color-2">7 quiz</span>
                                                    </li>
                                                </ul>
                                                <h6 class="heading fs-16 mt-2 mb-3 primary-color">Machine Learning and Data analysis </h6>
                                                <!-- <a href="#" class="green-linear-bg text-uppercase fs-12 text-white px-3 py-1 rounded-2">Shams Tabrez</a> -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-10 mt-md-0 mt-sm-3 ps-md-0 ps-2">
                                                <a href="../../MANOEUVRE/course-details.php" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                    <span class="fs-14 text-white">View Course</span>
                                                    <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                </a>
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
        <div class="col-lg-3 col-12 ">
            <div class="row">
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"> <img src="assets/img/New/image 34.png" class="img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"> <img src="assets/img/New/image 34.png" class="img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"> <img src="assets/img/New/image 34.png" class="img-fluid " alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?php include('footer.php'); ?>