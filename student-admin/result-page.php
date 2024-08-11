<?php include('header.php'); ?>

<div class="container-xxl flex-grow-1 container-p-y admin admin1">
    <div class="row">
        <div class="col-lg-12">
            <div class="card black-tabs card-body">
                <ul>
                    <li class="border-bottom pb-2 ">
                        <p class="fw-semibold  heading-text fs-17">Biology Exam</p>
                        <span class="para-text secondary-font fw-medium fs-15">Try again or move on to the next lecture</span>
                    </li>
                </ul>
                <div class="row justify-content-center align-items-center mt-4">
                    <div class="col-sm-4 mb-sm-0 mb-3">
                        <div class="card border border-1 py-5 h-100 card-body">
                            <iconify-icon icon="noto:check-mark-button" style="font-size: 30px;"></iconify-icon>
                            <p class="fw-extrabold secondary-font mt-4 fs-18">24</p>
                            <p class="fw-semibold secondary-font fs-16 text-truncate mt-4">Correct</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-sm-0 mb-3">
                        <div class="card border border-1 py-5 h-100 card-body">
                            <i class="fa-solid fa-square-xmark fs-32 wrong-color"></i>
                            <p class="fw-extrabold secondary-font mt-4 fs-18">10</p>
                            <p class="fw-semibold secondary-font fs-16 text-truncate mt-4">Incorrect</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-sm-0 mb-3">
                        <div class="card border border-1 py-5 h-100 card-body">
                            <a href="#"><i class="fa-solid fa-forward fs-18 p-2 rounded-1 text-white" style="background:#F5C241"></i></a>
                            <p class="fw-extrabold secondary-font mt-4 fs-18">05</p>
                            <p class="fw-semibold secondary-font fs-16 text-truncate mt-4">Skipped</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="./Assignment-result.php" class="fw-medium fs-15 secondary-font primary-color d-block mt-3 text-truncate">View Question Wise</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<?php include('footer.php'); ?>