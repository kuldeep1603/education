<?php include 'header.php'; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <div class="d-flex gap-2 align-items-center">
              <h4 class="mb-sm-0">Video List</h4>


              <a href="upload-video.php" class="btn btn-primary waves-effect waves-light float-sm-right px-4 py-1 ms-2">
                Upload <i class="ri-add-circle-line align-middle"></i>
              </a>


            </div>

            <div class="page-title-right">

              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Video Library</li>
              </ol>
            </div>

          </div>
        </div>
      </div> 


      <div class="row">
        <div>
          <button type="button" class="btn btn-primary float-end" id="filter_button">Filter</button>
        </div>
      </div>  -->
            <!-- end page title -->
            <div class="card mt-2" id="filter_card" style="display:none;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div class="row">
                                <div class="col-md-3 py-2">
                                    <div class="form-group cfrom">
                                        <label>Exams </label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            multiple data-placeholder="Choose ...">
                                            <option value="">CAT</option>
                                            <option value="203">MBACET</option>
                                            <option value="202">MAT</option>
                                            <option value="201">CMAT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-group cfrom">
                                        <label>Section Name</label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            multiple data-placeholder="Choose ...">
                                            <option value="">Select Section Name</option>
                                            <option value="203">Logical Reasoning</option>
                                            <option value="202">Abstract Reasoning</option>
                                            <option value="201">Quantitative Aptitude
                                            </option>
                                            <option value="72">Verbal Ability
                                            </option>
                                            <option value="70"> Reading Comprehension</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-group cfrom">
                                        <label>Sub Section Name</label>
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            multiple data-placeholder="Choose ...">
                                            <option value="203">Puzzles</option>
                                            <option value="202">Matrices</option>
                                            <option value="201">Ranking Based
                                            </option>
                                            <option value="72">
                                                Algebra
                                            </option>
                                            <option value="70">Ratio & Proportion</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 py-2">
                                    <div class="form-group cfrom">
                                        <label>Topic Name:</label>

                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            multiple data-placeholder="Choose ...">
                                            <option value="">Percentages</option>
                                            <option value="203">Profit & Loss</option>
                                            <option value="202">Blood Relation</option>
                                            <option value="201">Clocks & Calendars
                                            </option>
                                            <option value="72">Permutation & Combination
                                            </option>
                                            <option value="70"> Trigonometry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <div>
                                    <button class="btn btn-primary1" type="submit">Filter</button>
                                </div>

                            </div>
                        </div>




                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">

                    <div class="card m-2">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-1 col-3">
                                    <h6 class="fw-bold">0004</h6>
                                </div>

                                <div class="col-md-2 col-3">
                                    <img src="assets/images/bg.png" alt="" class="img-fluid rounded">
                                </div>
                                <div class="col-6 col-md-7">
                                    <p class="question-2line fs-5">Sectional Mock Test 1 </p>

                                    <div class="text-secondary mt-2">
                                        <span class="badge bg-light px-2">20 Mins</span>
                                        <span class="badge bg-light px-2">20 Questions</span>
                                        <span class="badge bg-light px-2">20 Marks</span>
                                    </div>


                                </div>
                                <div class="col-md-2 d-flex align-items-center ">
                                    <div class="d-flex justify-content-end">
                                        <div class="d-grid">
                                        <a href="exam-instruction.php" class="btn btn-outline-info btn-lg float-end">Start
                                            Test</a>
                                        </div>
                                        
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card m-2">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-1 col-3">
                                    <h6 class="fw-bold">0004</h6>
                                </div>

                                <div class="col-md-2 col-3">
                                    <img src="assets/images/bg.png" alt="" class="img-fluid rounded">
                                </div>
                                <div class="col-6 col-md-7">
                                    <p class="question-2line fs-5">Sectional Mock Test 1 </p>

                                    <div class="text-secondary mt-2">
                                        <span class="badge bg-light px-2">20 Mins</span>
                                        <span class="badge bg-light px-2">20 Questions</span>
                                        <span class="badge bg-light px-2">20 Marks</span>
                                    </div>


                                </div>
                                <div class="col-md-2 d-flex align-items-center ">
                                    <div class="d-flex justify-content-end">
                                        <div class="d-grid">
                                        <a href="exam-instruction.php" class="btn btn-outline-info btn-lg float-end">Start
                                            Test</a>
                                        </div>
                                        
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card m-2">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-1 col-3">
                                    <h6 class="fw-bold">0004</h6>
                                </div>

                                <div class="col-md-2 col-3">
                                    <img src="assets/images/bg.png" alt="" class="img-fluid rounded">
                                </div>
                                <div class="col-6 col-md-7">
                                    <p class="question-2line fs-5">Sectional Mock Test 1 </p>

                                    <div class="text-secondary mt-2">
                                        <span class="badge bg-light px-2">20 Mins</span>
                                        <span class="badge bg-light px-2">20 Questions</span>
                                        <span class="badge bg-light px-2">20 Marks</span>
                                    </div>


                                </div>
                                <div class="col-md-2 d-flex align-items-center ">
                                    <div class="d-flex justify-content-end">
                                        <div class="d-grid">
                                        <a href="exam-instruction.php" class="btn btn-outline-info btn-lg float-end">Start
                                            Test</a>
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


</div>
<!-- end main content-->


<?php include 'footer.php'; ?>