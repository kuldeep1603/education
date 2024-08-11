<?php include('header.php'); ?>

<div class="container-xxl flex-grow-1 container-p-y Mock-Test admin admin1">
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
        <div class="col-lg-7 mt-lg-0 mt-3">
            <div class="card card-body px-3 bg-white">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav gap-3 border-bottom pb-3 black-tabs nav-pills " id="pills-tab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <button class="nav-link px-sm-1 px-0 box-shadow-none  active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#Grammer" type="button" role="tab" aria-controls="Grammer" aria-selected="true">Grammar</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link px-sm-1 px-0 box-shadow-none  box" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#Verb" type="button" role="tab" aria-controls="Verb" aria-selected="false">Verb</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link px-sm-1 px-0 box-shadow-none  box" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Advance-English" type="button" role="tab" aria-controls="Advance-English" aria-selected="false"> English</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="tab-content p-0" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Grammer" role="tabpanel" aria-labelledby="Grammer-tab">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-sm-center align-items-start">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Verb" role="tabpanel" aria-labelledby="Verb-tab">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Advance-English" role="tabpanel" aria-labelledby="Advance-English-tab">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-lg-2 mt-1">
                                            <div class="card px-2 py-3 border-bottom rounded-0 card-body">
                                                <ul class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                    <li class="d-flex gap-2 align-items-center">
                                                        <iconify-icon icon="material-symbols:library-books-sharp" class="fs-22" style="color: #0a3d6c;"></iconify-icon>
                                                        <span class="heading-text fs-16 fw-medium">Test : Selecting Words - Reading Comprehension </span>
                                                    </li>
                                                    <li class="ps-md-0 ps-4">
                                                        <a href="./Ebooks-details.php" class="py-2 px-2 fs-14 bg-secondary text-white fw-medium d-flex gap-2 align-items-center">
                                                            View Document
                                                            <iconify-icon icon="mingcute:right-fill" style="color: white;"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
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
        <div class="col-lg-2 mt-lg-0  p-lg-0">
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


<!-- small screen subject option  -->
<?php include('small-screen-subject.php'); ?>
<!-- small screen subject option  -->




<?php include('footer.php'); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var layoutMenu = document.getElementById("layout-menus");
        if (layoutMenu) {
            layoutMenu.classList.add("layout-menu-collapsed");
        }
    });
</script>