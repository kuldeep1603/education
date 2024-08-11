<?php include 'header.php';?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <section class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100 border-0">
                            <div class="card-body">
                                <div>
                                    <h4 class="">
                                        Welcome back <span class="text-success">Student</span>
                                    </h4>
                                    <h5>
                                        this is your overall Performance analysis result
                                    </h5>
                                    <p>chack and improve your self</p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Repellat nobis vero laborum soluta nesciunt
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer bg-white pb-2 border-0">
                                <div class="">
                                    <button class="btn btn-primary fw-normal">
                                        download Report
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <img src="{% static 'website/assets/img/analysis/001.png' %}" alt=""
                                                class="p-2 w-50px" />
                                            <img src="assets/images/001-shuttle.png" width="24px" height="24px" alt="">
                                            <p class="fs-5 fw-bold text-primary">77 %</p>
                                            <p>Overall Percentile</p>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <img src="{% static 'website/assets/img/analysis/003.png' %}" alt=""
                                                class="p-2 w-50px" class="w-50px" />
                                            <img src="assets/images/003-aim.png" width="24px" height="24px" alt="">
                                            <p class="fs-5 fw-bold text-primary">88 %</p>
                                            <p>Overall Accuracy</p>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <img src="{% static 'website/assets/img/analysis/002.png' %}" alt=""
                                                class="p-2 w-50px" />
                                            <img src="assets/images/002-speed.png" width="24px" height="24px" alt="">
                                            <p class="fs-5 fw-bold text-primary">56 %</p>
                                            <p>Overall Percentage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <p class="">QADI</p>
                                            <div class="flex-shrink-0 align-self-center">
                                                <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <p class="">LR</p>
                                            <div class="flex-shrink-0 align-self-center">
                                                <div id="radialchart-2" class="apex-charts" dir="ltr"></div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <p class="">Abstract</p>
                                            <div class="flex-shrink-0 align-self-center">
                                                <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            <p class="">VARC</p>
                                            <div class="flex-shrink-0 align-self-center">
                                                <div id="radialchart-varc" class="apex-charts" dir="ltr"></div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row mt-4">
                <div class="col-xl-12">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">LR Test Analysis </h4>
                                    <canvas id="lineChartLR"></canvas>

                                </div> 
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">QADI Test Analysis</h4>
                                    <canvas id="lineChartQADI"></canvas>
                                </div> 
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Abstract Test Analysis </h4>
                                    <canvas id="lineChartAbstract"></canvas>
                                </div> 
                            </div> 
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">VARC Test Analysis </h4>
                                    <canvas id="lineChartVARC"></canvas>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
                
            </div>
          
        </div>
      
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php include 'footer.php';?>