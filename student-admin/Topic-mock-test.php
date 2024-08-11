<?php include('header.php'); ?>

<div class="container-xxl flex-grow-1 container-p-y Mock-Test admin admin1">
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none mt-lg-0 mt-3 left">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
                    <ul>
                        <li class="d-flex ms-3 mb-2  gap-3 align-items-center flex-wrap">
                            <a href="./Course-Details.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                            <span class="fs-15 fw-medium  text-color">Topic Mock Test</span>
                        </li>
                    </ul>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-3 px-3  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#videos" aria-expanded="false" aria-controls="videos">
                                    <b class="text-color fs-15 ms-2 fw-semibold text-ellipsis">Quant</b>
                                </button>
                            </h2>
                            <div id="videos" class="accordion-collapse show collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Video-Lecture.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">Number System</li>
                                        </a>
                                        <a href="./Video-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Percentage</li>
                                        </a>
                                        <a href="./Video-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Profit & Loss</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-3 px-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Live-Lecture" aria-expanded="false" aria-controls="Live-Lecture">
                                    <b class="text-color ms-2 text-ellipsis fs-15 fw-semibold">Abstract Reasoning </b>
                                </button>
                            </h2>
                            <div id="Live-Lecture" class="accordion-collapse  collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Live-Lecture.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">Figure Series</li>
                                        </a>
                                        <a href="./Live-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Odd One Out</li>
                                        </a>
                                        <a href="./Live-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Matrix</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-3 px-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#E-Books" aria-expanded="false" aria-controls="E-Books">
                                    <b class="text-color text-ellipsis ms-2 fs-15 fw-semibold">Logical Reasoning</b>
                                </button>
                            </h2>
                            <div id="E-Books" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Ebooks.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">Coding Decoding</li>
                                        </a>
                                        <a href="./Ebooks.php">
                                            <li class="list-group-item admin1active fs-15">Syllogism</li>
                                        </a>
                                        <a href="./Ebooks.php">
                                            <li class="list-group-item admin1active fs-15">Blood relations</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card card-body px-3 bg-white">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav border-bottom pb-3 black-tabs nav-pills gap-sm-0 gap-2 " id="pills-tab" role="tablist">
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link box-shadow-none  active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#Easy" type="button" role="tab" aria-controls="Easy" aria-selected="true">Easy</button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link box-shadow-none  box" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#Medium" type="button" role="tab" aria-controls="Medium" aria-selected="false">Moderate</button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link box-shadow-none  box" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Hard" type="button" role="tab" aria-controls="Hard" aria-selected="false">Difficult</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="tab-content  pt-0 px-0" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Easy" role="tabpanel" aria-labelledby="Easy-tab">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mano_mocktest/exam-instruction.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mano_mocktest/exam-instruction.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <!-- <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li> -->
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Attempt</a>
                                                        <!-- <a href="#" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mano_mocktest/exam-instruction.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <!-- <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li> -->
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Attempt</a>
                                                        <!-- <a href="#" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mano_mocktest/exam-instruction.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Medium" role="tabpanel" aria-labelledby="Medium">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mano_mocktest/exam-instruction.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <!-- <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li> -->
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Attempt</a>
                                                        <!-- <a href="#" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <!-- <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li> -->
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Attempt</a>
                                                        <!-- <a href="#" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Hard" role="tabpanel" aria-labelledby="Hard-tab">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mano_mocktest/exam-instruction.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <!-- <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li> -->
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Attempt</a>
                                                        <!-- <a href="#" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <!-- <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li> -->
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Attempt</a>
                                                        <!-- <a href="#" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card border-bottom rounded-0 py-3 card-body px-0">
                                                <ul class="d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-3 align-items-center">
                                                        <iconify-icon icon="ic:round-check-box" style="color: #0a3d6c;" width="30" height="30"></iconify-icon>
                                                        <p class="">Test : Selecting Words - Reading Comprehension</p>
                                                    </li>
                                                    <li class="d-flex gap-1 flex-wrap">
                                                        <span>Score : </span><strong>10/10</strong>
                                                    </li>
                                                    <li class="d-flex gap-2">
                                                        <a href="./mock-test/instructions.php" class="border-dark border p-1  text-center rounded-1 px-3 fw-medium ">Reattempt</a>
                                                        <a href="./mano_mocktest/test-result.php" class="border-0 bg-dark-btn text-white p-1 px-3 d-flex gap-2 justify-content-center align-items-center rounded-1">Analysis
                                                            <iconify-icon icon="mingcute:right-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="ps-sm-5"><small class="text-secondary">10
                                                        Ques | 10
                                                        mins</small>
                                                </p>
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
        <!-- <div class="col-lg-2 px-lg-0 px-2">
            <div class="row">
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0  mt-3">
                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt=""></a>
                </div>
            </div>
        </div> -->
    </div>
</div>

<!-- small screen subject option  -->
<?php include('small-screen-subject.php'); ?>
<!-- small screen subject option  -->


<?php include('footer.php'); ?>