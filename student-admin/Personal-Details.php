<?php include('header.php'); ?>
<div class="container-xxl flex-grow-1 container-p-y admin admin1 person-details">
    <div class="row">
        <div class="col-lg-10 p-sm-2 p-1">
            <div class="card px-3 card-body">
                <div class="row">
                    <div class="col-xl-3 mb-xl-0 mb-4 col-12 light-primary-tabs">
                        <div class="nav flex-wrap gap-2  flex-row nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active heading-text fw-medium  d-flex justify-content-start gap-2 fs-14 box-shadow-none align-items-center" id="Profile-tab" data-bs-toggle="pill" data-bs-target="#Profile" type="button" role="tab" aria-controls="Profile" aria-selected="true">
                                <iconify-icon icon="iconamoon:profile-fill" class="fs-22 heading-text"></iconify-icon>
                              <p class="text-truncate">Profile</p>
                            </button>
                            <button class="nav-link heading-text fw-medium  d-flex justify-content-start gap-2 fs-14 box-shadow-none align-items-center" id="Order-History-tab" data-bs-toggle="pill" data-bs-target="#Order-History" type="button" role="tab" aria-controls="Order-History" aria-selected="false">
                                <iconify-icon icon="fluent:payment-24-filled" class="fs-22 heading-text"></iconify-icon>
                                <p class="text-truncate">Payment History</p>
                            </button>
                            <button class="nav-link heading-text fw-medium  d-flex justify-content-start gap-2 fs-14 box-shadow-none align-items-center" id="Affiliate-Link-tab" data-bs-toggle="pill" data-bs-target="#Affiliate-Link" type="button" role="tab" aria-controls="Affiliate-Link" aria-selected="false">
                                <iconify-icon icon="ph:link-fill" class="fs-22 heading-text"></iconify-icon>
                                <p class="text-truncate">Affiliate Link</p>
                            </button>
                            <button class="nav-link heading-text fw-medium  d-flex justify-content-start gap-2 fs-14 box-shadow-none align-items-center" id="payment-History-tab" data-bs-toggle="pill" data-bs-target="#payment-History" type="button" role="tab" aria-controls="payment-History" aria-selected="false">
                                <iconify-icon icon="mdi:history" class="fs-22 heading-text"></iconify-icon>
                                <p class="text-truncate">Order History</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-9 col-12 ps-xl-0 ">
                        <div class="tab-content p-0" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card border-light-all-1 card-body px-3">
                                    <form action="#" autocomplete="off">
                                        <div class="row">
                                            <div class="col-12">
                                                <b class="heading-text fs-18 fw-semibold d-block text-center">Profile </b>
                                                <span class="para-text fs-16 fw-medium d-block text-center">Add information about yourself</span>
                                            </div>
                                            <div class="col-12 mt-3 d-flex justify-content-center align-items-center">
                                                <div class="circle position-relative d-flex justify-content-center align-items-center">
                                                    <img class="profile-pic object-fit-contain" src="assets/img/New/profile-image.png">
                                                    <div class="p-image">
                                                        <i class="fa p-2 rounded-circle fs-12 bg-primary text-white fa-camera upload-button"></i>
                                                        <input class="file-upload" type="file" accept="image/*" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-6 mb-4">
                                                <input type="text" name="" placeholder="First name*" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <input type="text" name="" placeholder="Last Name*" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-12 mb-4">
                                                <input type="text" name="" placeholder="Address" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <input type="text" name="" placeholder="City" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <input type="text" name="" placeholder="State" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <input type="text" name="" placeholder="Pincode" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-12 mb-4">
                                                <input type="number" name="" placeholder="Phone Number" class="form-control py-2" id="">
                                            </div>
                                            <div class="col-sm-5 col-12 mb-sm-0 mb-3">
                                                <button data-bs-target="#changepassword" data-bs-dismiss="modal" data-bs-toggle="modal" type="button" class="px-3  py-2  bg-white rounded-1 secondary-color fs-14 border-secondary-all  fw-medium">Change Password</a>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <a href="./my-course.php" type="button" class="px-3 text-center py-2 d-block w-100 bg-white rounded-1 heading-text fs-14 border-all-1  fw-medium">Go back </a>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <button type="submit" class="px-3 py-2 d-block w-100 bg-secondary text-white rounded-1  fs-14 border-0  fw-medium">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="Order-History" role="tabpanel" aria-labelledby="Order-History-tab">
                                <div class="card border-light-all-1 card-body px-3">
                                    <b class="fs-17 d-block fw-semibold heading-text">Payments</b>
                                    <span class="para-text d-block mt-1 fs-16 fw-normal">Add information about yourself</span>
                                    <ul class="nav black-tabs flex-wrap border-all rounded-3 nav-pills mt-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-0 fs-15 d-block border-0 m-0 w-100 active" id="Due-Payments-tab" data-bs-toggle="pill" data-bs-target="#Due-Payments" type="button" role="tab" aria-controls="Due-Payments" aria-selected="true">Due Payments</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-0 fs-15 d-block border-0 m-0 w-100" id="Upcoming-Payments-tab" data-bs-toggle="pill" data-bs-target="#Upcoming-Payments" type="button" role="tab" aria-controls="Upcoming-Payments" aria-selected="false">Upcoming Payments</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-0 fs-15 d-block border-0 m-0 w-100" id="Payment-History-tab" data-bs-toggle="pill" data-bs-target="#Payment-History" type="button" role="tab" aria-controls="Payment-History" aria-selected="false">Payment History</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-0" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="Due-Payments" role="tabpanel" aria-labelledby="Due-Payments-tab">
                                            <div class="card pt-2 pb-3 border-light-all mt-4">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col" class="fs-13 px-2">Course Name </th>
                                                                <th scope="col" class="fs-13 px-2">Due Date</th>
                                                                <th scope="col" class="fs-13 px-2">Due Amount</th>
                                                                <th scope="col" class="fs-13 px-2">EMI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-card-color">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <ul class="d-flex mt-4 mx-sm-3 mx-1 flex-wrap gap-3 justify-content-between align-items-center">
                                                    <li class="">
                                                        <select class="rounded-1 bg-card-color px-3  fw-medium heading-text" id="per-page" aria-label="Default select example">
                                                            <option selected>10</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                        </select>
                                                        <label for="per-page">Per Page</label>
                                                    </li>
                                                    <li class="">
                                                        <select class="rounded-1 bg-card-color px-2 fw-medium heading-text" id="page-1" aria-label="Default select example">
                                                            <option selected>1</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                        </select>
                                                        <label for="page-1"> of 1 pages</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Upcoming-Payments" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card pt-2 pb-3 border-light-all mt-4">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col" class="fs-13 px-2">Course Name </th>
                                                                <th scope="col" class="fs-13 px-2">Date</th>
                                                                <th scope="col" class="fs-13 px-2">Amount</th>
                                                                <th scope="col" class="fs-13 px-2">EMI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-card-color">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">@2/4</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center">Pay Now</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <ul class="d-flex mt-4 mx-sm-3 mx-1 flex-wrap gap-3 justify-content-between align-items-center">
                                                    <li class="">
                                                        <select class="rounded-1 bg-card-color px-3  fw-medium heading-text" id="per-page" aria-label="Default select example">
                                                            <option selected>10</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                        </select>
                                                        <label for="per-page">Per Page</label>
                                                    </li>
                                                    <li class="">
                                                        <select class="rounded-1 bg-card-color px-2 fw-medium heading-text" id="page-1" aria-label="Default select example">
                                                            <option selected>1</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                        </select>
                                                        <label for="page-1"> of 1 pages</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Payment-History" role="tabpanel" aria-labelledby="Payment-History-tab">
                                            <div class="card pt-2 pb-3 border-light-all mt-4">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col" class="fs-13 px-2">Course Name </th>
                                                                <th scope="col" class="fs-13 px-2">Date</th>
                                                                <th scope="col" class="fs-13 px-2">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-card-color">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center"><iconify-icon icon="material-symbols:download" style="color: white;"></iconify-icon> Invoice</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center"><iconify-icon icon="material-symbols:download" style="color: white;"></iconify-icon> Invoice</a></td>
                                                            </tr>
                                                            <tr class="bg-card-color">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center"><iconify-icon icon="material-symbols:download" style="color: white;"></iconify-icon> Invoice</a></td>
                                                            </tr>
                                                            <tr class="">
                                                                <th scope="row" class="fw-semibold py-2 px-2 fs-16">MBA</th>
                                                                <td class="fw-medium py-2 px-2 fs-15">Mar 1, 2023</td>
                                                                <td class="fw-medium py-2 px-2 fs-15">100</td>
                                                                <td class="py-2 px-2"><a href="#" class="px-3 py-1 rounded-1 d-block w-100 fs-15  bg-secondary text-white text-center"><iconify-icon icon="material-symbols:download" style="color: white;"></iconify-icon> Invoice</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <ul class="d-flex mt-4 mx-sm-3 mx-1 flex-wrap gap-3 justify-content-between align-items-center">
                                                    <li class="">
                                                        <select class="rounded-1 bg-card-color px-3  fw-medium heading-text" id="per-page" aria-label="Default select example">
                                                            <option selected>10</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                        </select>
                                                        <label for="per-page">Per Page</label>
                                                    </li>
                                                    <li class="">
                                                        <select class="rounded-1 bg-card-color px-2 fw-medium heading-text" id="page-1" aria-label="Default select example">
                                                            <option selected>1</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                            <option value="1">11</option>
                                                        </select>
                                                        <label for="page-1"> of 1 pages</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Affiliate-Link" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card border-light-all-1 card-body px-3">
                                    <b class="fs-17 d-block fw-semibold heading-text">Affiliate Link</b>
                                    <span class="para-text d-block mt-1 fs-16 fw-normal">Add information about yourself</span>
                                    <div class="card mt-3 py-3 border-light-all rounded-1 card-body px-3">
                                        <b class="fs-15 d-block fw-medium heading-text">Give 200, Get 25</b>
                                        <span class="para-text d-block fs-15 mt-2 fw-normal">Everyone you refer gets 200 in crredit over 60 days once they have spent 25 with us you will get 25. There is no Limit to the amount of credit you can earn through referrals</span>
                                    </div>
                                    <div class="card mt-3 py-3 border-light-all rounded-1 card-body px-3">
                                        <b class="fs-15 d-block fw-medium heading-text">Share Your Link</b>
                                        <span class="para-text d-block fs-15 mt-2 fw-normal">Copy your personal referral link and share it with your friends and followers</span>
                                        <div class="row mt-2">
                                            <div class="col-sm-9 col-12">
                                                <div class="card card-body  py-2 rounded-1 bg-card-color">
                                                    <span class="fs-15 fw-semibold text-ellipsis secondary-color" id="myText">https://mdo.com/t/53434534/</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6 ps-sm-0 mt-sm-0 mt-2">
                                                <a onclick="copyContent()" class="px-3 py-2 d-flex gap-2 justify-content-center align-items-center w-100 fs-14 rounded-1 bg-secondary text-white text-center">
                                                    <iconify-icon icon="solar:copy-bold" style="color: white;"></iconify-icon>Copy
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-3 py-3 border-light-all rounded-1 card-body px-3">
                                        <b class="fs-15 d-block fw-medium heading-text">Referral Stats</b>
                                        <ul class="mt-3">
                                            <li class="d-flex mb-3 border-bottom  flex-lg-nowrap flex-wrap pb-2 justify-content-between align-items-center">
                                                <b class="para-text fw-semibold fs-14">Clicks</b>
                                                <span class="fs-14 para-text fw-normal ">Number of times your link has been clicked</span>
                                                <b class="para-text fw-semibold fs-14">100</b>
                                            </li>
                                            <li class="d-flex mb-3 border-bottom  flex-lg-nowrap flex-wrap pb-2 justify-content-between align-items-center">
                                                <b class="para-text fw-semibold fs-14">Paid </b>
                                                <span class="fs-14 para-text fw-normal ">Amount that has ready been applied to your account</span>
                                                <b class="para-text fw-semibold fs-14">100</b>
                                            </li>
                                            <li class="d-flex mb-3 border-bottom  flex-lg-nowrap flex-wrap pb-2 justify-content-between align-items-center">
                                                <b class="para-text fw-semibold fs-14">Earned</b>
                                                <span class="fs-14 para-text fw-normal ">Amount that will be applied to your account balance</span>
                                                <b class="para-text fw-semibold fs-14">100</b>
                                            </li>
                                            <li class="d-flex mb-3 border-bottom  flex-lg-nowrap flex-wrap pb-2 justify-content-between align-items-center">
                                                <b class="para-text fw-semibold fs-14">Referrals</b>
                                                <span class="fs-14 para-text fw-normal">people who have signed up using your link</span>
                                                <b class="para-text fw-semibold fs-14">100</b>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-History" role="tabpanel" aria-labelledby="payment-History-tab">
                                <div class="card border-light-all-1 card-body px-3">
                                    <b class="fs-17 d-block fw-semibold heading-text">Order History</b>
                                    <span class="para-text d-block mt-1 fs-16 fw-normal">Yourself Order History is Here..!</span>
                                    <ul>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2  ms-2">
                                            <ol class="d-flex justify-content-between gap-3 align-items-center flex-wrap pt-3 pb-2">
                                                <li class="d-flex gap-2 ">
                                                    <iconify-icon icon="mdi:history" class="fs-28" style="color: #0a3d6c;"></iconify-icon>
                                                    <div class="">
                                                        <p class="fw-medium  heading-text fs-16">MBACET Course</p>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <span class="text-color-3 fw-normal fs-15">Date : &nbsp; <span class="fw-medium fs-15 text-color-3">22 June 2024</span></span>
                                                            <span class="text-color-3 fw-normal fs-15">Price : &nbsp; <span class="fw-medium fs-15 text-color-3">200</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ps-md-0 ps-4">
                                                    <a href="./Order-history-details.php" class="text-center text-white bg-secondary fs-15 fw-semibold px-4 rounded-1 py-1">View <i class="fa-solid text-white fs-14 fa-angle-right"></i></a>
                                                </li>
                                            </ol>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 ps-0">
            <div class="row">
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid p-sm-0 p-1" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3 ">
                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid p-sm-0 p-1" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0  mt-3">
                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid p-sm-0 p-1" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('footer.php'); ?>

<!-- Change Password -->
<div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-20 fw-semibold heading-text" id="exampleModalLabel">
                    Change Password
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" autocomplete="off">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" name="" required class="form-control" placeholder="Current Password" id="" />
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" name="" required class="form-control" placeholder="New Password" id="" />
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" name="" required class="form-control" placeholder="Confirm Password" id="" />
                            </div>
                            <div class="col-12">
                                <button type="submit" class="px-3 py-2 text-center fs-16 border-0 rounded-2 text-white d-block w-100 bg-text-color">
                                     Password
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Change Password -->

<script>
    let text = document.getElementById('myText').innerHTML;
    const copyContent = async () => {
        try {
            await navigator.clipboard.writeText(text);
            console.log('Content copied to clipboard');
            alert('Link copied to clipboard');
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
    }
</script>


// <script>
//     document.addEventListener("DOMContentLoaded", function() {
//         var layoutMenu = document.getElementById("layout-menus");
//         if (layoutMenu) {
//             layoutMenu.classList.add("layout-menu-collapsed");
//         }
//     });
// </script>

<script>
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>