<?php include('./header.php'); ?>


<!-- Gallary Slider -->
<section class="section pt-md-5 pt-4  pb-0 gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="fw-bold heading-text mb-2 text-start fs-24">Artwork and Gallery Sales System </h3>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="pb-sm-5 pb-4">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-dark">
                        <div class="carousel-indicators m-0 py-md-2 py-0 rounded-3">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.pexels.com/photos/20410779/pexels-photo-20410779/free-photo-of-a-wooden-walkway-in-the-middle-of-a-jungle.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 object-fit-cover img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gallery/Rectangle 32.png" class="d-block w-100 object-fit-cover img-fluid" alt="...">
                            </div> 
                            <div class="carousel-item">
                                <img src="assets/img/Gallery/Rectangle 32.png" class="d-block w-100 object-fit-cover img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallary Slider -->

<div class="container gallery-img">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="fw-bold heading-text text-start fs-24 mb-2">Search Artworks</h3>
        </div>
        <div class="col-12 mt-2 mb-3 pb-4">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search">
        </div>
        <div class="col-lg-12 border-bottom-tabs">
            <h3 class="section-heading text-start fs-24">Browse by Categories</h3>
            <ul class="nav" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#gallery-1" type="button" role="tab" aria-controls="gallery-1" aria-selected="true">Category name</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#gallery-2" type="button" role="tab" aria-controls="gallery-2" aria-selected="false">Category name</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#gallery-3" type="button" role="tab" aria-controls="gallery-3" aria-selected="false">Category name</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="gallery-1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container pt-2">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_1rBg5YSi00c.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_5TK1F5VfdIk.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_-MCrF6hnojU.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_wN9DU73b8_s.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_wlxJ4idMTUk.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_bU8TeXhsPcY.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_wN9DU73b8_s.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_wlxJ4idMTUk.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                                <img src="assets/img/Gallery/unsplash_bU8TeXhsPcY.png" class="img-fluid object-fit-cover rounded-2" alt="...">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="gallery-2" role="tabpanel" aria-labelledby="gallery-2-tab">Profile</div>
                <div class="tab-pane fade" id="gallery-3" role="tabpanel" aria-labelledby="gallery-3-tab">Contact</div>
            </div>
            <!-- Categories list end -->
        </div>
    </div>
</div>


<?php include('./footer.php'); ?>