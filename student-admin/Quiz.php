<?php include('header.php'); ?>


<div class="container-xxl flex-grow-1 container-p-y admin admin1 quiz">
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none left">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
                    <ul>
                        <li class="d-flex ms-3 mb-2  gap-3 align-items-center flex-wrap">
                            <a href="./Course-Details.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                            <span class="fs-15 fw-medium text-color">Assignment Quiz</span>
                        </li>
                    </ul>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#videos" aria-expanded="false" aria-controls="videos">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-green"><iconify-icon icon="solar:bill-list-bold" class="fs-28" style="color: #549c4d;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">Quiz</b>
                                            <span class="fs-14 para-text  fw-normal">1 Quiz</span>
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
        <div class="col-lg-5 mt-lg-0 mt-3">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="item question">
                        <div class="card border-0">
                            <div class="card-body border-0  rounded-3  px-0 py-2">
                                <span class="fs-16 fw-medium text-color ms-3 mb-2 d-block">Question : 01</span>
                                <div class="quiz-question py-2 px-3" style="background-color:#F4F4F4;">
                                    <p class="fs-16 text-color">How do you craft descriptions that work?</p>
                                </div>
                                <div class="py-4 px-4">
                                    <ul class="greenradio ">
                                        <li class="mt-3">
                                            <div class="card  rounded-2 px-2 py-2 quizcard border border-1  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer1">
                                                    <label class="form-check-label" for="answer1">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="card rounded-2 border border-1 quizcard px-2 py-2  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer2">
                                                    <label class="form-check-label" for="answer2">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="card border border-1 quizcard rounded-2 px-2 py-2  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer3">
                                                    <label class="form-check-label" for="answer3">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="card border border-1 quizcard rounded-2 px-2 py-2  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer4">
                                                    <label class="form-check-label" for="answer4">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer py-4 border-top border-0   ">
                                <ul class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <li>
                                        <a class="py-2 px-3 rounded-2 fs-14 fw-medium text-color border-all">Skip Question</a>
                                    </li>
                                    <li>
                                        <a id="next-btn" class="py-2 bg-primary text-white px-3 rounded-2 fs-14 fw-medium text-color">Next Question</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item question">
                        <div class="card border-0">
                            <div class="card-body border-0  rounded-3  px-0 py-2">
                                <span class="fs-16 fw-medium text-color ms-3 mb-2 d-block">Question : 01</span>
                                <div class="quiz-question py-2 px-3" style="background-color:#F4F4F4;">
                                    <p class="fs-16 text-color">How do you craft descriptions that work?</p>
                                </div>
                                <div class="py-4 px-4">
                                    <ul class="greenradio ">
                                        <li class="mt-3">
                                            <div class="card  rounded-2 px-2 py-2 quizcard border border-1  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer1">
                                                    <label class="form-check-label" for="answer1">
                                                        Lorem ipsum dolor sit amet.
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="card rounded-2 border border-1 quizcard px-2 py-2  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer2">
                                                    <label class="form-check-label" for="answer2">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="card border border-1 quizcard rounded-2 px-2 py-2  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer3">
                                                    <label class="form-check-label" for="answer3">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="card border border-1 quizcard rounded-2 px-2 py-2  card-body">
                                                <div class="form-check d-flex gap-3 align-items-center">
                                                    <input class="form-check-input quizoption" type="radio" name="answer" id="answer4">
                                                    <label class="form-check-label" for="answer4">
                                                        Here are some of our favorite tips
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer py-4 border-top border-0   ">
                                <ul class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <li>
                                        <a class="py-2 px-3 rounded-2 fs-14 fw-medium text-color border-all">Skip Question</a>
                                    </li>
                                    <li>
                                        <a id="next-btn" class="py-2 bg-primary text-white px-3 rounded-2 fs-14 fw-medium text-color">Next Question</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 mt-3">
                    <ul class="nav border-bottom purple-tabs nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-2 py-2 fs-16 fw-semibold active" id="home-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                        </li>
                    </ul>
                    <div class="tab-content px-2 py-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <p class="para-text text-justify fs-16">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur ab? Adipisci enim hic tempora magnam possimus omnis nesciunt accusamus itaque ipsa optio, beatae minus ullam repudiandae nostrum cupiditate iste fuga, quis quo dolores est nulla corrupti ab ad. Rerum, recusandae. Veniam iusto non autem repellendus nihil modi, earum unde.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4" id="course-Content">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
                    <p class="fs-16 fw-medium text-color ms-3 mb-2 d-block">Lessons <span class="fw-normal fs-12 para-text">(4/15)</span></p>
                    <div class="accordion verbal green" id="accordionExample">
                        <div class="accordion-item rounded-0 ">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#topic-1" aria-expanded="true" aria-controls="topic-1">
                                    <ul class="d-flex flex-wrap flex-column gap-1 ">
                                        <li class="d-flex gap-3 align-items-center">
                                            <b class="fs-16 fw-bold">Speed Maths</b>
                                            <span class="badge rounded-2 bg-danger">High</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="topic-1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body py-3">
                                    <ul class="mb-3">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" checked id="speed">
                                                <label class="form-check-label fw-medium secondary-font fs-15" for="speed">
                                                    1. Speed Learning Objectives
                                                </label>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <ol class="">
                                                <li class="d-flex gap-2 mb-3 align-items-center">
                                                    <iconify-icon icon="healthicons:i-exam-multiple-choice" class="me-2 fs-24 primary-color"></iconify-icon>
                                                    <a href="./Quiz.php" class=" text-ellipsis">Speed Math Assignment Quiz </a>
                                                </li>
                                                <li class="d-flex gap-2 mb-3  align-items-center">
                                                    <i class="fa-solid primary-color fs-18 fa-file-circle-plus me-2"></i>
                                                    <a href="./pdf.php" class=" text-ellipsis">Speed Math Document</a>
                                                </li>
                                            </ol>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#topic-2" aria-expanded="false" aria-controls="topic-2">
                                    <ul class="d-flex flex-column gap-1 ">
                                        <li class="d-flex gap-3 align-items-center">
                                            <b class="fs-16 fw-bold">Percentage</b>
                                            <span class="badge bg-warning text-dark">Moderate</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="topic-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body py-3">
                                    <ul class="mb-3">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" checked id="speed">
                                                <label class="form-check-label fw-medium secondary-font fs-15" for="speed">
                                                    1. Speed Learning Objectives
                                                </label>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <ol class="">
                                                <li class="d-flex gap-2 mb-3 align-items-center">
                                                    <iconify-icon icon="healthicons:i-exam-multiple-choice" class="me-2 fs-24 primary-color"></iconify-icon>
                                                    <a href="./Quiz.php" class=" text-ellipsis">Speed Math Assignment Quiz </a>
                                                </li>
                                                <li class="d-flex gap-2 mb-3  align-items-center">
                                                    <i class="fa-solid primary-color fs-18 fa-file-circle-plus me-2"></i>
                                                    <a href="./pdf.php" class=" text-ellipsis">Speed Math Document</a>
                                                </li>
                                            </ol>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#topic-3" aria-expanded="false" aria-controls="topic-3">
                                    <ul class="d-flex flex-column gap-1 ">
                                        <li class="d-flex gap-3 align-items-center">
                                            <b class="fs-16 fw-bold">Simplificatoon & Approximtion</b>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="topic-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body py-3">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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


<?php include('footer.php'); ?>

<script>
    // Quiz Questions 
    $(document).ready(function() {
        // Hide all questions except the first one
        $('.question').not(':first').hide();

        // Next button click event
        $('#next-btn').on('click', function() {
            // Get the current question
            var currentQuestion = $('.question:visible');

            // Hide the current question
            currentQuestion.hide();

            // Get the next question
            var nextQuestion = currentQuestion.next('.question');

            // If there is a next question, show it
            if (nextQuestion.length !== 0) {
                nextQuestion.show();
            }
        });
        $('#skip-btn').on('click', function() {
            // Get the current question
            var currentQuestion = $('.question:visible');

            // Hide the current question
            currentQuestion.hide();

            // Get the next question
            var nextQuestion = currentQuestion.next('.question');

            // If there is a next question, show it
            if (nextQuestion.length !== 0) {
                nextQuestion.show();
            }
        });
    });
    // Quiz Questions 
</script>

<!-- sidebar panel Bydeafult close  -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var layoutMenu = document.getElementById("layout-menus");
        if (layoutMenu) {
            layoutMenu.classList.add("layout-menu-collapsed");
        }
    });
</script>
<!-- sidebar panel Bydeafult close  -->