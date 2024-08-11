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
                                <select id='date-dropdown' class="form-select py-2">
                                    <option selected>Select Year</option>
                                    <option value="1">2023</option>
                                    <option value="2">2022</option>
                                    <option value="3">2021</option>
                                    <option value="1">2023</option>
                                    <option value="2">2022</option>
                                    <option value="3">2021</option>
                                    <option value="1">2023</option>
                                    <option value="2">2022</option>
                                    <option value="3">2021</option>
                                    <option value="1">2023</option>
                                    <option value="2">2022</option>
                                    <option value="3">2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="fw-semibold  heading-text fs-17">Topics</p>
                        <div class="row mt-3">
                            <div class="col-12 gray-tabs">
                                <ul class="nav flex-wrap nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column  active" id="CAT-tab" data-bs-toggle="pill" data-bs-target="#CAT" type="button" role="tab" aria-controls="CAT" aria-selected="true">
                                            <span class="fw-medium para-text fs-15">January</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="MAT-tab" data-bs-toggle="pill" data-bs-target="#MAT" type="button" role="tab" aria-controls="MAT" aria-selected="false">
                                            <span class="fw-medium para-text fs-15 text-capitalize">february</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="MIT-tab" data-bs-toggle="pill" data-bs-target="#MIT" type="button" role="tab" aria-controls="MIT" aria-selected="false">
                                            <span class="fw-medium para-text fs-15 text-capitalize">March</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="IIFT-tab" data-bs-toggle="pill" data-bs-target="#IIFT" type="button" role="tab" aria-controls="IIFT" aria-selected="false">
                                            <span class="fw-medium para-text fs-15 text-capitalize">April</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="IGNOU-tab" data-bs-toggle="pill" data-bs-target="#IGNOU" type="button" role="tab" aria-controls="IGNOU" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">May</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="june-tab" data-bs-toggle="pill" data-bs-target="#june" type="button" role="tab" aria-controls="june" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">June</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="july-tab" data-bs-toggle="pill" data-bs-target="#july" type="button" role="tab" aria-controls="july" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">July</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="August-tab" data-bs-toggle="pill" data-bs-target="#August" type="button" role="tab" aria-controls="August" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">August</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="september-tab" data-bs-toggle="pill" data-bs-target="#september" type="button" role="tab" aria-controls="september" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">september</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="october-tab" data-bs-toggle="pill" data-bs-target="#october" type="button" role="tab" aria-controls="october" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">october</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="november-tab" data-bs-toggle="pill" data-bs-target="#november" type="button" role="tab" aria-controls="november" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">november</span>
                                        </button>
                                    </li>
                                    <li class="nav-item  me-2  mb-2" role="presentation">
                                        <button class="nav-link rounded-3 px-4 py-2 box-shadow-none d-flex gap-2 flex-column" id="December-tab" data-bs-toggle="pill" data-bs-target="#December" type="button" role="tab" aria-controls="December" aria-selected="false">
                                            <span class="fw-medium para-text text-capitalizes fs-15">December</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <div class="tab-content px-sm-0 px-2" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="CAT" role="tabpanel" aria-labelledby="CAT-tab">
                                        <ul>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 1st January 2023 </a>
                                            </li>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 2nd January 2023</a>
                                            </li>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 3rd January 2023</a>
                                            </li>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 4th January 2023</a>
                                            </li>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 5th January 2023</a>
                                            </li>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 6th January 2023</a>
                                            </li>
                                            <li class="mb-3 d-flex gap-2 align-items-center">
                                                <iconify-icon icon="material-symbols:circle" class="fs-10" style="color: #8cb53f;"></iconify-icon>
                                                <a href="./Gk-single-day-article.php" class="tertiary-font text-capitalize  fw-medium fs-17 primary-color">Daily Current Affairs - 7th January 2023</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="MAT" role="tabpanel" aria-labelledby="MAT-tab">
                                        February
                                    </div>
                                    <div class="tab-pane fade" id="MIT" role="tabpanel" aria-labelledby="MIT-tab">
                                        March
                                    </div>
                                    <div class="tab-pane fade" id="IIFT" role="tabpanel" aria-labelledby="IIFT-tab">
                                        April
                                    </div>
                                    <div class="tab-pane fade" id="IGNOU" role="tabpanel" aria-labelledby="IGNOU-tab">
                                        May
                                    </div>
                                    <div class="tab-pane fade" id="june" role="tabpanel" aria-labelledby="june-tab">
                                        june
                                    </div>
                                    <div class="tab-pane fade" id="july" role="tabpanel" aria-labelledby="july-tab">
                                        july
                                    </div>
                                    <div class="tab-pane fade" id="August" role="tabpanel" aria-labelledby="August-tab">
                                        August
                                    </div>
                                    <div class="tab-pane fade" id="september" role="tabpanel" aria-labelledby="september-tab">
                                        september
                                    </div>
                                    <div class="tab-pane fade" id="october" role="tabpanel" aria-labelledby="october-tab">
                                        october
                                    </div>
                                    <div class="tab-pane fade" id="november" role="tabpanel" aria-labelledby="november-tab">
                                        november
                                    </div>
                                    <div class="tab-pane fade" id="December" role="tabpanel" aria-labelledby="December-tab">
                                        December
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