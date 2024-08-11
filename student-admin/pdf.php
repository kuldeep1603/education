<?php include('header.php'); ?>

<div class="container-xxl flex-grow-1 container-p-y admin admin1">
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none left">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
                    <ul>
                        <li class="d-flex ms-3 mb-2  gap-3 align-items-center flex-wrap">
                            <a href="./Course-Details.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                            <span class="fs-15 fw-medium text-color">E-Books</span>
                        </li>
                    </ul>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-light-card py-2 px-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#videos" aria-expanded="false" aria-controls="videos">
                                    <ul class="d-flex gap-3 align-items-center">
                                        <li>
                                            <a href="#" class="rounded-2 px-2 py-2 d-flex text-center bg-light-purple"><iconify-icon icon="ion:book" class="fs-25" style="color:  #8e00fe;"></iconify-icon></a>
                                        </li>
                                        <li class="d-flex flex-column">
                                            <b class="text-color fs-15 fw-semibold">Books</b>
                                            <span class="fs-14 para-text  fw-normal">1 Document</span>
                                        </li>
                                    </ul>
                                </button>
                            </h2>
                            <div id="videos" class="accordion-collapse show collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mt-lg-0 mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card px-3 card-body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptates iure non explicabo. Voluptatem cumque recusandae tempora officia impedit dicta, odit necessitatibus sint perferendis, dolor, adipisci eaque ipsum culpa possimus magnam perspiciatis voluptate. Et qui, quisquam id officia nulla rem incidunt alias repudiandae illum, inventore, quae totam perspiciatis ex culpa quam velit repellendus optio fuga? Eum deserunt sequi, eligendi est, molestias nostrum enim explicabo temporibus doloremque voluptates expedita perferendis obcaecati, necessitatibus dolore. Neque consectetur obcaecati sint iste eligendi est, laboriosam dignissimos, omnis harum optio libero cupiditate consequuntur! Laborum quasi vel impedit, excepturi voluptatum blanditiis error quos repellendus, cum veritatis perspiciatis magnam, magni fugit suscipit vitae temporibus odio velit illo ipsa ex! Distinctio eaque nobis saepe? Dolores fugiat voluptatibus eligendi enim numquam consectetur totam quis quisquam saepe cupiditate, perspiciatis unde reprehenderit iste ratione dolorum consequatur dicta suscipit vero praesentium ea excepturi esse! Magni, dolores architecto corrupti cupiditate cum accusantium. Ea dolor, eveniet asperiores consectetur, facere ad soluta adipisci accusamus ut quo, error totam nobis veritatis perferendis molestiae cupiditate in harum doloribus atque officiis est ex autem. Optio, sequi fugiat cumque officia, sint nihil distinctio voluptate reiciendis quas voluptates facilis iste placeat doloribus vitae. Tenetur, veniam pariatur aliquid amet animi quisquam atque!
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