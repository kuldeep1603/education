<?php include('header.php'); ?>
<div class="container-xxl flex-grow-1 container-p-y admin admin1 person-details">
    <div class="row">
        <div class="col-9">
            <div class="card px-3 card-body">
                <div class="row">
                    <div class="col-4 light-primary-tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active  heading-text fw-medium  d-flex justify-content-start gap-3 box-shadow-none align-items-center" id="Profile-tab" data-bs-toggle="pill" data-bs-target="#Profile" type="button" role="tab" aria-controls="Profile-home" aria-selected="true">
                                    <iconify-icon icon="iconamoon:profile-fill" class="fs-22 heading-text"></iconify-icon>
                                    Profile
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  heading-text fw-medium  d-flex justify-content-start gap-3 box-shadow-none align-items-center" id="Order-History" data-bs-toggle="pill" data-bs-target="#Order-History" type="button" role="tab" aria-controls="Order-History" aria-selected="false">
                                    <iconify-icon icon="fluent:payment-24-filled" class="fs-22 heading-text"></iconify-icon>
                                    Order History
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  heading-text fw-medium  d-flex justify-content-start gap-3 box-shadow-none align-items-center" id="Affiliate-Link" data-bs-toggle="pill" data-bs-target="#Affiliate-Link" type="button" role="tab" aria-controls="Affiliate-Link" aria-selected="false">
                                    <iconify-icon icon="ph:link-fill" class="fs-22 heading-text"></iconify-icon>
                                    Affiliate Link
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="Profile-tab">
                                <div class="card border-all card-body px-3">
                                    <form action="#" autocomplete="off">
                                        <div class="row">
                                            <div class="col-12">
                                                <b class="heading-text fs-18 fw-semibold d-block text-center">Profile Profile</b>
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
                                            <div class="col-5">
                                                <button type="button" class="px-3  py-2  bg-white rounded-1 secondary-color fs-14 border-secondary-all  fw-medium">Change Password</a>
                                            </div>
                                            <div class="col-4">
                                                <button type="button" class="px-3 py-2 d-block w-100 bg-white rounded-1 heading-text fs-14 border-all  fw-medium">Go back </button>
                                            </div>
                                            <div class="col-3">
                                                <button type="submit" class="px-3 py-2 d-block w-100 bg-secondary text-white rounded-1  fs-14 border-0  fw-medium">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Order-History" role="tabpanel" aria-labelledby="Order History-tab">Order History</div>
                            <div class="tab-pane fade" id="Affiliate-Link" role="tabpanel" aria-labelledby="Affiliate-Link-tab">
                                <div class="card border-all card-body px-3">
                                    <b class="fs-17 d-block fw-semibold heading-text">Affiliate Link</b>
                                    <span class="para-text d-block fs-16 fw-normal">Add information about yourself</span>
                                    <div class="card mt-3 py-3 border-light-all rounded-1 card-body px-3">
                                        <b class="fs-16 d-block fw-semibold heading-text">Give 200, Get 25</b>
                                        <span class="para-text d-block fs-15 mt-2 fw-normal">Everyone you refer gets 200 in crredit over 60 days once they have spent 25 with us you will get 25. There is no Limit to the amount of credit you can earn through referrals</span>
                                    </div>
                                    <div class="card mt-3 py-3 border-light-all rounded-1 card-body px-3">
                                        <b class="fs-16 d-block fw-semibold heading-text">Share Your Link</b>
                                        <span class="para-text d-block fs-15 mt-2 fw-normal">Copy your personal referral link and share it with your friends and followers</span>
                                        <div class="row mt-2">
                                            <div class="col-9">
                                                <div class="card card-body px-2 py-1 rounded-1 bg-card-color">
                                                    <span class="fs-15 fw-semibold text-ellipsis secondary-color">https://mdo.com/t/53434534/</span>
                                                </div>
                                            </div>
                                            <div class="col-3 ps-0">
                                                <a href="#" class="px-3 py-1 d-flex gap-2 align-items-center w-100 fs-14 rounded-1 bg-secondary text-white text-center">
                                                    <iconify-icon icon="solar:copy-bold" style="color: white;"></iconify-icon>Copy
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-3 py-3 border-light-all rounded-1 card-body px-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ">
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
</div>
<?php include('footer.php'); ?>