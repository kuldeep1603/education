<?php include('header.php'); ?>

<div class="container-xxl flex-grow-1 container-p-y admin admin1 ">
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none left">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
                    <ul>
                        <li class="d-flex ms-3 mb-2  gap-3 align-items-center flex-wrap">
                            <a href="./Course-Details.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                            <span class="fs-15 fw-medium text-color">Live Lecture</span>
                        </li>
                    </ul>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#videos" aria-expanded="false" aria-controls="videos">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-pink"><iconify-icon icon="mingcute:live-photo-fill" class="fs-25" style="color:  #e4004a;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">Live Lecture</b>
                                            <!-- <span class="fs-14 para-text  fw-normal">1 Test</span> -->
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="videos" class="accordion-collapse show collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="#">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">English</li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item admin1active fs-15">Quantitative Aptitude</li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item admin1active fs-15">Advance Maths</li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item admin1active fs-15">Quantitative Aptitude</li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item admin1active fs-15">Advance Maths</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card  bg-blue-card-color">
                        <div class="card-body pb-0 rounded-3 shadow">
                            <div class="row ">
                                <div class="col-1 pe-0 d-sm-block d-none" style="width:4.9%">
                                    <img src="assets/img/New/line-pattern.png" class="img-fluid w-25" alt="">
                                </div>
                                <div class="col-sm-8 col-12">
                                    <h5 class="heading fw-bolder mt-2 fs-22 text-capitalize">Live Class</h5>
                                    <span class="fs-14 mt-3 d-block text-ellipsis">Enrol yourself in our free live classes & attain expertise at subject & chapter levels <br> for Govt. Exams preparations.
                                        Attend our free online classes and crack the exam.</span>
                                    <ul class="nav nav-tabs purple-tabs mt-4" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex gap-2 align-items-center active" id="home-tab" data-bs-toggle="tab" data-bs-target="#In-Process" type="button" role="tab" aria-controls="In-Process" aria-selected="true">
                                                <iconify-icon icon="carbon:in-progress" class="fs-20" style="color: #969696;"></iconify-icon>
                                                Live
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex gap-2 align-items-center" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Completed" type="button" role="tab" aria-controls="Completed" aria-selected="false">
                                                <iconify-icon icon="quill:mail" class="fs-20" style="color: #969696;"></iconify-icon>
                                                Recorded lectures
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
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content px-0" id="myTabContent">
                                <div class="tab-pane fade show active" id="In-Process" role="tabpanel" aria-labelledby="In-Process-tab">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card border-red-top  card-body">
                                                    <ul class="d-flex align-items-center gap-3 flex-wrap">
                                                        <li>
                                                            <h5 class="heading secondary-font fs-18 heading-text">Program Validity</h5>
                                                        </li>
                                                        <li class="d-flex align-items-center gap-2 flex-wrap">
                                                            <iconify-icon icon="uis:calender" class="fs-15" style="color: #333;"></iconify-icon>
                                                            <span class=" fw-normal fs-14">Sun, Sep 3,2023</span>
                                                        </li>
                                                        <li class="d-flex align-items-center gap-2 flex-wrap">
                                                            <iconify-icon icon="mdi:clock" class="fs-15" style="color: #333;"></iconify-icon>
                                                            <span class=" fw-normal fs-14">2:52 PM</span>
                                                        </li>
                                                        <li>
                                                            <a class="badge d-flex justify-content-center gap-2 align-items-center bg-live text-white">
                                                                <iconify-icon icon="material-symbols-light:circle" style="color: white;"></iconify-icon>
                                                                Live
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Meet Anudeep & Discuss the progress of your level 0 Case Study</p>
                                                    <ul class="mt-sm-4 mt-2 pt-2 d-flex flex-wrap border-dashed-top justify-content-between align-items-center">
                                                        <li>
                                                            <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Recording of the Live is not availableAlso Includes</p>
                                                        </li>
                                                        <li>
                                                            <a href="#faculty-review" data-bs-toggle="modal" class="bg-dark-btn text-white px-lg-5 px-3 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                                <span class="fs-14 text-white">Ongoing lecture</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Completed" role="tabpanel" aria-labelledby="Completed-tab">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-4 col-6">
                                                        <div class="dropdown">
                                                            <a class="btn bg-white fw-medium fs-16 heading-text dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Select Courses</a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">MBA</a></li>
                                                                <li><a class="dropdown-item" href="#">CAT</a></li>
                                                                <li><a class="dropdown-item" href="#">Government Exam </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-7 col-10 mt-sm-0 mt-3">
                                                        <input type="serach" name="" placeholder="Search order..." class="form-control py-2 border-0" id="">
                                                    </div>
                                                    <div class="col-lg-1 col-sm-1 col-2 mt-sm-0 mt-3">
                                                        <a href="#" class="px-2 py-2 bg-secondary text-white rounded-1 d-flex justify-content-center align-items-center">
                                                            <iconify-icon icon="octicon:filter-16" class="fs-18" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 mt-4" id="course-Content">
                                                <div class="card card-body px-md-4 px-3">
                                                    <h4 class="d-flex border-bottom  gap-2 pb-3 align-items-center">
                                                        <iconify-icon icon="mdi:bookshelf" class="fs-24" style="color: black;"></iconify-icon>
                                                        <span class="fw-semibold fs-18  tertiary-font">Select Topic</span>
                                                    </h4>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                        <div class="accordion-item box-shadow-none verbal  mt-4">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#select-topic-1" aria-expanded="false" aria-controls="select-topic-1">
                                                                    <b class="fw-semibold fs-16">Data Interpretation & Logical Reasoning.</b>
                                                                </button>
                                                            </h2>
                                                            <div id="select-topic-1" class="accordion-collapse show collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body px-sm-4 px-2">
                                                                    <div class="container-fluid p-0">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="accordion" id="accordionExample">
                                                                                    <div class="accordion-item box-shadow-none mb-4" style="border:2px solid rgba(10, 61, 108, 0.2) !important">
                                                                                        <h2 class="accordion-header bg-white" id="headingOne">
                                                                                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#Numberical-System" aria-expanded="true" aria-controls="Numberical-System">
                                                                                                <b class="fw-semibold fs-16">Numberical System</b>
                                                                                            </button>
                                                                                        </h2>
                                                                                        <div id="Numberical-System" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                            <div class="accordion-body">
                                                                                                <div class="col-12 mt-3">
                                                                                                    <div class="card boredr-blue-top border-bottom-2 px-sm-4 px-2 card-body">
                                                                                                        <ul class="d-flex align-items-center gap-3 flex-wrap">
                                                                                                            <li>
                                                                                                                <h5 class="heading secondary-font fs-18 heading-text">Program Validity</h5>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="uis:calender" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">Sun, Sep 3,2023</span>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="mdi:clock" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">2:52 PM</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Meet Anudeep & Discuss the progress of your level 0 Case Study</p>
                                                                                                        <ul class="mt-sm-4 mt-2 pt-2 d-flex flex-wrap border-dashed-top justify-content-between align-items-center">
                                                                                                            <li>
                                                                                                                <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Recording of the Live is not availableAlso Includes</p>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="./Video-Lecture.php" class="bg-dark-btn text-white px-sm-5 px-3 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                                                                                    <span class="fs-14 text-white">Watch Recording</span>
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 mt-3">
                                                                                                    <div class="card boredr-blue-top border-bottom-2 px-sm-4 px-2 card-body">
                                                                                                        <ul class="d-flex align-items-center gap-3 flex-wrap">
                                                                                                            <li>
                                                                                                                <h5 class="heading secondary-font fs-18 heading-text">Program Validity</h5>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="uis:calender" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">Sun, Sep 3,2023</span>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="mdi:clock" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">2:52 PM</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Meet Anudeep & Discuss the progress of your level 0 Case Study</p>
                                                                                                        <ul class="mt-sm-4 mt-2 pt-2 d-flex flex-wrap border-dashed-top justify-content-between align-items-center">
                                                                                                            <li>
                                                                                                                <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Recording of the Live is not availableAlso Includes</p>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="./Video-Lecture.php" class="bg-dark-btn text-white px-sm-5 px-3 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                                                                                    <span class="fs-14 text-white">Watch Recording</span>
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
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
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item box-shadow-none  mt-4">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#select-topic-2" aria-expanded="false" aria-controls="select-topic-2">
                                                                    <b class="fw-semibold fs-16">Quantitative Ability.</b>
                                                                </button>
                                                            </h2>
                                                            <div id="select-topic-2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body px-sm-4 px-2">
                                                                    <div class="container-fluid p-0">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="accordion" id="accordionExample">
                                                                                    <div class="accordion-item box-shadow-none mb-4" style="border:2px solid rgba(10, 61, 108, 0.2) !important">
                                                                                        <h2 class="accordion-header bg-white" id="headingOne">
                                                                                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#General-Knowledge" aria-expanded="true" aria-controls="General-Knowledge">
                                                                                                <b class="fw-semibold fs-16">General Knowledge</b>
                                                                                            </button>
                                                                                        </h2>
                                                                                        <div id="General-Knowledge" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                            <div class="accordion-body">
                                                                                                <div class="col-12 mt-3">
                                                                                                    <div class="card boredr-blue-top border-bottom-2 px-sm-4 px-2 card-body">
                                                                                                        <ul class="d-flex align-items-center gap-3 flex-wrap">
                                                                                                            <li>
                                                                                                                <h5 class="heading secondary-font fs-18 heading-text">Program Validity</h5>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="uis:calender" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">Sun, Sep 3,2023</span>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="mdi:clock" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">2:52 PM</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Meet Anudeep & Discuss the progress of your level 0 Case Study</p>
                                                                                                        <ul class="mt-sm-4 mt-2 pt-2 d-flex flex-wrap border-dashed-top justify-content-between align-items-center">
                                                                                                            <li>
                                                                                                                <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Recording of the Live is not availableAlso Includes</p>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="./Video-Lecture.php" class="bg-dark-btn text-white px-sm-5 px-3 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                                                                                    <span class="fs-14 text-white">Watch Recording</span>
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 mt-3">
                                                                                                    <div class="card boredr-blue-top border-bottom-2 px-sm-4 px-2 card-body">
                                                                                                        <ul class="d-flex align-items-center gap-3 flex-wrap">
                                                                                                            <li>
                                                                                                                <h5 class="heading secondary-font fs-18 heading-text">Program Validity</h5>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="uis:calender" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">Sun, Sep 3,2023</span>
                                                                                                            </li>
                                                                                                            <li class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                                <iconify-icon icon="mdi:clock" class="fs-15" style="color: #333;"></iconify-icon>
                                                                                                                <span class=" fw-normal fs-14">2:52 PM</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Meet Anudeep & Discuss the progress of your level 0 Case Study</p>
                                                                                                        <ul class="mt-sm-4 mt-2 pt-2 d-flex flex-wrap border-dashed-top justify-content-between align-items-center">
                                                                                                            <li>
                                                                                                                <p class="heading-text fw-medium fs-14 mt-2 tertiary-font">Recording of the Live is not availableAlso Includes</p>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="./Video-Lecture.php" class="bg-dark-btn text-white px-sm-5 px-3 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                                                                                    <span class="fs-14 text-white">Watch Recording</span>
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
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
                    </div>
                    <div class="row my-course-list">
                        <div class="col-12">
                            <div class="card card-body px-sm-4 px-3">
                                <h4 class="d-flex gap-2 pb-4 align-items-center">
                                    <iconify-icon icon="mdi:bookshelf" class="fs-24" style="color: black;"></iconify-icon>
                                    <span class="fw-semibold fs-18  secondary-font ">Upcoming Live</span>
                                </h4>
                                <div class="card mt-3">
                                    <div class="card-body  rounded-3  px-3 py-3" style="background-color:#FAFAFA;">
                                        <div class="row justify-content-md-center justify-content-sm-start  align-items-center">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-sm-0 mt-3 border-right pe-0">
                                                <ul class="d-flex gap-2 flex-wrap align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="uis:calender"></iconify-icon>
                                                        <span class="fs-14 para-text"> Sun, Sep 3,2023 |</span>
                                                    </li>
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="mdi:clock"></iconify-icon>
                                                        <span class="fs-14 para-text">2:52 PM</span>
                                                    </li>
                                                </ul>
                                                <h6 class="heading fw-semibold fs-15 mt-2 mb-3 primary-color">Machine Learning and Data analysis </h6>
                                                <!-- <a href="#" class="bg-primary fs-14 text-white px-2 py-1 rounded-2">Shams Tabrez</a> -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-8 mt-sm-0 mt-2">
                                                <a href="#" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                    <span class="fs-14 text-white">Start lecture </span>
                                                    <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body  rounded-3  px-3 py-3" style="background-color:#FAFAFA;">
                                        <div class="row justify-content-md-center justify-content-sm-start  align-items-center">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-sm-0 mt-3 border-right pe-0">
                                                <ul class="d-flex gap-2 flex-wrap align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="uis:calender"></iconify-icon>
                                                        <span class="fs-14 para-text"> Sun, Sep 3,2023 |</span>
                                                    </li>
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="mdi:clock"></iconify-icon>
                                                        <span class="fs-14 para-text">2:52 PM</span>
                                                    </li>
                                                </ul>
                                                <h6 class="heading fw-semibold fs-15 mt-2 mb-3 primary-color">Machine Learning and Data analysis </h6>
                                                <!-- <a href="#" class="bg-primary fs-14 text-white px-2 py-1 rounded-2">Shams Tabrez</a> -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-8 mt-sm-0 mt-2">
                                                <a href="#" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                    <span class="fs-14 text-white">Start lecture </span>
                                                    <iconify-icon icon="basil:caret-right-outline" class="fs-16" style="color: white;"></iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body  rounded-3  px-3 py-3" style="background-color:#FAFAFA;">
                                        <div class="row justify-content-md-center justify-content-sm-start  align-items-center">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <img src="assets/img/New/10.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12 mt-sm-0 mt-3 border-right pe-0">
                                                <ul class="d-flex gap-2 flex-wrap align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="uis:calender"></iconify-icon>
                                                        <span class="fs-14 para-text"> Sun, Sep 3,2023 |</span>
                                                    </li>
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="mdi:clock"></iconify-icon>
                                                        <span class="fs-14 para-text">2:52 PM</span>
                                                    </li>
                                                </ul>
                                                <h6 class="heading fw-semibold fs-15 mt-2 mb-3 primary-color">Machine Learning and Data analysis </h6>
                                                <!-- <a href="#" class="bg-primary fs-14 text-white px-2 py-1 rounded-2">Shams Tabrez</a> -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-8 mt-sm-0 mt-2">
                                                <a href="#" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                                    <span class="fs-14 text-white">Start lecture </span>
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
    </div>
</div>

<!-- small screen subject option  -->
<?php include('small-screen-subject.php'); ?>
<!-- small screen subject option  -->

<!-- faculty-review modal  -->
<div class="modal fade" id="faculty-review" tabindex="-1" aria-labelledby="faculty-review" aria-hidden="true">faculty-review
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-body py-sm-4 py-3">
                <div class="container p-0">
                    <div class="row justify-content-center ">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-end "><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <h3 class="section-heading fs-4 text-start">How was the <span class="primary-color section-heading fs-4 text-start">lecture</span> </h3>
                                <form action="#" autocomplete="off">
                                    <div class="row p-0">
                                        <div class="col-12 mb-3">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <textarea name="" id="" cols="30" placeholder="Add Review" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="bg-primary py-sm-3 py-2 px-sm-4 px-3 shadow rounded-2 text-white fs-16 d-block w-100 border-0">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faculty-review modal -->


<?php include('footer.php'); ?>