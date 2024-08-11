<?php include('./header.php'); ?>

<style>
.Course-Details .tab-content {
    display: none;
}

.Course-Details .tab-content.active {
    display: block;
}
</style>
<section class="package-select">
    <!-- small banner  -->
    <div class="package-select">
        <section class="banner">
            <div class="swiper main-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide py-3" style="background: url('https://ordainit.com/educate/assets/img/video/bg-1-1.jpg') no-repeat center center;">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 text-start d-sm-block d-none">
                                    <p class="text-white fw-semibold text-start fs-28 tertiary-font">WE'RE HERE FOR YOU!</p>
                                    <h1 class="text-white mt-3 mb-4 text-start tertiary-font fs-34 fw-bold">Get in touch with us to learn about <br> the courses offered.</h1>
                                    <ul>
                                        <li class="d-flex gap-2 mb-2 align-items-center ">
                                            <i class="fa-solid fa-envelope text-white"></i>
                                            <a href="mailto:manoeuvre.edu@gmail.com" class="text-white fw-medium secondary-font">manoeuvre.edu@gmail.com</a>
                                        </li>
                                        <li class="d-flex gap-2 mb-2 align-items-center ">
                                            <i class="fa-solid fa-phone text-white"></i>
                                            <a href="+91 8828581455" class="text-white fw-medium secondary-font">8828581455 </a>
                                        </li>
                                        <li class="d-flex gap-2 mb-2 align-items-center ">
                                            <i class="fa-solid fa-location-dot text-white"></i>
                                            <a href="mailto:manoeuvre.edu@gmail.com" class="text-white fw-medium secondary-font">VASAI WEST,MAHARASHTRA - 401202.</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 mt-lg-0 mt-3">
                                    <div class="card card-body shadow">
                                        <p class="fw-semibold heading-text fs-16 text-start tertiary-font mb-1">Send a meassage</p>
                                        <h5 class="tertiary-font fw-semibold fs-18 mb-3 text-start  primary-color">request a call back </h5>
                                        <form action="#" autocomplete="off">
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <input type="text" placeholder="Name" class="form-control py-2">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <input type="text" placeholder="Email Address" class="form-control py-2">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <input type="number" placeholder="Phone Number" class="form-control py-2">
                                                </div>
                                                <!-- <div class="col-12 mb-3">
                                                    <input type="number" placeholder="Pincode" class="form-control py-2">
                                                </div> -->
                                                <div class="col-12 ">
                                                    <button type="submit" class="d-block w-100 bg-primary text-white text-center  rounded-1 border-0 px-3 py-2">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </section>
    </div>
    <!-- small banner  -->
    <!-- Choose your Session -->
    <section class="section pb-0 Choose-Session">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 colss-1">
                    <p class="section-sub-heading text-start">CAT COURSEs</p>
                    <h3 class="section-heading secondary-color text-start">Choose your Session</h3>
                </div>
                <div class="col-lg-12 colss-2 mt-3">
                    <div class=" row row-cols-1 justify-content-center row-cols-xl-5 row-cols-md-3 row-cols-sm-2 g-2 g-lg-3 nav nav-tabs border-0">
                        <div class="col">
                            <li class="nav-item col border-0">
                                <a class="nav-link border-0 active p-0" id="videos-tab" data-bs-toggle="tab" href="#videos">
                                    <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="background-color:#EBEBFF">
                                        <div class="py-2 px-3 bg-white border-light-all">
                                            <img src="./assets/img/package-select/videos.png" alt="">
                                        </div>
                                        <p class="heading-text fw-medium text-ellipsis">Live Classes</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item col border-0">
                                <a class="nav-link border-0 p-0" id="mocktest-tab" data-bs-toggle="tab" href="#mocktest">
                                    <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #E1F7E3">
                                        <div class="py-2 px-3" style="background-color:#E1F7E3">
                                            <img src="./assets/img/package-select/mock-test.png" alt=">Mock Test">
                                        </div>
                                        <p class="heading-text text-ellipsis fw-medium">Self Study</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item col border-0">
                                <a class="nav-link border-0 p-0" id="selfstudy-tab" data-bs-toggle="tab" href="#selfstudy">
                                    <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #EBEBFF">
                                        <div class="py-2 px-3" style="background-color:#EBEBFF">
                                            <img src="./assets/img/package-select/e-books.png" alt="">
                                        </div>
                                        <p class="heading-text text-ellipsis fw-medium">Sectional</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item col border-0">
                                <a class="nav-link border-0 p-0" id="classroom-tab" data-bs-toggle="tab" href="#classroom">
                                    <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #FFF2E5">
                                        <div class="py-2 px-3" style="background-color:#FFF2E5">
                                            <img src="./assets/img/package-select/classroom.png" alt="">
                                        </div>
                                        <p class="heading-text text-ellipsis fw-medium">Mock Test</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item col border-0">
                                <a class="nav-link border-0 p-0" id="selfstudy-tab" data-bs-toggle="tab" href="#selfstudy">
                                    <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #EBEBFF">
                                        <div class="py-2 px-3" style="background-color:#EBEBFF">
                                            <img src="./assets/img/package-select/e-books.png" alt="">
                                        </div>
                                        <p class="heading-text fw-medium text-ellipsis">Books- Ebooks</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item col border-0">
                                <a class="nav-link border-0 p-0" id="classroom-tab" data-bs-toggle="tab" href="#classroom">
                                    <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #FFF2E5">
                                        <div class="py-2 px-3" style="background-color:#FFF2E5">
                                            <img src="./assets/img/package-select/classroom.png" alt="">
                                        </div>
                                        <p class="heading-text fw-medium text-ellipsis">GD/WAT/PI</p>
                                    </div>
                                </a>
                            </li>
                        </div>

                    </div>
                    <!-- <ul class="nav nav-tabs justify-content-center align-content-center flex-wrap border-0">
                        <li class="nav-item col border-0">
                            <a class="nav-link border-0 active ps-md-0" id="videos-tab" data-bs-toggle="tab" href="#videos">
                                <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="background-color:#EBEBFF">
                                    <div class="py-2 px-3 bg-white border-light-all">
                                        <img src="./assets/img/package-select/videos.png" alt="">
                                    </div>
                                    <p class="heading-text fw-medium">Videos</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col border-0">
                            <a class="nav-link border-0" id="ebooks-tab" data-bs-toggle="tab" href="#ebooks">
                                <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #FFEEE8">
                                    <div class="py-2 px-3" style="background-color:#FFEEE8">
                                        <img src="./assets/img/package-select/e-books.png" alt="">
                                    </div>
                                    <p class="heading-text fw-medium">Ebooks</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col border-0">
                            <a class="nav-link border-0" id="mocktest-tab" data-bs-toggle="tab" href="#mocktest">
                                <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #E1F7E3">
                                    <div class="py-2 px-3" style="background-color:#E1F7E3">
                                        <img src="./assets/img/package-select/mock-test.png" alt=">Mock Test">
                                    </div>
                                    <p class="heading-text fw-medium">Mock Test</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col border-0">
                            <a class="nav-link border-0" id="selfstudy-tab" data-bs-toggle="tab" href="#selfstudy">
                                <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #EBEBFF">
                                    <div class="py-2 px-3" style="background-color:#EBEBFF">
                                        <img src="./assets/img/package-select/e-books.png" alt="">
                                    </div>
                                    <p class="heading-text fw-medium">Self Study</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col border-0">
                            <a class="nav-link border-0" id="classroom-tab" data-bs-toggle="tab" href="#classroom">
                                <div class="d-flex flex-row card border-light-all card-body gap-3 align-items-center" style="border:2px solid #FFF2E5">
                                    <div class="py-2 px-3" style="background-color:#FFF2E5">
                                        <img src="./assets/img/package-select/classroom.png" alt="">
                                    </div>
                                    <p class="heading-text fw-medium">Classroom</p>
                                </div>
                            </a>
                        </li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="videos">
                            <div class="col-lg-12 mt-5">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="img-banner shadow-lg d-inline-flex position-relative">
                                            <span class="position-absolute w-75 text-center bg-primary rounded-2 fs-15 text-ellipsis text-white translate-right p-1" style="right: 0px ; top: 0px;">
                                                Installment Available
                                            </span>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFrceK9qU24qwJYP5fuZZg2b2gPZBvfhuFhw&usqp=CAU" class="img-fluid h-100  w-100" alt="">
                                        </div>
                                        <div class="card shadow rounded-0 border-0 card-body">
                                            <h5 class="heading-text text-ellipsis fs-18">Education Software </h5>
                                            <p class="fs-15 border-dashed-bottom text-ellipsis pb-2 para-text mt-2">Collaboratively simplify user friendly netw-
                                                orks after principle centered </p>
                                            <ul class="mt-2 pb-3 packages-list border-dashed-bottom points">
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <!-- <i class="fa-solid fa-check primary-color"></i> -->
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <!-- <i class="fa-solid fa-check primary-color"></i> -->
                                                    <span class="fw-medium fs-15 para-text">Own analytics platform</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <!-- <i class="fa-solid fa-check primary-color"></i> -->
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <!-- <i class="fa-solid fa-check primary-color"></i> -->
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                            </ul>
                                            <ul class="mt-3">
                                                <li class="d-flex gap-2 align-items-center">
                                                    <h4 class="fw-bold fs-18 heading-text">₹22,000/-</h4>
                                                    <p class="para-text">MRP <del class="para-text">₹22,000/-</del></p>
                                                </li>
                                                <li class="mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                    <a href="./checkout.php" class="btn-color text-white py-2 px-3 rounded-3">Buy Now</a>
                                                    <a href="cart.php" class="primary-color fw-medium border-primary  py-2 px-3 rounded-3">Add to cart</a>
                                                </li>
                                                <li class="mt-3">
                                                    <a href="course-details.php" class="bg-secondary text-center text-white rounded-2 py-2 px-3 w-100 d-block">View Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="img-banner shadow-lg d-inline-flex position-relative">
                                            <span class="position-absolute w-75 text-center bg-primary rounded-2 fs-15 text-ellipsis text-white translate-right p-1" style="right: 0px ; top: 0px;">
                                                Installment Available
                                            </span>
                                            <img src="https://images.pexels.com/photos/16143559/pexels-photo-16143559/free-photo-of-landscape-of-rocky-snowcapped-mountains.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid h-100  w-100" alt="">
                                        </div>
                                        <div class="card shadow rounded-0 border-0 card-body">
                                            <h5 class="heading-text fs-18">Education Software </h5>
                                            <p class="fs-15 border-dashed-bottom text-ellipsis pb-2 para-text mt-2">Collaboratively simplify user friendly netw-
                                                orks after principle centered </p>
                                            <ul class="mt-2 pb-3 border-dashed-bottom points">
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Own analytics platform</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Own analytics platform</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                            </ul>
                                            <ul class="mt-3">
                                                <li class="d-flex gap-2 align-items-center">
                                                    <h4 class="fw-bold fs-18 heading-text">₹22,000/-</h4>
                                                    <p class="para-text">MRP <del class="para-text">₹22,000/-</del></p>
                                                </li>
                                                <li class="mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                    <a href="./checkout.php" class="btn-color text-white py-2 px-3 rounded-3">Buy Now</a>
                                                    <a href="cart.php" class="primary-color fw-medium border-primary  py-2 px-3 rounded-3">Add to cart</a>
                                                </li>
                                                <li class="mt-3">
                                                    <a href="course-details.php" class="bg-secondary text-center text-white rounded-2 py-2 px-3 w-100 d-block">View Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="img-banner shadow-lg">
                                            <img src="./assets/img/package-select/image.png" class="img-fluid h-100  w-100" alt="">
                                        </div>
                                        <div class="card shadow rounded-0 border-0 card-body">
                                            <h5 class="heading-text fs-18">Education Software </h5>
                                            <p class="fs-15 border-dashed-bottom text-ellipsis pb-2 para-text mt-2">Collaboratively simplify user friendly netw-
                                                orks after principle centered </p>
                                            <ul class="mt-2 pb-3 border-dashed-bottom points">
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Own analytics platform</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                            </ul>
                                            <ul class="mt-3">
                                                <li class="d-flex gap-2 align-items-center">
                                                    <h4 class="fw-bold fs-18 heading-text">₹22,000/-</h4>
                                                    <p class="para-text">MRP <del class="para-text">₹22,000/-</del></p>
                                                </li>
                                                <li class="mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                    <a href="./checkout.php" class="btn-color text-white py-2 px-3 rounded-3">Buy Now</a>
                                                    <a href="cart.php" class="primary-color fw-medium border-primary  py-2 px-3 rounded-3">Add to cart</a>
                                                </li>
                                                <li class="mt-3">
                                                    <a href="course-details.php" class="bg-secondary text-center text-white rounded-2 py-2 px-3 w-100 d-block">View Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="img-banner shadow-lg">
                                            <img src="./assets/img/package-select/image.png" class="img-fluid h-100  w-100" alt="">
                                        </div>
                                        <div class="card shadow rounded-0 border-0 card-body">
                                            <h5 class="heading-text fs-18">Education Software </h5>
                                            <p class="fs-15 border-dashed-bottom text-ellipsis pb-2 para-text mt-2">Collaboratively simplify user friendly netw-
                                                orks after principle centered </p>
                                            <ul class="mt-2 pb-3 border-dashed-bottom points">
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Own analytics platform</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mt-2">
                                                    <i class="fa-solid fa-check primary-color"></i>
                                                    <span class="fw-medium fs-15 para-text">Ten links available</span>
                                                </li>
                                            </ul>
                                            <ul class="mt-3">
                                                <li class="d-flex gap-2 align-items-center">
                                                    <h4 class="fw-bold fs-18 heading-text">₹22,000/-</h4>
                                                    <p class="para-text">MRP <del class="para-text">₹22,000/-</del></p>
                                                </li>
                                                <li class="mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                    <a href="./checkout.php" class="btn-color text-white py-2 px-3 rounded-3">Buy Now</a>
                                                    <a href="cart.php" class="primary-color fw-medium border-primary  py-2 px-3 rounded-3">Add to cart</a>
                                                </li>
                                                <li class="mt-3">
                                                    <a href="course-details.php" class="bg-secondary text-center text-white rounded-2 py-2 px-3 w-100 d-block">View Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ebooks">
                            Ebooks content goes here
                        </div>
                        <div class="tab-pane fade" id="mocktest">
                            mocktest content goes here
                        </div>
                        <div class="tab-pane fade" id="selfstudy">
                            selfstudy content goes here
                        </div>
                        <div class="tab-pane fade" id="classroom">
                            classroom content goes here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose your Session -->
    <!-- testimonails -->
    <section class="section testimonails pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="section-sub-heading">Our Students Testimonials</p>
                    <h3 class="section-heading secondary-color ">Students Say’s About Oue University</h3>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="swiper testimonial pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card text-center d-flex h-100 j align-items-center justify-content-start card-body py-5 px-4 border-0 rounded-4  card-color">
                                    <div class="img-circle rounded-circle mb-3">
                                        <img src="https://images.pexels.com/photos/1370750/pexels-photo-1370750.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid w-100 h-100 rounded-circle" alt="">
                                    </div>
                                    <span class="read-more-text fs-15 text-color-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque animi dignissimos laboriosam debitis minus eos eaque nam aut distinctio veritatis facilis laudantium a corporis, temporibus dolore nulla corrupti aliquam libero. Beatae, corrupti ipsam perferendis laudantium officia quis eligendi facilis delectus. Labore sunt dolor illo harum omnis sit voluptatem exercitationem aspernatur!</span>
                                    <a class="blue-color text-start d-block mt-1 fw-medium fs-14 read-more-button" id="Read-More-Btn">READ MORE</a>
                                    <h5 class="primary-color fw-bold fs-18 mt-4 text-center">Zara Head Milan</h5>
                                    <span class="d-block fw-normal text-color para-text fs-13 mt-3">IIM L, NITIE, IIT KGP, IIT M, New IIMs and Baby IIMs
                                        Joined: IIM Lucknow</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center d-flex h-100 j align-items-center justify-content-start card-body py-5 px-4 border-0 rounded-4  card-color">
                                    <div class="img-circle rounded-circle mb-3">
                                        <img src="https://images.pexels.com/photos/3140066/pexels-photo-3140066.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid w-100 h-100 rounded-circle" alt="">
                                    </div>
                                    <span class="read-more-text fs-15 text-color-1">I want to thank the Manoeuvre team a lot for all the help. FINALLY i got IHM PUSA in the 4th round and I am so glad that I got such a good Support from whole MANOEUVRE Education. Thank you for the Education and lectures you provided. I am so HAPPY right now!! Thank you MANOEUVRE SUPPO........</span>
                                    <a class="blue-color text-start d-block mt-1 fw-medium fs-14 read-more-button" id="Read-More-Btn">READ MORE</a>
                                    <h5 class="primary-color fw-bold fs-18 mt-4 text-center">Zara Head Milan</h5>
                                    <span class="d-block fw-normal text-color para-text fs-13 mt-3">IIM L, NITIE, IIT KGP, IIT M, New IIMs and Baby IIMs
                                        Joined: IIM Lucknow</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center d-flex h-100 j align-items-center justify-content-start card-body py-5 px-4 border-0 rounded-4  card-color">
                                    <div class="img-circle rounded-circle mb-3">
                                        <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid w-100 h-100 rounded-circle" alt="">
                                    </div>
                                    <span class="read-more-text fs-15 text-color-1">I want to thank the Manoeuvre team a lot for all the help. FINALLY i got IHM PUSA in the 4th round and I am so glad that I got such a good Support from whole MANOEUVRE Education. Thank you for the Education and lectures you provided. I am so HAPPY right now!! Thank you MANOEUVRE SUPPO........
                                    </span>
                                    <a class="blue-color text-start d-block mt-1 fw-medium fs-14 read-more-button" id="Read-More-Btn">READ MORE</a>
                                    <h5 class="primary-color fw-bold fs-18 mt-4 text-center">Zara Head Milan</h5>
                                    <span class="d-block fw-normal text-color para-text fs-13 mt-3">IIM L, NITIE, IIT KGP, IIT M, New IIMs and Baby IIMs
                                        Joined: IIM Lucknow</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center d-flex h-100 j align-items-center justify-content-start card-body py-5 px-4 border-0 rounded-4  card-color">
                                    <div class="img-circle rounded-circle mb-3">
                                        <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid w-100 h-100 rounded-circle" alt="">
                                    </div>
                                    <span class="read-more-text fs-15 text-color-1">I want to thank the Manoeuvre team a lot for all the help. FINALLY i got IHM PUSA in the 4th round and I am so glad that I got such a good Support from whole MANOEUVRE Education. Thank you for the Education and lectures you provided. I am so HAPPY right now!! Thank you MANOEUVRE SUPPO........
                                    </span>
                                    <a class="blue-color text-start d-block mt-1 fw-medium fs-14 read-more-button" id="Read-More-Btn">READ MORE</a>
                                    <h5 class="primary-color fw-bold fs-18 mt-4 text-center">Zara Head Milan</h5>
                                    <span class="d-block fw-normal text-color para-text fs-13 mt-3">IIM L, NITIE, IIT KGP, IIT M, New IIMs and Baby IIMs
                                        Joined: IIM Lucknow</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center d-flex h-100 j align-items-center justify-content-start card-body py-5 px-4 border-0 rounded-4  card-color">
                                    <div class="img-circle rounded-circle mb-3">
                                        <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid w-100 h-100 rounded-circle" alt="">
                                    </div>
                                    <span class="read-more-text fs-15 text-color-1">I want to thank the Manoeuvre team a lot for all the help. FINALLY i got IHM PUSA in the 4th round and I am so glad that I got such a good Support from whole MANOEUVRE Education. Thank you for the Education and lectures you provided. I am so HAPPY right now!! Thank you MANOEUVRE SUPPO........
                                    </span>
                                    <a class="blue-color text-start d-block mt-1 fw-medium fs-14 read-more-button" id="Read-More-Btn">READ MORE</a>
                                    <!-- <p class="fs-15 text-color-1">“Quickly maximize visionary solutions after mission critical action items productivate premium mission critical action items productivate premium portals.</p> -->
                                    <h5 class="primary-color fw-bold fs-18 mt-4 text-center">Zara Head Milan</h5>
                                    <span class="d-block fw-normal text-color para-text fs-13 mt-3">IIM L, NITIE, IIT KGP, IIT M, New IIMs and Baby IIMs
                                        Joined: IIM Lucknow</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center d-flex h-100 j align-items-center justify-content-start card-body py-5 px-4 border-0 rounded-4  card-color">
                                    <div class="img-circle rounded-circle mb-3">
                                        <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid w-100 h-100 rounded-circle" alt="">
                                    </div>
                                    <span class="read-more-text fs-15 text-color-1">I want to thank the Manoeuvre team a lot for all the help. FINALLY i got IHM PUSA in the 4th round and I am so glad that I got such a good Support from whole MANOEUVRE Education. Thank you for the Education and lectures you provided. I am so HAPPY right now!! Thank you MANOEUVRE SUPPO........
                                    </span>
                                    <a class="blue-color text-start d-block mt-1 fw-medium fs-14 read-more-button" id="Read-More-Btn">READ MORE</a>
                                    <h5 class="primary-color fw-bold fs-18 mt-4 text-center">Zara Head Milan</h5>
                                    <span class="d-block fw-normal text-color para-text fs-13 mt-3">IIM L, NITIE, IIT KGP, IIT M, New IIMs and Baby IIMs
                                        Joined: IIM Lucknow</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonails -->

    <!-- Course Details -->
    <!-- <section class="section Course-Details pb-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <p class="section-sub-heading">Know More</p>
                    <h3 class="section-heading secondary-color ">Course Details</h3>
                </div>
                <div class="col-lg-11 mt-3">
                    <div class="card border-0 card-body cardshadow">
                        <div class="card rounded-0 card-body border-all position-relative cards-height">
                            <ul class="d-flex  py-2 my-2  bg-white z-3 align-items-center flex-wrap">
                                <li>
                                    <a href="#imp-date" class="px-3 border-light-all heading-text course-details-active courseDetails py-2  fw-medium fs-15">Important Dates</a>
                                </li>
                                <li>
                                    <a href="#MBA-2023-24" class="px-3 border-light-all heading-text courseDetails py-2  fw-medium fs-15">MBA 2023-24</a>
                                </li>
                                <li>
                                    <a class="px-3 border-light-all heading-text courseDetails py-2  fw-medium fs-15">Important Dates</a>
                                </li>
                                <li>
                                    <a href="#CET-2023-24" class="px-3 border-light-all heading-text courseDetails py-2  fw-medium fs-15">CET 2023-24</a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-12 mt-4" id="imp-date">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Common University Entrance Test – 2023-24</h5>
                                    <p class="para-text fs-16 fw-normal mt-2">The Common University Entrance Test (CUET (UG) - 2023) has been introduced for admission into all UG Programmes in all Central Universities for the academic session 2023-24 under, (MoE).</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>

                                </div>
                                <div class="col-12 mt-4" id="MBA-2023-24">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Common University Entrance Test MBA 2023-24</h5>
                                    <p class="para-text fs-16 fw-normal mt-2">The Common University Entrance Test (CUET (UG) - 2023) has been introduced for admission into all UG Programmes in all Central Universities for the academic session 2023-24 under, (MoE).</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>

                                </div>
                                <div class="col-12 mt-4" id="CET-2023-24">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Common University Entrance Test – 2023-24</h5>
                                    <p class="para-text fs-16 fw-normal mt-2">The Common University Entrance Test (CUET (UG) - 2023) has been introduced for admission into all UG Programmes in all Central Universities for the academic session 2023-24 under, (MoE).</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>

                                </div>
                                <div class="col-l2 mt-4" id="imp-date">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Important Dates – CUET 2023</h5>
                                    <div class="table-responsive mt-4">
                                        <table class="table">
                                            <tbody>
                                                <tr class="card-color">
                                                    <th class="heading-text fw-bold">Test</th>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th class="heading-text fw-bold">Test Pattern</th>
                                                    <td class="para-text fs-16 fw-normal">Objective type with Multiple Choice Questions</td>
                                                </tr>
                                                <tr class="card-color">
                                                    <th class="heading-text fw-bold">Medium</th>
                                                    <td class="para-text fs-16 fw-normal">13 languages ( Tamil, Telugu, Kannada, Malayalam, Marathi, Gujarati, Odiya, Bengali, Assamese, Punjabi, English, Hindi, and Urdu)</td>
                                                </tr>
                                                <tr>
                                                    <th rowspan="3" class="heading-text fw-bold">Syllabus</th>
                                                    <td class="para-text fs-16 fw-normal">Section IA & IB: Language to be tested through Reading Comprehension (based on different types of passages–Factual, Literary, and Narrative [Literary Aptitude & Vocabulary]</td>
                                                </tr>
                                                <tr>
                                                    <td class="para-text fs-16 fw-normal">Section II: As per the NCERT model syllabus as applicable to Class XII only</td>
                                                </tr>
                                                <tr>
                                                    <td class="para-text fs-16 fw-normal">Section III: General Knowledge, Current Affairs, General Mental Ability, Numerical Ability, Quantitative Reasoning (Simple application of basic mathematical concepts arithmetic/algebra
                                                        geometry/mensuration/stat taught till Grade 8), Logical and Analytical Reasoning</td>
                                                </tr>
                                                <tr class="card-color">
                                                    <th class="heading-text fw-bold">Registration</th>
                                                    <td class="para-text fs-16 fw-normal">Registration will be done online at <a href="#" class="text-danger">https://cuet.samarth.ac.in/</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Course Details -->
    <!-- Course Details -->
    <section class="section Course-Details pb-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <p class="section-sub-heading">Know More</p>
                    <h3 class="section-heading secondary-color ">Course Details</h3>
                </div>
                <div class="col-lg-11 mt-3">
                    <div class="row">
                        <div class="col-3">
                            <ul class="">
                                <li class="mb-2">
                                    <a class="px-3 border-light-all heading-text d-block w-100 text-center course-details-active courseDetails py-2  fw-medium fs-15 tab-link  active" data-tab="imp-date">Important Dates</a>
                                </li>
                                <li class="mb-2">
                                    <a class="px-3 border-light-all heading-text d-block w-100 text-center courseDetails py-2  fw-medium fs-15 tab-link" data-tab="MBA-2023-24">MBA 2023-24</a>
                                </li>
                                <li class="mb-2">
                                    <a class="px-3 border-light-all heading-text d-block w-100 text-center courseDetails py-2  fw-medium fs-15 tab-link" data-tab="CET-2023-24">Important Dates</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12 mb-3 tab-content active" id="imp-date">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Common University Entrance Test – 2023-24</h5>
                                    <p class="para-text fs-16 fw-normal mt-2">The Common University Entrance Test (CUET (UG) - 2023) has been introduced for admission into all UG Programmes in all Central Universities for the academic session 2023-24 under, (MoE).</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>

                                </div>
                                <div class="col-12 mb-3 tab-content" id="MBA-2023-24">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Common University Entrance Test MBA 2023-24</h5>
                                    <p class="para-text fs-16 fw-normal mt-2">The Common University Entrance Test (CUET (UG) - 2023) has been introduced for admission into all UG Programmes in all Central Universities for the academic session 2023-24 under, (MoE).</p>
                                    <p class="para-text fs-16 fw-normal mt-2">connect with the Universities. This single examination will enable the Candidates to cover a wide outreach and be part of the admissions process to various Central Universities.</p>

                                </div>
                                <div class="col-12 mb-3 tab-content" id="CET-2023-24">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Common University Entrance Test – 2023-24</h5>
                                    <p class="para-text fs-16 fw-normal mt-2">The Common University Entrance Test (CUET (UG) - 2023) has been introduced for admission into all UG Programmes in all Central Universities for the academic session 2023-24 under, (MoE).</p>
                                   

                                </div>
                                <div class="col-l2 mb-3 tab-content">
                                    <h5 class="fs-18 fw-medium heading-text mb-2">Important Dates – CUET 2023</h5>
                                    <div class="table-responsive mt-4">
                                        <table class="table">
                                            <tbody>
                                                <tr class="card-color">
                                                    <th class="heading-text fw-bold">Test</th>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th class="heading-text fw-bold">Test Pattern</th>
                                                    <td class="para-text fs-16 fw-normal">Objective type with Multiple Choice Questions</td>
                                                </tr>
                                                <tr class="card-color">
                                                    <th class="heading-text fw-bold">Medium</th>
                                                    <td class="para-text fs-16 fw-normal">13 languages ( Tamil, Telugu, Kannada, Malayalam, Marathi, Gujarati, Odiya, Bengali, Assamese, Punjabi, English, Hindi, and Urdu)</td>
                                                </tr>
                                                <tr>
                                                    <th rowspan="3" class="heading-text fw-bold">Syllabus</th>
                                                    <td class="para-text fs-16 fw-normal">Section IA & IB: Language to be tested through Reading Comprehension (based on different types of passages–Factual, Literary, and Narrative [Literary Aptitude & Vocabulary]</td>
                                                </tr>
                                                <tr>
                                                    <td class="para-text fs-16 fw-normal">Section II: As per the NCERT model syllabus as applicable to Class XII only</td>
                                                </tr>
                                                <tr>
                                                    <td class="para-text fs-16 fw-normal">Section III: General Knowledge, Current Affairs, General Mental Ability, Numerical Ability, Quantitative Reasoning (Simple application of basic mathematical concepts arithmetic/algebra
                                                        geometry/mensuration/stat taught till Grade 8), Logical and Analytical Reasoning</td>
                                                </tr>
                                                <tr class="card-color">
                                                    <th class="heading-text fw-bold">Registration</th>
                                                    <td class="para-text fs-16 fw-normal">Registration will be done online at <a href="#" class="text-danger">https://cuet.samarth.ac.in/</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Details -->

    <!-- FAQ -->
    <section class="section faq pb-0 ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <p class="section-sub-heading">FAQ</p>
                    <h3 class="section-heading secondary-color">Still having a doubt? Let’s be more clear</h3>
                </div>
                <div class="col-xl-6 col-lg-12 mt-4">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed border-bottom para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                    <span class="primary-color fw-bold fs-18">01</span>&nbsp;&nbsp; Are there payment plans available?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    <span class="primary-color fw-bold fs-18">02</span>&nbsp;&nbsp; What kind of job can I get after the program?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    <span class="primary-color fw-bold fs-18">03</span>&nbsp;&nbsp; What if I have a question that isn’t answered here?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    <span class="primary-color fw-bold fs-18">04</span>&nbsp;&nbsp; What’s the "catch" for the job guarantee?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    <span class="primary-color fw-bold fs-18">05</span>&nbsp;&nbsp; Are there payment plans available?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mt-4">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed border-bottom para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                    <span class="primary-color fw-bold fs-18">06</span>&nbsp;&nbsp; Are there payment plans available?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                    <span class="primary-color fw-bold fs-18">07</span>&nbsp;&nbsp; What kind of job can I get after the program?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                    <span class="primary-color fw-bold fs-18">08</span>&nbsp;&nbsp; What if I have a question that isn’t answered here?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                                    <span class="primary-color fw-bold fs-18">09</span>&nbsp;&nbsp; What’s the "catch" for the job guarantee?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button border-bottom collapsed para-text fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                                    <span class="primary-color fw-bold fs-18">10</span>&nbsp;&nbsp; Are there payment plans available?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body fs-16 para-text">
                                    Yes, you can select a monthly payment plan of $550.00 a month for 10 months and $1,400.00 upfront. Note: You will be required to pay the full duration of the payment plan even if you finish the program before the payment plan ends.
                                    Still doesn’t work for you? Book a call with a Career Advisor and see if you are eligible for a custom payment plan </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- FAQ -->
</section>

<?php include('./footer.php'); ?>
<script>
    $(document).ready(function() {
        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");

            $(".card").css("background-color", "");
            var bgColor = $(this).find(".card").css("border-color");
            $(this).find(".card").css("background-color", bgColor);
        });
    });
</script>

<script>
$(document).ready(function() {
    $(".tab-link").click(function() {
        var tab_id = $(this).attr('data-tab');

        $(".tab-link").removeClass('active');
        $(".tab-content").removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });
});
</script>