<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Manoevure Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <!-- plugin css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="assets/libs/@fullcalendar/core/main.min.css" type="text/css">
    <link rel="stylesheet" href="assets/libs/@fullcalendar/daygrid/main.min.css" type="text/css">
    <link rel="stylesheet" href="assets/libs/@fullcalendar/bootstrap/main.min.css" type="text/css">
    <link rel="stylesheet" href="assets/libs/@fullcalendar/timegrid/main.min.css" type="text/css">



    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

    <!-- quill css -->
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.0/tagify.css">


    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="calcontainer">
            <div class="mocktest">
                <div class="">
                    <div class="container-fluid bg-white">
                        <div class="card p-0 m-0">
                            <div class="card-body p-0 m-0 pb-1">
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <img src="assets/images/logo.png" alt="" class="logo-1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row pt-2 d-md-flex justify-content-between">
                                            <div class="col-md-6 mt-lg-0 mt-2">
                                                <p class="fs-5 text-ellipsis mb-0">MAH MBA CET 2018 Quantitative Aptitude Test</p>
                                            </div>
                                            <div class="col-md-3 mt-lg-0 mt-2 d-md-flex align-items-center">
                                                <span class="badge bg-light fs-6 float-md-end me- align-middle">Time
                                                    Left <span class="badge bg-secondary me-2 align-middle ms-2">01</span>:<span class="badge bg-secondary ms-2 align-middle me-2">58</span>:<span class="badge bg-secondary ms-2  align-middle">45</span></span>
                                            </div>
                                            <div class="col-xl-3 mt-lg-0 mt-2">
                                                <ul class="d-flex ps-lg-3 ps-1 gap-2 flex-lg-nowrap flex-wrap list-style-none align-items-center mb-0">
                                                    <li class="" style="list-style-type:none">
                                                        <a href="exam-instruction1.php" class="btn py-1 bg-2 fw-bold">Instructions</a>
                                                    </li>
                                                    <li class="" style="list-style-type:none">
                                                        <a href="question-paper.php" class="btn py-1 bg-2 fw-bold">
                                                            Questions</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-2  d-md-flex justify-content-end">
                                        <div class="gap-2 p-2">
                                            <button type="button" class="btn btn-outline-info btn-sm">Enter Full
                                                Screen</button>
                                            <!-- <button type="button" class="btn btn-outline-info btn-sm">Pause</button> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-9" id="question_block">

                                <div class="row">
                                    <div class="card mb-0">
                                        <div class="row bg-light border-bottom">
                                            <div class="col-md-9 col-8">
                                                <div class="d-flex p-2">
                                                    <h6 class="align-middle mt-1 me-4">Sections |</h6>
                                                    <div class="gap-2 d-flex flex-wrap">
                                                        <button type="button" class="btn btn-blue btn-sm">Quantative
                                                            Appti..</button>
                                                        <button type="button" class="btn btn-blue btn-sm">Quantative
                                                            Appti..</button>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4">
                                                <div class="d-flex  float-end mt-2">
                                                    <div class="">
                                                        <!-- <button class="btn btn-outline-info btn-sm btn-30px "><i
                                                                class=" ri-fullscreen-exit-line fs-6 me-2"></i></button> -->
                                                        <button class="btn btn-outline-info  btn-sm btn-30px ms-2"><i class="fas fa-calculator fs-6" id="fa-calculator"></i></button>
                                                    </div>

                                                    <div class="ms-2">
                                                        <span class="badge bg-medium-secondary text-danger fs-6">Section Time left
                                                            <span class="d-block fs-6 ">10:29</span> </span>
                                                    </div>




                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body m-1  h-480px p-0 px-3 py-2 overflow-auto">

                                            <div class="row">

                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <span class="fs-5 fw-bold">Question 1.</span>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <!-- <div class=" me-2">
                                                            <span class="badge bg-medium-secondary text-danger fs-6">time
                                                                left
                                                                <span class="d-block fs-6 ">1:29</span> </span>
                                                        </div> -->
                                                        <div>
                                                            <span class="d-block">Marks</span>
                                                            <span class="badge bg-success">+ 1</span>
                                                            <span class="badge bg-danger">-0.33</span>
                                                        </div>
                                                    </div>




                                                </div>

                                            </div>



                                            <div class="">
                                                <div class="row mt-2">
                                                    <p>Two small drops of mercury each of radius 'R' coalesce to form a
                                                        large single
                                                        drop. The
                                                        ratio of the total surface energies before and after the change
                                                        is ?
                                                    </p>
                                                    <form action="">

                                                        <div class="col-12 px-3 py-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer" id="answer1s">
                                                                <label class="form-check-label" for="answer1s">
                                                                    23:1
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 px-3 py-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer" id="answer2s">
                                                                <label class="form-check-label" for="answer2s">
                                                                    23:4
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 px-3 py-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer" id="answer3s">
                                                                <label class="form-check-label" for="answer3s">
                                                                    23:2
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 px-3 py-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="answer" id="answer4s">
                                                                <label class="form-check-label" for="answer4s">
                                                                    23:3
                                                                </label>
                                                            </div>
                                                        </div>





                                                    </form>
                                                </div>

                                                <!--  -->
                                                <div class="drag-button1">
                                                    <div>
                                                        <div class="d-md-block d-none">
                                                            <button class="btn bg-dark p-0 py-3 rounded-0" id="drag_button1" style="display: block;"> <i class="ri-arrow-right-s-line align-middle text-white "></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-none d-block">
                                                        <button class="btn bg-dark p-0 py-3 rounded-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"> <i class="ri-arrow-right-s-line align-middle text-white "></i></button>
                                                    </div>



                                                </div>


                                            </div>
                                        </div>
                                        <div class="row bg-light p-2">

                                            <div class="d-md-flex  justify-content-between">

                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <button id="mark-review" class="btn mark-review  btn-outline-info">Mark for Review &
                                                            Next</button>
                                                    </div>

                                                    <div class="">
                                                        <button id="clear-response" class="btn btn-outline-info">Clear Response</button>
                                                    </div>


                                                </div>
                                                <div class="">
                                                    <button id="save-next" class="btn btn-success">Save & Next </button>
                                                </div>

                                            </div>



                                            <!-- <div class="d-md-flex d-md-none d-block">
                                                <div class="m-2">
                                                    <div class="m-2 col-md-4 d-grid">
                                                        <button id="mark-review-s" class="btn btn-outline-info">Mark for Review &
                                                            Next</button>
                                                    </div>

                                                    <div class="m-2 col-md-4 d-grid">
                                                        <button class="btn btn-outline-info">Clear Response</button>
                                                    </div>


                                                </div>
                                                <div class="m-2 col-md-4 d-grid">
                                                    <button class="btn btn-success">Save & Next </button>
                                                </div>

                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 bg-light" id="info_sidebar" style="display:block">

                                <div class="d-md-block d-none">


                                    <div class="row">
                                        <div class="card">
                                            <div class="row bg-light border-bottom" style="padding-bottom: 1px;">
                                                <div class="col-md-12">
                                                    <div class="d-flex p-1">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle header-profile-user">
                                                        <span class="fs-5 align-middle fw-bold ms-2 mt-2">Fazal
                                                            Shaikh</span>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex gap-3 mb-1 flex-wrap">
                                            <div>
                                                <span class="badge bg-success pt-1">12</span>
                                                <span class="ms-1">Answered</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-1 pt-1">12</span>
                                                <span class="ms-1">Marked</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-secondary pt-1">12</span>
                                                <span class="ms-1">Not Visited</span>
                                            </div>


                                        </div>

                                        <div class="d-flex gap-3 mb-1 flex-wrap">
                                            <div>
                                                <span class="badge bg-1 pt-1">12</span>
                                                <span class="ms-1">Marked and answered</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger pt-1">12</span>
                                                <span class="ms-1">Not answered</span>
                                            </div>



                                        </div>




                                    </div>




                                    <div>

                                        <div class="row mt-1 ">
                                            <div class="col-12 bg-2 p-2 ">
                                                <p class="fs-5 text-dark mb-0">Section: full Test</p>
                                            </div>


                                            <div class="col-12 overflow-auto ">

                                                <div class="d-flex justify-content-center total-question-1 h-300px">
                                                    <div class="col-12 pt-2">
                                                        <a href="mcq.php">
                                                            <button type="button" class="btn not-visited questions btn-primary  p-0 mb-2">01</button>
                                                        </a>
                                                        <a href="paragraph.php"><button type="button" class="btn not-visited questions  rounded-0 mb-2 p-0 m-0">02</button></a>
                                                        <a href="multi-answer.php"> <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">03</button></a>
                                                        <a href="fill-in-the-blank.php"><button type="button" class="btn not-visited questions rounded-0 p-0 mb-2">04</button></a>

                                                        <a href="number-question.php"> <button type="button" class="btn not-visited questions rounded-0 p-0  mb-2">05</button></a>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">06</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">07</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">08</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">09</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">10</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">11</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">01</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">12</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">13</button>
                                                        <button type="button" class="btn rounded-0 not-visited questions  mb-2 p-0 m-0 ">14</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">10</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">11</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">01</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">12</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">13</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">14</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">10</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">11</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">01</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">12</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">13</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">14</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">10</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">11</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">01</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">12</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">13</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">14</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">10</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">17</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">01</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">12</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">13</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">14</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">10</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">11</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">01</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">12</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">13</button>
                                                        <button type="button" class="btn  rounded-0 not-visited questions mb-2 p-0 m-0">140</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row mt-3 ">
                                            <div class="col-6 d-grid">
                                                <a href="exam-instruction1.php" class="btn bg-2 fw-bold">Instructions</a>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <a href="question-paper.php" class="btn bg-2 fw-bold">
                                                    Questions</a>
                                            </div>
                                        </div> -->
                                        <div class="row mt-3">
                                            <div class="col-12 d-grid pt-2">
                                                <button href="#" class="btn bg-info text-white fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#submit_test">
                                                    Submit Test</button>
                                            </div>
                                        </div>
                                        <!-- <div class="card card-footer">
                                        <div class="row">
                                            <div class="col-6 d-grid ">
                                                <button class="btn bg-2 fw-bold" data-bs-toggle="modal"
                                                    data-bs-target="#instructions" type="button">Instructions</button>
                                            </div>
                                            <div class="col-6 d-grid ">
                                                <button class="btn bg-2 fw-bold" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#submit_test">
                                                    Questions</button>
                                            </div>

                                        </div>


                                    </div> -->
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
            </div>



            <!-- calculator  -->
            <div id="Calculator" class="cal-hide Calculator">
                <div id="drag-1" class="draggable">
                    <div class="cal-container">
                        <div class="calculator-heading d-flex justify-content-center">
                            <p class="text-center fs-5 m-0">Calculator</p>
                        </div>
                        <div class="calculator-body">
                            <input type="text" class="cal-display" placeholder="0" id="input" />
                            <!-- <input type="text" class="cal-display" placeholder="0" /> -->

                            <div class="cal-buttons">
                                <button class="operator" data-value="MC">MC</button>
                                <button class="operator" data-value="MR">MR</button>
                                <button class="operator" data-value="MS">MS</button>
                                <button class="operator" data-value="M+">M+</button>
                                <button class="operator" data-value="M-">M-</button>


                                <button class="cal-clear" data-value="DEL">&#8592</button>

                                <button class="cal-clear" data-value="AC">C</button>
                                <button class="cal-clear" data-value="AC">+/-</button>
                                <button class="operator" data-value="square">x²</button>
                                <button class="operator" data-value="sqrt" id="sroot">√</button>



                                <button data-value="7">7</button>
                                <button data-value="8">8</button>
                                <button data-value="9">9</button>
                                <button class="operator" data-value="/">/</button>
                                <button class="operator" data-value="%">%</button>

                                <button data-value="4">4</button>
                                <button data-value="5">5</button>
                                <button data-value="6">6</button>
                                <button class="operator" data-value="*">*</button>
                                <button class="operator" data-value="1/x">1/X</button>

                                <button data-value="1">1</button>
                                <button data-value="2">2</button>
                                <button data-value="3">3</button>
                                <button class="operator" data-value="-">-</button>
                                <button class="operator" data-value="-">-</button>



                                <button data-value="0">0</button>
                                <button data-value="00">00</button>
                                <button data-value=".">.</button>
                                <button class="operator" data-value="+">+</button>
                                <button class="operator bg-success text-white" data-value="=">=</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- calculator -->
        </div>

        <div class="modal fade question_list" id="submit_test" tabindex="-1" role="dialog" aria-labelledby="submit_test" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-center">
                            <h6 class="text-center" id="submit_test">Submit Test</h6>
                        </div>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body p-0">

                                <div class="table-responsive color-head">
                                    <table class="table table-centered table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Section </th>
                                                <th class="col">No. of Questions</th>
                                                <th class="col">Answered</th>
                                                <th class="col">Not Answered</th>
                                                <th class="col">Mark for Review</th>
                                                <th class="col">Not Visited</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Quantitative Apptitude</td>
                                                <td class="text-center">100</td>
                                                <td class="text-center">49</td>
                                                <td class="text-center">30</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">12</td>
                                            </tr>


                                        </tbody>

                                    </table>

                                </div>

                            </div>
                            <!-- end card-body -->
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="gap-4  mt-4 mb-4">
                            <button class="btn btn-secondary px-2" type="button" data-bs-dismiss="modal">Close</button>
                            <a href="test-result.php">
                                <button class="btn btn-info px-2" type="submit">Submit</button></a>

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <div class="card">
                        <div class="row bg-light border-bottom" style="padding-bottom: 1px;">
                            <div class="col-md-12">
                                <div class="d-flex p-1">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle header-profile-user">
                                    <span class="fs-5 align-middle fw-bold ms-2 mt-2">Fazal
                                        Shaikh</span>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="d-flex gap-3 mb-1">
                        <div>
                            <span class="badge bg-success pt-1">12</span>
                            <span class="ms-1">Answered</span>
                        </div>
                        <div>
                            <span class="badge bg-1 pt-1">12</span>
                            <span class="ms-1">Marked</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary pt-1">12</span>
                            <span class="ms-1">Not Visited</span>
                        </div>


                    </div>

                    <div class="d-flex gap-3 mb-1">
                        <div>
                            <span class="badge bg-1 pt-1">12</span>
                            <span class="ms-1">Marked and answered</span>
                        </div>
                        <div>
                            <span class="badge bg-danger pt-1">12</span>
                            <span class="ms-1">Not answered</span>
                        </div>



                    </div>




                </div>




                <div>

                    <div class="row mt-1 ">
                        <div class="col-12 bg-2 p-2 ">
                            <p class="fs-5 text-dark mb-0">Section: full Test</p>
                        </div>


                        <div class="col-12 overflow-auto ">

                            <div class="d-flex justify-content-center total-question-1 h-300px">
                                <div class="col-12 pt-2">
                                    <a href="mcq.php"><button type="button" class="btn  not-visited questions p-0 mb-2">01</button></a>
                                    <a href="paragraph.php"><button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">02</button></a>
                                    <a href="multi-answer.php"> <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">03</button></a>
                                    <a href="fill-in-the-blank.php"><button type="button" class="btn not-visited questions rounded-0 p-0 mb-2">04</button></a>

                                    <a href="number-question.php"> <button type="button" class="btn not-visited questions rounded-0 p-0  mb-2">05</button></a>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">06</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">07</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">08</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">09</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">10</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">11</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">01</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">12</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">13</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0 ">14</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">10</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">11</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">01</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">12</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">13</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">14</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">10</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">11</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">01</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">12</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">13</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">14</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">10</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">11</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">01</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">12</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">13</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">14</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">10</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">17</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">01</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">12</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">13</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">14</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">10</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">11</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">01</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">12</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">13</button>
                                    <button type="button" class="btn not-visited questions rounded-0 mb-2 p-0 m-0">140</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">

                        <div class="col-6 d-grid">
                            <a href="exam-instruction1.php" class="btn bg-2 fw-bold">Instructions</a>
                        </div>
                        <div class="col-6  d-grid">
                            <a href="question-paper.php" class="btn bg-2 fw-bold">
                                Questions</a>
                        </div>
                        <div class="col-12 d-grid pt-2">

                            <button href="#" class="btn bg-info text-white fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#submit_test">
                                Submit Test</button>

                        </div>







                    </div>
                    <!-- <div class="card card-footer">
                                        <div class="row">
                                            <div class="col-6 d-grid ">
                                                <button class="btn bg-2 fw-bold" data-bs-toggle="modal"
                                                    data-bs-target="#instructions" type="button">Instructions</button>
                                            </div>
                                            <div class="col-6 d-grid ">
                                                <button class="btn bg-2 fw-bold" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#submit_test">
                                                    Questions</button>
                                            </div>

                                        </div>


                                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>


    <script>
        var question_block = document.getElementById("question_block");
        var info_sidebar = document.getElementById("info_sidebar");
        var drag_button1 = document.getElementById("drag_button1");


        drag_button1.addEventListener("click", function() {
            // info_sidebar.style.display="none";

            if (info_sidebar.style.display === "block") {
                info_sidebar.style.display = "none";
                question_block.classList.add("col-md-12");
            } else {
                info_sidebar.style.display = "block";
                question_block.classList.remove("col-md-12"); // Hide the div
            };
        });

        // mark for reviews 
        document.addEventListener("DOMContentLoaded", function() {
            const updateButton = document.getElementById("mark-review");
            const listItems = document.querySelectorAll(".questions");

            let currentIndex = 0;

            updateButton.addEventListener("click", function() {
                // Remove the existing class from the current element
                listItems[currentIndex].classList.remove("not-visited-1");

                // Move to the next element or wrap around to the first element
                currentIndex = (currentIndex + 1) % listItems.length;

                // Add a new class to the next element
                listItems[currentIndex].classList.add("Marked");
            });
        });

        // clear-response 
        document.addEventListener("DOMContentLoaded", function() {
            const ClearResponse = document.getElementById("clear-response");
            const clickableElements2 = document.querySelectorAll(".questions");

            ClearResponse.addEventListener("click", function() {
                clickableElements2.forEach(function(element1) {
                    element1.classList.remove("Answered", "Marked", "Not-answered", "Marked-and-answered");
                    element1.classList.add("not-visited");
                });
            });
        });

        // answered
        document.addEventListener("DOMContentLoaded", function() {
            const SaveNext = document.getElementById("save-next");
            const listItems = document.querySelectorAll(".questions");

            let currentIndex = 0;

            SaveNext.addEventListener("click", function() {
                // Remove the existing class from the current element
                listItems[currentIndex].classList.remove("not-visited");

                // Move to the next element or wrap around to the first element
                currentIndex = (currentIndex + 1) % listItems.length;

                // Add a new class to the next element
                listItems[currentIndex].classList.add("Answered");
            });
        });

        // not answered 
        const clickableElements = document.querySelectorAll(".questions");
        clickableElements.forEach(function(element) {
            element.addEventListener("click", function() {
                element.classList.remove("not-visited");
                element.classList.add("Not-answered");
            });
        });
        // answered and marked for review 
    </script>