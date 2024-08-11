<?php include('./header.php'); ?>

<style>
    .giftcontent {
        display: none;
    }
</style>
<!-- Shooping Cart -->
<section class="section pt-5 emi-dropdwon ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <h4 class="section-heading fs-24 lato-font text-start">Shopping Cart</h4>
                        <p class=" fw-medium lato-font text-start fs-14 heading-text">2 Courses in cart</p>
                    </div>
                    <div class="col-12">
                        <form action="#">
                            <div class="card card-body border-all-light mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="d-flex flex-wrap justify-content-between align-items-center">
                                            <li>
                                                <h5 class="text-start secondary-font  fs-20 my-2  fw-medium">Contact</h5>
                                            </li>
                                            <li>
                                                <!-- <p class="heading-text fs-16 fw-medium">Already have an account? <a href="#email-login" data-bs-toggle="modal" class="blue-color">Login</a></p> -->
                                            </li>
                                        </ul>
                                        <div class="mb-2">
                                            <input type="email" name="" class="form-control" placeholder="Email" id="">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked value="" id="email-me-offers">
                                            <label class="form-check-label" for="email-me-offers">
                                                Email me with news and offers
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <h5 class="text-start secondary-font  fs-20 my-3  fw-medium">Shipping Address</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Country/region*</option>
                                                    <option value="1">Bharat</option>
                                                    <option value="2">Bharat</option>
                                                    <option value="3">Bharat</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mt-4">
                                                <input type="text" name="" placeholder="First Name *" class="form-control" id="">
                                            </div>
                                            <div class="col-md-6 col-12 mt-4">
                                                <input type="text" name="" placeholder="Last Name *" class="form-control" id="">
                                            </div>
                                            <div class="col-12  mt-4">
                                                <input type="text" name="" placeholder=" Address*" class="form-control" id="">
                                            </div>
                                            <div class="col-md-4 col-12 mt-4">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>City*</option>
                                                    <option value="1">Mulund</option>
                                                    <option value="2">Mulund</option>
                                                    <option value="3">Mulund</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-12 mt-4">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>State*</option>
                                                    <option value="1">Maharashtra</option>
                                                    <option value="2">Maharashtra</option>
                                                    <option value="3">Maharashtra</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-12 mt-4">
                                                <input type="number" name="" class="form-control" placeholder="Pincode*" id="">
                                            </div>
                                            <div class="col-12  mt-4">
                                                <input type="number" name="" placeholder=" Phone Number*" class="form-control" id="">
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked value="" id="save-info">
                                                    <label class="form-check-label" for="save-info">
                                                        Save this information for next time
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="checkbox" checked value="" id="text-offers">
                                                    <label class="form-check-label" for="text-offers">
                                                        Text me with news and offers
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-body border-all-light" id="Gift-Course">
                                <ul class="d-flex gap-2 align-items-center flex-wrap">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="GiftCourse">
                                        </div>
                                    </li>
                                    <li>
                                        <iconify-icon icon="fluent-emoji-flat:wrapped-gift" class="fs-26" style="color: #86a1ae;"></iconify-icon>
                                    </li>
                                    <li>
                                        <p class="fw-semibold fs-16">Gift Course</p>
                                    </li>
                                </ul>
                                <div class="row giftcontent">
                                    <h5 class="text-start secondary-font  fs-20 my-2  fw-medium">Details</h5>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <input type="text" class="form-control" id="" placeholder="Recipient Full name*">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="email" class="form-control" id="" placeholder="Recipient Email*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <ul class="d-flex gap-2 my-2 flex-wrap align-items-center">
                                            <li>
                                                <button class="border-0 bg-body-color px-2 py-1" onclick="toggleSingleTextToTextarea('BirthDay Gift')">BirthDay Gift</button>
                                            </li>
                                            <li>
                                                <button class="border-0 bg-body-color px-2 py-1" onclick="toggleSingleTextToTextarea('Learning Purpose')">Learning Purpose</button>
                                            </li>
                                            <li>
                                                <button class="border-0 bg-body-color px-2 py-1" onclick="toggleSingleTextToTextarea('Button 3')">Button 3</button>
                                            </li>
                                        </ul>
                                        <textarea name="" id="GiftMsg" class="form-control" placeholder="Add your personal message here... " cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 right mt-lg-0 mt-4">
                <div class="row">
                    <div class="col-12 ">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-top-light mt-3">
                                <h2 class="accordion-header " id="headingOne">
                                    <button class="accordion-button border-0  px-3 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#Order-Review" aria-expanded="true" aria-controls="Order-Review">
                                        <ul>
                                            <li>
                                                <p class="fw-semibold fs-16 heading-text ">Order Review</p>
                                            </li>
                                            <li>
                                                <p class="d-block fs-14 mt-1">3 items in card</p>
                                            </li>
                                        </ul>
                                    </button>
                                </h2>
                                <div id="Order-Review" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-3 pt-0 px-3">
                                        <div class="row mb-3 border-bottom pb-3">
                                            <div class="col-3 p-sm-2 p-1">
                                                <img src="./assets/img/checkout/img (2).png" class="img-fluid w-100 " alt="">
                                            </div>
                                            <div class="col-6">
                                                <p class="fw-semibold fs-15 heading-text text-ellipsis">Search Engine Optimization </p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <a href="#"><iconify-icon icon="tabler:x" style="color: #333;"></iconify-icon></a>
                                                <del class="fs-12 text-color-3 ">$245,78</del>
                                                <p class="fw-bold fs-15 lato-font heading-text">$245,78</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3 border-bottom pb-3">
                                            <div class="col-3 p-sm-2 p-1">
                                                <img src="./assets/img/checkout/img (2).png" class="img-fluid w-100 " alt="">
                                            </div>
                                            <div class="col-6">
                                                <p class="fw-semibold fs-15 heading-text text-ellipsis">Search Engine Optimization </p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <a href="#"><iconify-icon icon="tabler:x" style="color: #333;"></iconify-icon></a>
                                                <del class="fs-12 text-color-3 ">$245,78</del>
                                                <p class="fw-bold fs-15 lato-font heading-text">$245,78</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-top-light mt-3">
                                <h2 class="accordion-header " id="headingTwo">
                                    <button class="accordion-button border-0 collapsed px-3 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#Billing-Summary" aria-expanded="false" aria-controls="Billing-Summary">
                                        <ul>
                                            <li>
                                                <p class="fw-semibold fs-17 heading-text">Billing Summary</p>
                                            </li>
                                        </ul>
                                    </button>
                                </h2>
                                <div id="Billing-Summary" class="accordion-collapse show collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-3 pt-0">
                                        <div class="card p-0 card-body  border-0">
                                            <ul class="border-bottom pb-4">
                                                <li class="d-flex justify-content-between align-items-center mt-3">
                                                    <span class=" fs-16">Taxable</span>
                                                    <p class="fw-semibold text-color-2 fs-15">₹3720,27</p>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center mt-3">
                                                    <span class=" fs-16">Tax</span>
                                                    <p class="fw-semibold text-color-2 fs-15">₹228.72</p>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center mt-3">
                                                    <span class="fw-semibold text-color-2  fs-16">Discount</span>
                                                    <p class="fw-semibold text-color-2 fs-15">-₹749.99</p>
                                                </li>
                                                <!-- <li class="d-flex justify-content-between align-items-center mt-3">
                                                    <span class=" fs-16">Shipping</span>
                                                    <p class="fw-semibold text-color-2 fs-15">₹0.00</p>
                                                </li> -->

                                            </ul>
                                            <ul class="d-flex justify-content-between align-items-center mt-3">
                                                <li>
                                                    <b class="fs-17 fw-bold heading-text">Grand Total </b>
                                                </li>
                                                <li>
                                                    <b class="fs-17 fw-bold heading-text">₹3,439.00</b>
                                                </li>
                                            </ul>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" checked type="checkbox" value="" id="acknowledge">
                                                        <label class="form-check-label fs-14 text-ellipsis" for="acknowledge">
                                                            Please check to acknowledge our <a href="#" class="blue-color fs-14">Privacy & Terms Policy</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button data-bs-target="#login-register" data-bs-toggle="modal" type="button" class="bg-primary py-2 px-4 fw-medium  rounded-2 text-white fs-18 d-block w-100 border-0">Pay Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-top-light mt-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed px-3 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#EMI-Options" aria-expanded="false" aria-controls="EMI-Options">
                                        <ul>
                                            <li>
                                                <p class="fw-semibold fs-17 heading-text">Installments Options</p>
                                            </li>
                                        </ul>
                                    </button>
                                </h2>
                                <div id="EMI-Options" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-3">
                                        <ul class="">
                                            <li class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="EMI'S" id="3-EMIs" checked>
                                                    <label class="form-check-label fw-medium" for="3-EMIs">
                                                        3 EMIs
                                                    </label>
                                                </div>
                                                <b class="fw-bold heading-text fs-16">₹12,000</b>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center mt-3 border-bottom pb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="EMI'S" id="6-EMIs">
                                                    <label class="form-check-label fw-medium" for="6-EMIs">
                                                        6 EMIs
                                                    </label>
                                                </div>
                                                <b class="fw-bold heading-text fs-16">₹8,000</b>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center mt-3 border-bottom pb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="EMI'S" id="12-EMIs">
                                                    <label class="form-check-label fw-medium" for="12-EMIs">
                                                        12 EMIs
                                                    </label>
                                                </div>
                                                <b class="fw-bold heading-text fs-16">₹4,000</b>
                                            </li>
                                        </ul>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-bordered">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" class="fw-semibold tertiary-font fs-14">Installments</th>
                                                        <th scope="col" class="fw-semibold tertiary-font fs-14">Amount</th>
                                                        <th scope="col" class="fw-semibold tertiary-font fs-14">Due Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-medium fs-15">First</td>
                                                        <td class="fs-15"> ₹ 8,000</td>
                                                        <td class="fs-15">12/03/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium fs-15">Second</td>
                                                        <td class="fs-15"> ₹ 8,000</td>
                                                        <td class="fs-15">12/03/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium fs-15">Third</td>
                                                        <td class="fs-15"> ₹ 8,000</td>
                                                        <td class="fs-15">12/03/2019</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" checked type="checkbox" value="" id="acknowledge">
                                                    <label class="form-check-label fs-14 text-ellipsis" for="acknowledge">
                                                        Please check to acknowledge our <a href="#" class="blue-color fs-14">Privacy & Terms Policy</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button data-bs-target="#gifting-course" data-bs-toggle="modal" type="button" class="bg-primary py-2 px-4 fw-medium  rounded-2 text-white fs-18 d-block w-100 border-0">Pay Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 mt-3">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shooping Cart -->

<?php include('./footer.php'); ?>

<!-- Thank you popup / modal -->
<div class="modal fade" id="gifting-course" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content py-4">
            <div class="modal-body ">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-12 text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-8 col-sm-10 col-12">
                            <img src="./assets/img/Gift-popup.gif" class="img-fluid" alt="">
                            <p class="fw-medium mt-2 fs-17 secondary-font text-capitalize text-center">Thank you for generously gifting a course to your friends</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Thank you popup / modal -->


<script>
    function toggleSingleTextToTextarea(buttonValue) {
        // Get the textarea element
        var textarea = document.getElementById("GiftMsg");

        // Remove any existing button values from the textarea
        var buttons = document.getElementsByTagName("button");
        for (var i = 0; i < buttons.length; i++) {
            var currentButtonValue = buttons[i].innerText;
            textarea.value = textarea.value.replace(currentButtonValue + ' ', '');
        }

        // Add the clicked button value to the textarea
        textarea.value += buttonValue + ' ';
    }

    document.addEventListener("DOMContentLoaded", function() {
        var checkbox = document.getElementById("GiftCourse");
        var giftContent = document.querySelector('.giftcontent');

        checkbox.addEventListener("click", function() {
            if (checkbox.checked) {
                giftContent.style.display = 'block';
            } else {
                giftContent.style.display = 'none';
            }
        });
    });
</script>