<?php include('header.php'); ?>
<div class="container-xxl flex-grow-1 container-p-y admin admin1 forum">
  <div class="row">
    <div class="col-lg-9 px-sm-3 px-1">
      <div class="card px-sm-4 px-2 card-body">
        <div class="row">
          <div class="col-12 border-bottom pb-2">
            <div class="row">
              <div class="col-sm-8">
                <p class="fw-semibold heading-text fs-17">Forum</p>
                <span class="para-text fw-normal fs-15">Complete your assignment before
                  <span class="para-text fs-15 fw-medium">Due Date</span>
                </span>
              </div>
              <div class="col-sm-4 col-10 mt-sm-0 mt-2">
                <a href="#Question-table" data-bs-toggle="modal" class="px-3 bg-text-color text-white justify-content-center py-2 w-100 rounded-2 text-center d-flex gap-2 align-items-center">Ask Question
                  <iconify-icon icon="mingcute:question-fill" class="fs-18" style="color: white"></iconify-icon></a>
              </div>
            </div>
          </div>
          <div class="col-12 black-tabs pb-2 mt-4">
            <div class="row">
              <div class="col-sm-7 col-12" style="width: 508px">
                <ul class="nav nav-pills border-all rounded-3" id="pills-tab" role="tablist">
                  <li class="doubt-tabs nav-item box-shadow-none" id="doubt-tab1" role="presentation" style="width: 160px">
                    <button class="nav-link d-block border-0 m-0 w-100 active" id="whats-new-tab" data-bs-toggle="pill" data-bs-target="#whats-new" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                      My Space
                    </button>
                  </li>
                  <li class="doubt-tabs nav-item box-shadow-none" id="doubt-tab3" role="presentation" style="width: 160px">
                    <button class="nav-link d-block border-0 m-0 w-100" id="Your-Question-tab" data-bs-toggle="pill" data-bs-target="#Your-Question" type="button" role="tab" aria-controls="Your-Question" aria-selected="false">
                      My Question
                    </button>
                  </li>
                  <li class="doubt-tabs nav-item box-shadow-none" id="doubt-tab3" role="presentation" style="width: 160px">
                    <button class="nav-link d-block border-0 m-0 w-100" id="student-doubt-tab" data-bs-toggle="pill" data-bs-target="#student-doubt" type="button" role="tab" aria-controls="Your-Question" aria-selected="false">
                      Public Doubt
                    </button>
                  </li>
                </ul>
              </div>
              <div class="col-sm-4  mt-2">
                <select class="form-select py-2" aria-label="Default select example">
                  <option selected>Select Exams</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12">
                <div class="tab-content p-0" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="whats-new" role="tabpanel" aria-labelledby="whats-new-tab">
                    <div class="card mb-3 border-all rounded-1  card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold my-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <p class="fw-medium fs-17 mb-2">Answer :</p>
                      <!-- text  -->
                      <!-- <span class="fw-normal  d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span> -->
                      <!-- img  -->
                      <!-- <img src="https://s2.studylib.net/store/data/018047684_1-95eaa7f5f261aeaaad86c33ee228f683-768x994.png" class="forum-answer-img img-fluid rounded-1" alt=""> -->
                      <!-- audio  -->
                      <!-- <audio controls>
                        <source src="horse.ogg" type="audio/ogg">
                        <source src="horse.mp3" type="audio/mpeg">
                      </audio> -->
                      <!-- video  -->
                      <video width="100%"  controls class="forum-questions-answer-video">
                        <source src="" type="video/mp4">
                        <source src="" type="video/ogg">
                      </video>
                    </div>
                    <div class="card mb-3 border-all rounded-1  card-body forum-questions">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold my-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <p class="fw-medium fs-17 mb-2">Answer :</p>
                      <!-- <span class="fw-normal  d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span> -->

                      <img src="./assets/img/New/gk-details.png" alt="">
                    </div>
                    <div class="card mb-3 border-all rounded-1  card-body forum-questions">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <span class="fw-normal mt-1 d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span>
                      <!-- <ul class="mt-3 flex-wrap gap-3 d-flex justify-content-between align-items-center">
                        <li class="d-flex gap-2 align-items-center flex-wrap">
                          <p class="px-3 rounded-top py-2 bg-card-color fs-15 fw-medium para-text">
                            golang
                          </p>
                          <p class="px-3 rounded-top py-2 bg-card-color fs-15 fw-medium para-text">
                            linux
                          </p>
                          <p class="px-3 rounded-top py-2 bg-card-color fs-15 fw-medium para-text">
                            overflow
                          </p>
                        </li>
                        <li class="">
                          <ol class="d-flex gap-2 align-items-center flex-wrap">
                            <li class="d-flex gap-1 align-items-center">
                              <iconify-icon icon="ph:eye-thin" style="color: gray" class="fs-20"></iconify-icon>
                              <span class="fs-16 fw-medium para-text">125</span>
                            </li>
                            <li class="d-flex gap-1 align-items-center">
                              <iconify-icon icon="lucide:message-square" style="color: gray" class="fs-20"></iconify-icon>
                              <span class="fs-16 fw-medium para-text">15</span>
                            </li>
                            <li class="d-flex gap-1 align-items-center">
                              <iconify-icon icon="mdi:arrow-up-thin" style="color: gray" class="fs-20"></iconify-icon>
                              <span class="fs-16 fw-medium para-text">155</span>
                            </li>
                          </ol>
                        </li>
                      </ul> -->
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Your-Question" role="tabpanel" aria-labelledby="Your-Question-tab">
                    <div class="card mb-3 border-all rounded-1 assets/img/avatars/1.png card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <span class="fw-normal mt-1 d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span>

                    </div>
                    <div class="card mb-3 border-all rounded-1 assets/img/avatars/1.png card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <span class="fw-normal mt-1 d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span>

                    </div>
                    <div class="card mb-3 border-all rounded-1 assets/img/avatars/1.png card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <span class="fw-normal mt-1 d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span>

                    </div>
                  </div>
                  <div class="tab-pane fade show" id="student-doubt" role="tabpanel" aria-labelledby="whats-new-tab">
                    <div class="card mb-3 border-all rounded-1 assets/img/avatars/1.png card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">Quantitative Aptitude | 5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">Solve?</p>
                      <img src="assets\img\5fcbc207aaf756d267e1689e_1703764764.jpeg" class="w-50 img-fluid mt-2" alt="" />
                      <hr />
                      <ul class="mt-3 flex-wrap gap-3 d-flex justify-content-between align-items-center">
                        <li class="d-flex gap-2">
                          <button type="button" onclick="ans2()" class="btn">
                            <iconify-icon icon="ph:eye"></iconify-icon><span class="ms-2">2 Answers</span>
                          </button>
                        </li>
                        <li class="">
                          <button type="button" onclick="ans1()" id="answer-now" class="btn btn-dark">
                            Answer Now
                          </button>
                        </li>
                      </ul>
                      <div id="ans1" class="my-4" style="display: none">
                        <textarea placeholder="Provide you answer here..." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <ul class="mt-3 flex-wrap gap-3 d-flex justify-content-between align-items-center">
                          <li class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-dark">
                              Add Image
                            </button>
                          </li>
                          <li class="">
                            <button type="button" onclick="cancel()" id="cancel-answer" class="btn btn-outline-dark">
                              Cancel
                            </button>
                            <button type="button" class="btn btn-dark">
                              Post Answer
                            </button>
                          </li>
                        </ul>
                      </div>
                      <div id="ans2" class="mt-4" style="display: none">
                        <b class="fw-medium d-block fs-20 heading-text">Answers</b>
                        <hr />
                        <ul class="d-flex gap-2 align-items-start my-4">
                          <li>
                            <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                          </li>
                          <li>
                            <span class="fs-14 fw-normal para-text">Golanginya | 5 min ago</span>
                            <b class="fw-medium d-block fs-16 heading-text">Answer is A</b>
                          </li>
                        </ul>
                        <ul class="d-flex gap-2 align-items-start my-4">
                          <li>
                            <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                          </li>
                          <li>
                            <span class="fs-14 fw-normal para-text">Golanginya | 5 min ago</span>
                            <img src="assets\img\5fcbc207aaf756d267e1689e_1703764764.jpeg" class="fw-medium d-block img-fluid" alt="" style="width: 200px" />
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card mb-3 border-all rounded-1 assets/img/avatars/1.png card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">Quantitative Aptitude | 5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">
                        Solve 2*2+7?
                      </p>
                      <hr />
                      <ul class="mt-3 flex-wrap gap-3 d-flex justify-content-between align-items-center">
                        <li class="d-flex gap-2">
                          <button type="button" onclick="ans2()" class="btn">
                            <iconify-icon icon="ph:eye"></iconify-icon><span class="ms-2">2 Answers</span>
                          </button>
                        </li>
                        <li class="">
                          <button type="button" onclick="ans1()" id="answer-now" class="btn btn-dark">
                            Answer Now
                          </button>
                        </li>
                      </ul>
                      <div id="ans1" class="my-4" style="display: none">
                        <textarea placeholder="Provide you answer here..." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <ul class="mt-3 flex-wrap gap-3 d-flex justify-content-between align-items-center">
                          <li class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-dark">
                              Add Image
                            </button>
                          </li>
                          <li class="">
                            <button type="button" onclick="cancel()" id="cancel-answer" class="btn btn-outline-dark">
                              Cancel
                            </button>
                            <button type="button" class="btn btn-dark">
                              Post Answer
                            </button>
                          </li>
                        </ul>
                      </div>
                      <div id="ans2" class="mt-4" style="display: none">
                        <b class="fw-medium d-block fs-20 heading-text">Answers</b>
                        <hr />
                        <ul class="d-flex gap-2 align-items-start my-4">
                          <li>
                            <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                          </li>
                          <li>
                            <span class="fs-14 fw-normal para-text">Golanginya | 5 min ago</span>
                            <b class="fw-medium d-block fs-16 heading-text">Answer is A</b>
                          </li>
                        </ul>
                        <ul class="d-flex gap-2 align-items-start my-4">
                          <li>
                            <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                          </li>
                          <li>
                            <span class="fs-14 fw-normal para-text">Golanginya | 5 min ago</span>
                            <img src="assets\img\5fcbc207aaf756d267e1689e_1703764764.jpeg" class="fw-medium d-block img-fluid" alt="" style="width: 200px" />
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card mb-3 border-all rounded-1 assets/img/avatars/1.png card-body">
                      <ul class="d-flex gap-2 align-items-start">
                        <li>
                          <img src="assets/img/avatars/1.png" class="w-30 rounded-circle img-fluid" alt="" />
                        </li>
                        <li>
                          <b class="fw-medium d-block fs-16 heading-text">Golanginya</b>
                          <span class="fs-14 fw-normal para-text">5 min ago</span>
                        </li>
                      </ul>
                      <p class="heading-text fs-16 fw-semibold mt-2">
                        How to patch KDE on FreeBSD?
                      </p>
                      <span class="fw-normal mt-1 d-block secondary-font heading-text fs-15">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae fugit maxime molestias temporibus
                        impedit repellat deleniti, voluptate quasi repellendus
                        ratione?</span>
                      <!-- <ul class="mt-3 flex-wrap gap-3 d-flex justify-content-between align-items-center">
                        <li class="">
                          <ol class="d-flex gap-2 align-items-center flex-wrap">
                            <li class="d-flex gap-1 align-items-center">
                              <iconify-icon icon="ph:eye-thin" style="color: gray" class="fs-20"></iconify-icon>
                              <span class="fs-16 fw-medium para-text">125</span>
                            </li>
                            <li class="d-flex gap-1 align-items-center">
                              <iconify-icon icon="lucide:message-square" style="color: gray" class="fs-20"></iconify-icon>
                              <span class="fs-16 fw-medium para-text">15</span>
                            </li>
                            <li class="d-flex gap-1 align-items-center">
                              <iconify-icon icon="mdi:arrow-up-thin" style="color: gray" class="fs-20"></iconify-icon>
                              <span class="fs-16 fw-medium para-text">155</span>
                            </li>
                          </ol>
                        </li>
                      </ul> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 px-sm-3 px-1">
      <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3">
          <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt="" /></a>
        </div>
        <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3">
          <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt="" /></a>
        </div>
        <div class="col-lg-12 col-md-4 col-sm-6 col-12 mt-lg-0 mt-3">
          <a href="#"><img src="assets/img/New/image 34.png" class="img-fluid" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade bd-example-modal-lg" id="Question-table" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-xl">
      <div class="modal-content">
        <div class="table-responsive">
          <table class="table">
            <thead class="">
              <tr>
                <th scope="col" class="col-1">Sr.No</th>
                <th scope="col" class="col-4">Question title</th>
                <th scope="col" class="col-1">Excellent</th>
                <th scope="col" class="col-1">Very good</th>
                <th scope="col" class="col-1">Satisfied</th>
                <th scope="col" class="col-1">Poor</th>
                <th scope="col" class="col-1">Very poor</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-card-color">
                <td>1</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, voluptatum!</td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault01" />
                  </div>
                </td>
              </tr>
              <tr class="">
                <td>1</td>
                <td>Question</td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault02" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault02" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault02" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault02" />
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault02" />
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

<!-- Ask Questions -->
<div class="modal fade" id="askQuestions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-20 fw-semibold heading-text" id="exampleModalLabel">
          Ask Question
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" autocomplete="off">
          <div class="container p-0">
            <div class="row">
              <div class="col-12 mb-3">
                <input type="text" name="" required class="form-control" placeholder="Write Your Question" id="" />
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" required aria-label="Default select example">
                  <option class="fw-medium fs-16 heading-text" selected>
                    Select Exam
                  </option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Section</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Subsection</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Topic</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Exam</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12">
                <button type="submit" class="px-3 py-2 text-center fs-18 border-0 rounded-2 text-white d-block w-100 bg-text-color">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Ask Questions -->


<!-- Ask Questions -->
<div class="modal fade" id="askQuestions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-20 fw-semibold heading-text" id="exampleModalLabel">
          Ask Question
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" autocomplete="off">
          <div class="container p-0">
            <div class="row">
              <div class="col-12 mb-3">
                <input type="text" name="" required class="form-control" placeholder="Write Your Question" id="" />
              </div>

              <div class="col-12 mb-3">
                <select class="form-select" required aria-label="Default select example">
                  <option class="fw-medium fs-16 heading-text" selected>
                    Select Exam
                  </option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Section</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Subsection</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Topic</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Exam</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12">
                <button type="submit" class="px-3 py-2 text-center fs-18 border-0 rounded-2 text-white d-block w-100 bg-text-color">
                  Send
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Ask Questions -->



<script>
  function ans1() {
    var div1 = document.getElementById("ans1");
    div1.style.display = "block";
    var div2 = document.getElementById("answer-now");
    div2.style.display = "none";
  }

  function cancel() {
    var div1 = document.getElementById("ans1");
    div1.style.display = "none";
    var div2 = document.getElementById("answer-now");
    div2.style.display = "block";
  }

  function ans2() {
    var div = document.getElementById("ans2");
    div.style.display = div.style.display === "none" ? "block" : "none";
  }
</script>