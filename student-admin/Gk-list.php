<?php include('header.php'); ?>
<div class="container-xxl flex-grow-1 container-p-y admin admin1 forum">
    <div class="row">
        <div class="col-lg-9  ">
            <div class="card px-sm-4 px-3 card-body">
                <div class="row">
                    <div class="col-12 border-bottom pb-2">
                        <div class="row  align-items-center">
                            <div class="col-sm-8">
                                <p class="fw-semibold  heading-text fs-17">GK</p>
                                <span class="para-text fw-normal fs-16">Complete your assignment before <span class="para-text fs-15 fw-medium">Due Date</span> </span>
                            </div>
                            <div class="col-sm-4 col-10 mt-sm-0 mt-2">
                                <a href="#Question-table" data-bs-toggle="modal" class="px-3 bg-white border-all justify-content-center py-2 w-100 rounded-2 text-center d-flex gap-2 fw-medium align-items-center">
                                    <iconify-icon icon="clarity:date-solid" class="fs-20" style="color: #333;"></iconify-icon>
                                    Month Filter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="fw-semibold  heading-text fs-17">Topics</p>
                        <div class="row mt-3">
                            <div class="col-12 gray-tabs">
                                <ul class="nav flex-wrap nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item me-sm-3 me-2 mb-sm-0 mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column  active" id="CAT-tab" data-bs-toggle="pill" data-bs-target="#CAT" type="button" role="tab" aria-controls="CAT" aria-selected="true">
                                            <img src="assets/img/New/CAT.png" class="w-30 img-fluid" alt="">
                                            <span class="fw-medium para-text fs-15">CAT</span>
                                        </button>
                                    </li>
                                    <li class="nav-item me-sm-3 me-2 mb-sm-0 mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="MAT-tab" data-bs-toggle="pill" data-bs-target="#MAT" type="button" role="tab" aria-controls="MAT" aria-selected="false">
                                            <img src="assets/img/New/MBACAT.png" class="w-30 img-fluid" alt="">
                                            <span class="fw-medium para-text fs-15">MBA</span>
                                        </button>
                                    </li>
                                    <li class="nav-item me-sm-3 me-2 mb-sm-0 mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="MIT-tab" data-bs-toggle="pill" data-bs-target="#MIT" type="button" role="tab" aria-controls="MIT" aria-selected="false">
                                            <img src="assets/img/New/TISSNET.png" class="w-30 img-fluid" alt="">
                                            <span class="fw-medium para-text fs-15">TISS</span>
                                        </button>
                                    </li>
                                    <li class="nav-item me-sm-3 me-2 mb-sm-0 mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="IIFT-tab" data-bs-toggle="pill" data-bs-target="#IIFT" type="button" role="tab" aria-controls="IIFT" aria-selected="false">
                                            <img src="assets/img/New/IIFT.png" class="w-30 img-fluid" alt="">
                                            <span class="fw-medium para-text fs-15">IIFT</span>
                                        </button>
                                    </li>
                                    <li class="nav-item me-sm-3 me-2 mb-sm-0 mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="IGNOU-tab" data-bs-toggle="pill" data-bs-target="#IGNOU" type="button" role="tab" aria-controls="IGNOU" aria-selected="false">
                                            <img src="assets/img/New/IGNOU MBA.png" class="w-30 img-fluid" alt="">
                                            <span class="fw-medium para-text fs-15">IGN</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <div class="tab-content px-sm-0 px-2" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="CAT" role="tabpanel" aria-labelledby="CAT-tab">
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="MAT" role="tabpanel" aria-labelledby="MAT-tab">
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="MIT" role="tabpanel" aria-labelledby="MIT-tab">
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="IIFT" role="tabpanel" aria-labelledby="IIFT-tab">
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="IGNOU" role="tabpanel" aria-labelledby="IGNOU-tab">
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 justify-content-sm-center align-items-center mb-4">
                                            <div class="col-sm-2 col-4">
                                                <img src="assets/img/New/gk.png" class="img-fluid object-fit-contain" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-7 mt-sm-0 mt-2 px-sm-0">
                                                <p class="mb-1 fw-medium heading-text fs-17 text-ellipsis">Test : Selecting Words - Reading Comprehension</p>
                                                <p class="fw-normal text-ellipsis para-text fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nullaLorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                                                <ul class="d-flex flex-wrap mt-1 gap-2 align-items-center">
                                                    <li>
                                                        <span class="fs-16 heading-text">Date : </span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium heading-text fs-16">22 June 2024</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-6 mt-sm-0 mt-3">
                                                <a href="./Gk-Details.php" class="bg-secondary px-3 py-2 text-center text-white fw-medium rounded-2 d-flex gap-2 align-items-center justify-content-center">View <iconify-icon icon="ph:caret-right-bold" style="color: white;"></iconify-icon></a>
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
        <div class="col-lg-3">
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
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

<div class="modal fade bd-example-modal-lg" id="Question-table" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-xl">
        <div class="modal-content rounded-1 py-3">
            <div class="table-responsive">
                <table class="table">
                    <thead class="">
                        <tr>
                            <th scope="col" class="col-1">Sr.No</th>
                            <th scope="col" class="col-4">Question title</th>
                            <th scope="col" class="col-1 px-0 py-3">Excellent</th>
                            <th scope="col" class="col-1 px-0 py-3">Very good</th>
                            <th scope="col" class="col-1 px-0 py-3">Satisfied</th>
                            <th scope="col" class="col-1 px-0 py-3">Poor</th>
                            <th scope="col" class="col-1 px-0 py-3">Very poor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-card-color">
                            <td>1</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, maiores.</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, maiores.</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-card-color">
                            <td>3</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, maiores.</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>4</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, maiores.</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-card-color">
                            <td>5</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, maiores.</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>6</td>
                            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, maiores.</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-3">
                        <button type="submit" class="px-2 w-100 d-block py-2 border-0 rounded-2 bg-primary text-center text-white">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>