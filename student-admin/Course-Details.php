<?php include('header.php'); ?>

<div class="container-xxl flex-grow-1 container-p-y admin admin1">
    <div class="row flex-lg-row flex-column-reverse">
        <div class="col-lg-3 d-lg-block d-none mt-lg-0 mt-3 left">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
                    <ul>
                        <li class="d-flex ms-3 mb-2  gap-3 align-items-center flex-wrap">
                            <a href="./my-course.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                            <span class="fs-15 fw-medium text-color">Session</span>
                        </li>
                    </ul>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#videos" aria-expanded="false" aria-controls="videos">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-green"><iconify-icon icon="solar:video-library-bold" class="fs-25" style="color: #549c4d;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">Videos</b>
                                            <span class="fs-14 para-text  fw-normal">1/2 Lessons</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="videos" class="accordion-collapse show collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Video-Lecture.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">English</li>
                                        </a>
                                        <a href="./Video-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Quantitative Aptitude</li>
                                        </a>
                                        <a href="./Video-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Advance Maths</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Live-Lecture" aria-expanded="false" aria-controls="Live-Lecture">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-pink"><iconify-icon icon="mingcute:live-photo-fill" class="fs-25" style="color: #e4004a;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">Live Lecture</b>
                                            <span class="fs-14 para-text  fw-normal">1/2 Lessons</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="Live-Lecture" class="accordion-collapse  collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Live-Lecture.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">English</li>
                                        </a>
                                        <a href="./Live-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Quantitative Aptitude</li>
                                        </a>
                                        <a href="./Live-Lecture.php">
                                            <li class="list-group-item admin1active fs-15">Advance Maths</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#E-Books" aria-expanded="false" aria-controls="E-Books">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-purple"><iconify-icon icon="ion:book" class="fs-24" style="color: #8e00fe;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">E-Books</b>
                                            <span class="fs-14 para-text  fw-normal">1/2 Lessons</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="E-Books" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Ebooks.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">English</li>
                                        </a>
                                        <a href="./Ebooks.php">
                                            <li class="list-group-item admin1active fs-15">Quantitative Aptitude</li>
                                        </a>
                                        <a href="./Ebooks.php">
                                            <li class="list-group-item admin1active fs-15">Advance Maths</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Mock-Test" aria-expanded="false" aria-controls="Mock-Test">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-orange"><iconify-icon icon="solar:bill-list-bold" class="fs-24" style="color: #ff9f1c;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">Mock Test</b>
                                            <span class="fs-14 para-text  fw-normal">1/2 Lessons</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="Mock-Test" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body px-0">
                                    <ul class="list-group border-0 rounded-0">
                                        <a href="./Full-mock-test.php">
                                            <li class="list-group-item admin1active fs-15 sessionsactive">Full Mock Test</li>
                                        </a>
                                        <a href="./sectional-mock-test.php">
                                            <li class="list-group-item admin1active fs-15">Sectional Mock Test</li>
                                        </a>
                                        <a href="./Topic-mock-test.php">
                                            <li class="list-group-item admin1active fs-15">Topic Mock Test</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-3 right">
            <div class="row">
                <div class="col-12">
                    <div class="card card-body" style="background-color:rgba(140, 181, 63, 0.1);border:2px solid #8CB53F;">
                        <div class="row justify-content-center flex-sm-row flex-column-reverse align-items-center">
                            <div class="col-sm-8 col-12 mt-sm-0 mt-3 p-sm-2 p-0">
                                <span class="badge bg-blue-1 fs-12 py-2">Top Seller</span>
                                <h5 class="mt-2 fw-bold tertiary-font text-ellipsis"><b class="fs-20 fw-bolder  text-color">Web Development</b> - <span style="color:rgba(51,51,51,60%)" class="fw-bolder fs-20">The Complete 2023 Bootcamp </span></h5>
                                <p class="text-color tertiary-font fw-semibold fs-16 text-ellipsis mt-3">Become a Full-Stack Web Developer with just ONE course. <br> HTML, CSS, Javascript, Node, React, MongoDB, Web3 and DApps.</p>
                                <ul class="mt-2 d-flex gap-3 align-items-center flex-wrap">
                                    <li class="d-flex  gap-1 align-items-center">
                                        <p style="color: #F99D07;" class="fw-semibold fs-16">5.0</p>
                                        <iconify-icon icon="iconamoon:star-fill" class="fs-16" style="color: #ff9f1c;"></iconify-icon>
                                        <iconify-icon icon="iconamoon:star-fill" class="fs-16" style="color: #ff9f1c;"></iconify-icon>
                                        <iconify-icon icon="iconamoon:star-fill" class="fs-16" style="color: #ff9f1c;"></iconify-icon>
                                        <iconify-icon icon="iconamoon:star-fill" class="fs-16" style="color: #ff9f1c;"></iconify-icon>
                                    </li>
                                    <li>
                                        <p class="fw-semibold para-text text-capitalize">(358 ratings)</p>
                                    </li>
                                    <!-- <li class="d-flex gap-2 align-items-center">
                                        <ol class="d-flex align-items-center">
                                            <li class=""><a href="#" class="rounded-circle"><img src="assets/img/avatars/1.png" class="img-fluid rounded-circle w-25a object-fit-contain" alt=""></a></li>
                                            <li class=""><a href="#" class="rounded-circle"><img src="assets/img/avatars/1.png" class="img-fluid rounded-circle w-25a object-fit-contain" alt=""></a></li>
                                            <li class=""><a href="#" class="rounded-circle"><img src="assets/img/avatars/1.png" class="img-fluid rounded-circle w-25a object-fit-contain" alt=""></a></li>
                                        </ol>
                                        <p class="fw-medium para-text">55 students</p>
                                    </li> -->
                                </ul>
                                <div class="row mt-2">
                                    <!-- <div class="col-6">
                                        <a href="./Video-Lecture.php" class="bg-dark-btn justify-content-center text-white d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                            <span class="fs-14 text-white">Continue</span>
                                            <iconify-icon icon="basil:caret-right-outline" class="fs-18" style="color: white;"></iconify-icon>
                                        </a>
                                    </div> -->
                                    <div class="col-5">
                                        <a href="#addreviewmodal" data-bs-toggle="modal" class="border-all-1 fw-semibold text-dark justify-content-center  d-flex gap-2 align-items-center px-2 py-2 text-center d-block w-100 mt-2 fs-14 rounded-3">
                                            <span class="fs-14 text-dark">Add Review</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 p-sm-2 p-0 rounded-2 course-details-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBWwO60ClQuupAoMTZ8C69PjXRwGdHcGOtkQ&usqp=CAU" class="img-fluid  rounded-3" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <div class="row">
                        <div class="col-sm-9 p-0" style="background-color:#FAFAFA;">
                            <ul class="nav border-0 green-tabs nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-16 fw-normal active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Overview" type="button" role="tab" aria-controls="Overview" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-16 fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#PapperPattern" type="button" role="tab" aria-controls="PapperPattern" aria-selected="false">PapperPattern</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-16 fw-normal" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Cut-Off" type="button" role="tab" aria-controls="Cut-Off" aria-selected="false">Cut Off</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-16 fw-normal" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Result" type="button" role="tab" aria-controls="Result" aria-selected="false">Result</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                                    <div class="row">
                                        <div class="col-12 border-bottom pb-3  p-sm-2 p-0">
                                            <b class="fs-18 text-color fw-semibold d-block mb-2">About Course</b>
                                            <p class="fs-15 para-text secondary-font mt-3">This course will teach you everything you need to know about UX, including design, content, and coding. And you'll learn from the ground up, so it doesn't matter how much experience you have when you start.</p>
                                            <p class="fs-15 para-text secondary-font mt-3">This course will teach you everything you need to know about UX, including design, content, and coding. And you'll learn from the ground up, so it doesn't matter how much experience you have when you start.</p>
                                        </div>
                                        <div class="col-12 border-bottom mt-3 pb-3  p-sm-2 p-0">
                                            <ul class="d-flex gap-4 align-items-center flex-wrap">
                                                <li>
                                                    <ol>
                                                        <li>
                                                            <span class="fw-medium fs-14 tertiary-font text-color">Skill Level</span>
                                                        </li>
                                                        <li class="d-flex gap-3 align-items-center mt-2">
                                                            <div class="card border border-blue p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                                <iconify-icon icon="vaadin:bar-chart" class="fs-16" style="color: #4983ce;"></iconify-icon>
                                                            </div>
                                                            <b class="text-color fw-medium fs-15">Beginner Level</b>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <ol>
                                                        <li>
                                                            <span class="fw-medium fs-14 tertiary-font text-color">Lecture</span>
                                                        </li>
                                                        <li class="d-flex gap-3 align-items-center mt-2">
                                                            <div class="card border border-blue p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                                <iconify-icon icon="bxs:video" class="fs-16" style="color: #4983ce;"></iconify-icon>
                                                            </div>
                                                            <b class="text-color fw-medium fs-15">8 Lessons</b>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <ol>
                                                        <li>
                                                            <span class="fw-medium fs-14 tertiary-font text-color">Video</span>
                                                        </li>
                                                        <li class="d-flex gap-3 align-items-center mt-2">
                                                            <div class="card border border-blue p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                                <iconify-icon icon="teenyicons:clock-solid" class="fs-16" style="color: #4983ce;"></iconify-icon>
                                                            </div>
                                                            <b class="text-color fw-medium fs-15">11 hour </b>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <ol>
                                                        <li>
                                                            <span class="fw-medium fs-14 tertiary-font text-color">Language & Subtitle</span>
                                                        </li>
                                                        <li class="d-flex gap-3 align-items-center mt-2">
                                                            <div class="card border border-blue p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                                <iconify-icon icon="grommet-icons:language" class="fs-16" style="color: #4983ce;"></iconify-icon>
                                                            </div>
                                                            <b class="text-color fw-medium fs-15">English Language</b>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <ol>
                                                        <li>
                                                            <span class="fw-medium fs-14 tertiary-font text-color">Certificate</span>
                                                        </li>
                                                        <li class="d-flex gap-3 align-items-center mt-2">
                                                            <div class="card border border-blue p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                                <iconify-icon icon="clarity:certificate-solid" class="fs-18" style="color: #4983ce;"></iconify-icon>
                                                            </div>
                                                            <b class="text-color fw-medium fs-15">Certificate Completion</b>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 mt-3 p-sm-2 p-0">
                                            <ul>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <ol class="d-flex gap-3 align-items-center">
                                                        <li>
                                                            <img src="assets/img/avatars/1.png" class="w-30 img-fluid rounded-circle" alt="">
                                                        </li>
                                                        <li class="d-flex flex-column align-items-start">
                                                            <b class="fs-15 fw-semibold text-color secondary-font">Jose Portila</b>
                                                            <span class="para-text fs-14 fw-normal secondary-font">Head of Data Science </span>
                                                        </li>
                                                    </ol>
                                                    <ol>
                                                        <li class="d-flex gap-1 align-items-center">
                                                            <iconify-icon icon="iconamoon:star-fill" style="color: #f99d07;"></iconify-icon>
                                                            <iconify-icon icon="iconamoon:star-fill" style="color: #f99d07;"></iconify-icon>
                                                            <iconify-icon icon="iconamoon:star-fill" style="color: #f99d07;"></iconify-icon>
                                                            <iconify-icon icon="iconamoon:star-fill" style="color: #f99d07;"></iconify-icon>
                                                            <span class="fw-medium fs-16">4.7</span>
                                                        </li>
                                                        <li>
                                                            <span class="para-text fs-15 fw-normal secondary-font">Top Instructor's</span>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                            <ul class="course-details-content">
                                                <li class="d-flex gap-3 mt-3">
                                                    <iconify-icon icon="mdi:camera" class="fs-20" style="color: gray;"></iconify-icon>
                                                    <span class="fs-15 para-text secondary-font">Understand Information Architecture to enhance the </span>
                                                </li>
                                                <li class="d-flex gap-3 mt-2">
                                                    <iconify-icon icon="ant-design:linkedin-filled" class="fs-20" style="color: gray;"></iconify-icon>
                                                    <span class="fs-15 para-text secondary-font">Understand Information Architecture to enhance the content </span>
                                                </li>
                                                <li class="d-flex gap-3 mt-2">
                                                    <iconify-icon icon="streamline:programming-web-server-world-internet-earth-www-globe-worldwide-web-network" class="fs-20" style="color: gray;"></iconify-icon>
                                                    <span class="fs-15 para-text secondary-font">Understand Information Architecture to enhance the content </span>
                                                </li>
                                                <li class="d-flex gap-3 mt-2">
                                                    <iconify-icon icon="streamline:programming-web-server-world-internet-earth-www-globe-worldwide-web-network" class="fs-20" style="color: gray;"></iconify-icon>
                                                    <span class="fs-15 para-text secondary-font">Understand Information Architecture to enhance the content </span>
                                                </li>
                                                <li class="d-flex gap-3 mt-2">
                                                    <iconify-icon icon="streamline:programming-web-server-world-internet-earth-www-globe-worldwide-web-network" class="fs-20" style="color: gray;"></iconify-icon>
                                                    <span class="fs-15 para-text secondary-font">Understand Information Architecture to enhance the content </span>
                                                </li>

                                            </ul>
                                            <a id="show-more" class="blue-color fw-medium mt-3 d-block show-more">Show More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="PapperPattern" role="tabpanel" aria-labelledby="PapperPattern-tab">PapperPattern</div>
                                <div class="tab-pane fade" id="Cut-Off" role="tabpanel" aria-labelledby="Cut-Off-tab">Cut Off</div>
                                <div class="tab-pane fade" id="Result" role="tabpanel" aria-labelledby="Result-tab">Result</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-12 ">
                                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt=""></a>
                                </div>
                                <div class="col-12 mt-2">
                                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt=""></a>
                                </div>
                                <div class="col-12 mt-2">
                                    <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt=""></a>
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

<!-- add review modal  -->
<div class="modal fade" id="addreviewmodal" tabindex="-1" aria-labelledby="addreviewmodal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-body py-sm-4 py-3">
                <div class="container p-0">
                    <div class="row justify-content-center ">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-end "><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <h3 class="section-heading fs-4 text-start">Rate this <span class="primary-color section-heading fs-4 text-start">Course</span></h3>
                                <form action="#" autocomplete="off">
                                    <div class="row p-0">
                                        <div class="col-12 mb-4">
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
                                        <div class="col-12 mb-4">
                                            <textarea name="" id="" cols="30" placeholder="Review Message" class="form-control" rows="3"></textarea>
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
<!-- add review modal -->

<?php include('footer.php'); ?>

<script>
    const button = document.getElementById("show-more");
    const courseDetailsContent = document.querySelector('.course-details-content');

    button.addEventListener('click', () => {
        if (courseDetailsContent.style.maxHeight === "100px") {
            courseDetailsContent.style.maxHeight = "100%";
            button.textContent = "Show Less";
        } else {
            courseDetailsContent.style.maxHeight = "100px";
            button.textContent = "Show More";
        }
    });
</script>