<?php include('header.php'); ?>
<div class="container-xxl flex-grow-1 container-p-y admin admin1">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="card rounded-3">
                <div class="card-body rounded-3 shadow px-0 py-3">
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
        <div class="col-lg-6 col-md-8 col-sm-8 px-lg-0">
            <div class="card card-body">
                <ul>
                    <li class=" border-bottom py-md-4 py-2">
                        <h5 class="fs-15 text-ellipsis  d-flex gap-2 align-items-center fw-semibold heading-text">CAT 2023</h5>
                        <ol class="d-flex  justify-content-between align-items-center mt-2 flex-wrap">
                            <li>
                                <a href="#" id="myText" class="fs-15  fw-semibold secondary-color">https://mdo.com/t/53434534/</a>
                            </li>
                            <li>
                                <button onclick="copyContent()" class="fs-15 px-2 rounded-1 py-1 fw-medium d-flex gap-2 align-items-center justify-content-center text-ellipsis bg-primary text-white border-0">
                                    <iconify-icon icon="uil:copy" class="fs-18"></iconify-icon>
                                    Copy</button>
                            </li>
                        </ol>
                    </li>
                    <li class=" border-bottom py-md-4 py-2">
                        <h5 class="fs-15 text-ellipsis  d-flex gap-2 align-items-center fw-semibold heading-text">CAT 2023</h5>
                        <ol class="d-flex  justify-content-between align-items-center mt-2 flex-wrap">
                            <li>
                                <a href="#" id="myText" class="fs-15  fw-semibold text-ellipsis  secondary-color">https://mdo.com/t/53434534/</a>
                            </li>
                            <li>
                                <button onclick="copyContent()" class="fs-15 px-2 rounded-1 py-1 fw-medium d-flex gap-2 align-items-center justify-content-center text-ellipsis bg-primary text-white border-0">
                                    <iconify-icon icon="uil:copy" class="fs-18"></iconify-icon>
                                    Copy</button>
                            </li>
                        </ol>
                    </li>
                    <li class=" border-bottom py-md-4 py-2">
                        <h5 class="fs-15 text-ellipsis  d-flex gap-2 align-items-center fw-semibold heading-text">CAT 2023</h5>
                        <ol class="d-flex  justify-content-between align-items-center mt-2 flex-wrap">
                            <li>
                                <a href="#" id="myText" class="fs-15  fw-semibold text-ellipsis  secondary-color">https://mdo.com/t/53434534/</a>
                            </li>
                            <li>
                                <button onclick="copyContent()" class="fs-15 px-2 rounded-1 py-1 fw-medium d-flex gap-2 align-items-center justify-content-center text-ellipsis bg-primary text-white border-0">
                                    <iconify-icon icon="uil:copy" class="fs-18"></iconify-icon>
                                    Copy</button>
                            </li>
                        </ol>
                    </li>
                    <li class=" border-bottom py-md-4 py-2">
                        <h5 class="fs-15 text-ellipsis  d-flex gap-2 align-items-center fw-semibold heading-text">CAT 2023</h5>
                        <ol class="d-flex  justify-content-between align-items-center mt-2 flex-wrap">
                            <li>
                                <a href="#" id="myText" class="fs-15  fw-semibold text-ellipsis  secondary-color">https://mdo.com/t/53434534/</a>
                            </li>
                            <li>
                                <button onclick="copyContent()" class="fs-15 px-2 rounded-1 py-1 fw-medium d-flex gap-2 align-items-center justify-content-center text-ellipsis bg-primary text-white border-0">
                                    <iconify-icon icon="uil:copy" class="fs-18"></iconify-icon>
                                    Copy</button>
                            </li>
                        </ol>
                    </li>
                </ul>
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

<?php include('footer.php'); ?>

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