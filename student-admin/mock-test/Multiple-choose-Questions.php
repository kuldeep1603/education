<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multiple Choose Questions</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="./assets/css/fontawesome-free-6.4.0-web/css/all.css" />
    <!-- bootstrap5 cdn link  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- custom css link  -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- responsive css link  -->
    <link rel="stylesheet" href="./assets/css/responsive.css" />
</head>

<body>
    <section class="exam">
        <div class="container-fluid">
            <div class="row row-1">
                <div class="col-12 p-0 ">
                    <div class="card rounded-0 border-0 py-1 bg-dark card-body">
                        <div class="row">
                            <div class="col-12">
                                <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                    <li>
                                        <span class="yellow-color fs-14">New IBPS Test</span>
                                    </li>
                                    <li class="d-flex flex-wrap gap-sm-4 gap-2 align-items-center">
                                        <p class="fw-medium fs-15 text-white">Time Left : <span class="text-white">25:20 </span></p>
                                        <a href="#Questions" data-bs-toggle="modal" class="text-white fs-15">Questions</a>
                                        <a href="#View-Instruction" data-bs-toggle="modal" class="text-white fs-15">View Instruction</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-2">
                <div class="col-md-9 left">
                    <div class="row row-1">
                        <div class="col-12 p-0">
                            <div class="card border-0 bg-card rounded-0 py-2  card-body">
                                <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                    <li class="d-flex gap-3 align-items-center">
                                        <a href="#"> <i class="fa-solid fs-18  fa-caret-left" style="color:#bac4cd"></i></a>
                                        <a href="#" class="bg-primary text-white px-4 py-2 fs-12 rounded-1">General Awarness</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa-solid fs-18  fa-caret-right" style="color:#bac4cd"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 text-end d-lg-none d-block">
                            <a class="s" data-bs-toggle="offcanvas" href="#questions-offcanvas" role="button" aria-controls="offcanvasExample">
                                <i class="fa-solid fa-bars"></i>
                            </a>
                        </div>
                        <div class="col-12 px-2 py-2">
                            <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                <li>
                                    <span class="fw-normal text-color fs-16">Sections</span>
                                </li>
                                <li>
                                    <p class="fw-medium fs-16 text-color">Sectional Time : <span>30:00 </span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 p-0">
                            <div class="card   rounded-0 py-0 card-body">
                                <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                    <li class="d-flex flex-wrap gap-sm-3 gap-1 align-items-center">
                                        <a href="#"> <i class="fa-solid fs-18 fa-caret-left" style="color:#bac4cd"></i></a>
                                        <a href="#" class="bg-secondary text-white px-3 py-2 fs-14 rounded-0">General Awarness</a>
                                        <a href="#" class="bg-secondary text-white px-3 py-2 fs-14 rounded-0">Logical Reasoning</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa-solid fs-18 fa-caret-right" style="color:#bac4cd"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="card rounded-0 card-body py-2">
                                <b class="fs-14 text-color fw-medium">Question Type : Multiple Choose Question</b>
                            </div>
                        </div>
                    </div>
                    <div class="row row-2">
                        <div class="col-12 p-0">
                            <div class="card rounded-0 card-body py-2">
                                <h5 class="fs-17 text-color fw-medium">Question No . <span>1</span></h5>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="card rounded-0 border-0 card-body py-2">
                                <h6 class="fw-normal fs-17 mt-2"> Two small drops of mercury each of radius 'R' coalesce to form a large single drop. The ratio of the total surface energies before and after the change is  </h6>
                                <ul class="mt-2">
                                    <li class="mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input answerselect" type="checkbox" name="flexRadioDefault" id="answer-1">
                                            <label class="form-check-label" for="answer-1">
                                                <span class="fs-16">Foreign Minister of Britain</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="form-check ">
                                            <input class="form-check-input answerselect" type="checkbox" name="flexRadioDefault" id="answer-2">
                                            <label class="form-check-label" for="answer-2">
                                                <span class="fs-16">Foreign Minister of France</span>
                                            </label>
                                        </div>

                                    </li>
                                    <li class="mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input answerselect" type="checkbox" name="flexRadioDefault" id="answer-3">
                                            <label class="form-check-label" for="answer-3">
                                                <span class="fs-16">Deputy Prime Minister of France</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input answerselect" type="checkbox" name="flexRadioDefault" id="answer-4">
                                            <label class="form-check-label" for="answer-4">
                                                <span class="fs-16"> None of these</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input answerselect" type="checkbox" name="flexRadioDefault" id="answer-5">
                                            <label class="form-check-label" for="answer-5">
                                                <span class="fs-16">Foreign Minister of France</span>
                                            </label>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 d-lg-block d-none right" style="background-color:#f8fbff;">
                    <div class="row">
                        <div class="col-12">
                            <ul class="d-flex gap-4 align-items-start">
                                <li>
                                    <img src="./assets/img/NewCandidateImage.jpg" class="img-fluid" style="width:80px" alt="">
                                </li>
                                <li>
                                    <b class="fw-medium fs-18 mt-2 d-block">John Smith</b>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 p-0 mt-2">
                            <div class="card rounded-0 border-all card-body px-1">
                                <ul class="d-flex gap-2 align-items-center flex-wrap">
                                    <li class=" d-flex gap-1 align-items-center">
                                        <span class="answered text-center float-start bg-1 fw-bold text-white">3</span>
                                        <span class="fs-13 fw-normal">Answered</span>
                                    </li>
                                    <li class=" d-flex gap-1 align-items-center">
                                        <span class="not_answered text-center float-start bg-1 fw-bold text-white">2</span>
                                        <span class="fs-13 fw-normal">Not Answered </span>
                                    </li>
                                    <li class=" d-flex gap-1 align-items-center">
                                        <span class="not_visited bg-1 text-center float-start fw-bold">1</span>
                                        <span class="fs-13 fw-normal">Not Visited</span>
                                    </li>
                                    <li class=" d-flex gap-1 align-items-center">
                                        <span class="review text-center float-start bg-1 fw-bold text-white">4</span>
                                        <span class="fs-13 fw-normal">Marked for Review.</span>
                                    </li>
                                    <li class=" d-flex gap-1 align-items-center">
                                        <span class="review_marked_considered text-center float-start bg-1 fw-bold text-white">5</span>
                                        <span class="fs-13 fw-normal"> Answered and Marked for Review</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 py-2 bg-secondary text-white">
                            <h6 class="fs-16 text-white fw-medium">General Awarness</h6>
                        </div>
                        <div class="all-questions col-12 mt-2">
                            <ul class="d-flex flex-wrap gap-2 align-items-center">
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                                <li class="">
                                    <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row row-3  mt-1">
                <div class="col-10 left py-2 ">
                    <ul class="d-flex gap-sm-0 gap-1 flex-wrap justify-content-between align-items-center">
                        <li class="d-flex flex-wrap gap-sm-4 gap-1 align-items-center">
                            <button href="" class="py-2 px-sm-3 px-2  border-all" id="mark-review"> Mark for Review & Next</button>
                            <button href="" class="py-2 px-sm-3 px-2  border-all" id="clear-response">Clear Response</button>
                        </li>
                        <li class="">
                            <button class="py-2 px-3 d-block bg-secondary text-white border-0" id="save-next">Save & Next</button>
                        </li>
                    </ul>
                </div>
                <div class="col-2 py-2 text-center right">
                    <button class="py-2 px-4 bg-primary text-white border-0">Submit</button>
                </div>
            </div>
        </div>
    </section>



    <!-- jquery cdn link  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- bootstrap5 cdn link  -->
    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="./assets/js/app.js"></script>


    <!--View-Instruction -->
    <div class="modal fade" id="View-Instruction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0 bg-primary py-2 text-white">
                    <h5 class="modal-title text-white fs-20" id="exampleModalLabel">Instruction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 instructions-modal">
                    <div class="container">
                        <div class="row row-1">
                            <div class="col-12 p-0 text-sm-center text-start">
                                <h4 class="section-heading fs-24 text-sm-center text-start primary-color ">Instructions</h4>
                            </div>
                        </div>
                        <div class="row ms-3 row-2">
                            <div class="col-12 p-sm-2 p-0 mt-2">
                                <b class="border-dark-bottom fw-medium fs-18 text-color ">General Instructions:</b>
                            </div>
                            <div class="col-12 p-sm-2 p-0 mt-lg-4 mt-2">
                                <ul>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Total duration of examination is 60 minutes. (20 minutes extra for every 60 minutes (1 hour) of the examination time for candidates with disability eligible for compensatory time).</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">The Question Palette displayed on the right side of screen will show the status of each question using one of the following symbols:</span>
                                        <ul class="ms-md-3 ms-1">
                                            <li class="mt-3 d-flex gap-2 align-items-center">
                                                <span class="not_visited bg-1 text-center float-start fw-bold">1</span>
                                                <span class="fs-17">You have not visited the question yet.</span>
                                            </li>
                                            <li class="mt-3 d-flex gap-2 align-items-center">
                                                <span class="not_answered text-center float-start bg-1 fw-bold text-white">2</span>
                                                <span class="fs-17"> You have not answered the question.</span>
                                            </li>
                                            <li class="mt-3 d-flex gap-2 align-items-center">
                                                <span class="answered text-center float-start bg-1 fw-bold text-white">3</span>
                                                <span class="fs-17">You have answered the question.</span>
                                            </li>
                                            <li class="mt-3 d-flex gap-2 align-items-center">
                                                <span class="review text-center float-start bg-1 fw-bold text-white">4</span>
                                                <span class="fs-17">You have NOT answered the question, but have marked the question for review.</span>
                                            </li>
                                        </ul>
                                        <span class="fs-17 mt-3 text-color fw-normal d-block">The Marked for Review status for a question simply indicates that you would like to look at that question again. <span class="text-italic red-color"> If a question is answered and Marked for Review, your answer for that question will be considered in the evaluation.</span> </span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">You can click on the ">" arrow which appears to the left of question palette to collapse the question palette thereby maximizing the question window. To view the question palette again, you can click on "<" which appears on the right side of question window.</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">You can click on your "Profile" image on top right corner of your screen to change the language during the exam for entire question paper. On clicking of Profile image you will get a drop-down to change the question content to the desired language.</span>
                                    </li>
                                    <li class="list-style-type-number mt-3 mb-5">
                                        <span class="fs-17 text-color fw-normal d-block">You can click on Scroll Down to navigate to the bottom and Scroll Upto navigate to the top of the question area, without scrolling.</span>
                                    </li>
                                    <b class="border-dark-bottom fw-medium fs-18 text-color "> Navigating to a Question:</b>
                                    <li class="list-style-type-number mt-5 mb-5">
                                        <span class="fs-17 text-color fw-normal d-block">To answer a question, do the following:</span>
                                        <ul class="ms-3">
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal d-block">Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question.</span>
                                            </li>
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal d-block">Click on <span class="fw-bold fs-17">Save &Next</span> to save your answer for the current question and then go to the next question.</span>
                                            </li>
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal d-block">Click on Mark for <span class="fw-bold fs-17">Review & Next</span> to save your answer for the current question, mark it for review, and then go to the next question.</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <b class="border-dark-bottom fw-medium fs-18 text-color">Answering a Question :</b>
                                    <li class="list-style-type-number mt-5">
                                        <span class="fs-17 text-color fw-normal d-block">Procedure for answering a multiple choice type question:</span>
                                        <ul class="ms-4 mt-4">
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal ">To select your answer, click on the button of one of the options</span>
                                            </li>
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal ">To deselect your chosen answer, click on the button of the chosen option again or click on the <span class="fw-bold fs-17">Clear Response </span> button</span>
                                            </li>
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal ">To change your chosen answer, click on the button of another option</span>
                                            </li>
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal ">To save your answer, you MUST click on the <span class="fw-bold fs-17"> Save & Next</span> button</span>
                                            </li>
                                            <li class="mt-3  list-style-type-number">
                                                <span class="fs-17 text-color fw-normal ">To mark the question for review, click on the <span class="fw-bold fs-17"> Mark for Review & Next</span> button</span> button. If an answer is selected for a question that is Marked for Review, that answer will be considered in the evaluation.</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-style-type-number mt-4 ">
                                        <span class="fs-17 text-color fw-normal d-block"> To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.</span>
                                    </li>
                                    <li class="list-style-type-number mt-3 mb-5">
                                        <span class="fs-17 text-color fw-normal d-block"> Note that ONLY Questions for which answers are saved or marked for review after answering will be considered for evaluation.</span>
                                    </li>
                                    <b class="border-dark-bottom fw-medium fs-18 text-color"> Navigating through sections:</b>
                                    <li class="list-style-type-number mt-5">
                                        <span class="fs-17 text-color fw-normal d-block">Sections in this question paper are displayed on the top bar of the screen. Questions in a section can be viewed by clicking on the section name. The section you are currently viewing is highlighted.</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">After clicking the Save & Next button on the last question for a section, you will automatically be taken to the first question of the next section.</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">You can shuffle between tests and questions anytime during the examination as per your convenience only during the time stipulated</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Candidate can view the corresponding section summary as part of the legend that appears in every section above the question palette.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row row-1 mt-3">
                            <div class="col-12 text-center">
                                <h4 class="section-heading fs-20 text-center primary-color text-start">Other Important Instructions</h4>
                            </div>
                            <div class="col-12 mt-4">
                                <span class="fs-16 text-color fw-normal d-block">This is a Mock test. Question Paper displayed is for practice purpose only. Under no circumstances should this be presumed as a sample paper.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--View-Instruction -->
    <!--Questions -->
    <div class="modal fade" id="Questions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0 bg-primary py-2 text-white">
                    <h5 class="modal-title text-white fs-20" id="exampleModalLabel">Questions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 instructions-modal">
                    <div class="container">
                        <div class="row row-1">
                            <div class="col-12 p-0 text-sm-center text-start">
                                <h4 class="section-heading fs-24 text-sm-center text-start primary-color ">Questions</h4>
                            </div>
                        </div>
                        <div class="row ms-3 row-2">
                            <div class="col-12 p-sm-2 p-0 mt-lg-4 mt-2">
                                <ul>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, ducimus quisquam! Obcaecati, odio repudiandae soluta debitis necessitatibus ipsam?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, ducimus quisquam! Obcaecati, odio repudiandae soluta debitis necessitatibus ipsam?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                    <li class="list-style-type-number mt-3">
                                        <span class="fs-17 text-color fw-normal d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur! ?</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Questions -->


    <div class="offcanvas offcanvas-start" tabindex="-1" id="questions-offcanvas" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="d-flex gap-4 align-items-start">
                            <li>
                                <img src="./assets/img/NewCandidateImage.jpg" class="img-fluid" style="width:80px" alt="">
                            </li>
                            <li>
                                <b class="fw-medium fs-18 mt-2 d-block">John Smith</b>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 p-0 mt-2">
                        <div class="card rounded-0 border-all card-body px-1">
                            <ul class="d-flex gap-2 align-items-center flex-wrap">
                                <li class=" d-flex gap-1 align-items-center">
                                    <span class="answered text-center float-start bg-1 fw-bold text-white">3</span>
                                    <span class="fs-13 fw-normal">Answered</span>
                                </li>
                                <li class=" d-flex gap-1 align-items-center">
                                    <span class="not_answered text-center float-start bg-1 fw-bold text-white">2</span>
                                    <span class="fs-13 fw-normal">Not Answered </span>
                                </li>
                                <li class=" d-flex gap-1 align-items-center">
                                    <span class="not_visited bg-1 text-center float-start fw-bold">1</span>
                                    <span class="fs-13 fw-normal">Not Visited</span>
                                </li>
                                <li class=" d-flex gap-1 align-items-center">
                                    <span class="review text-center float-start bg-1 fw-bold text-white">4</span>
                                    <span class="fs-13 fw-normal">Marked for Review.</span>
                                </li>
                                <li class=" d-flex gap-1 align-items-center">
                                    <span class="review_marked_considered text-center float-start bg-1 fw-bold text-white">5</span>
                                    <span class="fs-13 fw-normal"> Answered and Marked for Review</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 py-2 bg-secondary text-white">
                        <h6 class="fs-16 text-white fw-medium">General Awarness</h6>
                    </div>
                    <div class="all-questions col-12 mt-2">
                        <ul class="d-flex flex-wrap gap-2 align-items-center">
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                            <li class="">
                                <span class="not-visited-1 questions bg-2 text-center float-start fw-bold">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>