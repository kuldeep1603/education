<?php include 'header.php'; ?>

<div class="mocktest">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Exam Instruction</h5>
                            <p class="text-end fw-medium">
                                Please Read All The Instructions Carefully
                            </p>
                            <p class="card-text">
                            <ol class="list-group list-group-numbered">
                                <li class="">Total duration of examination is 180 minutes.</li>
                                <li class="">The clock will be set at the server. The countdown timer in the top right corner of
                                    screen will display the remaining time available for you to complete the examination. When
                                    the timer reaches zero, the examination will end by itself. You will not be required to end
                                    or submit your examination.</li>
                                <li class="">The Question Palette displayed on the right side of screen will show the status of
                                    each question using one of the following symbols:
                                    <ol>
                                        <li>You have not visited the question yet.</li>
                                        <li>You have not answered the question.</li>
                                        <li>You have answered the question.</li>
                                        <li>You have NOT answered the question, but have marked the question for review.</li>
                                    </ol>
                                <li>
                                    The question(s) "Answered and Marked for Review" will be considered for evaluation. The
                                    Marked for Review status for a question simply indicates that you would like to look at that
                                    question again.
                                </li>
                                <li class="">You have NOT answered the question, but have marked the question for review.</li>
                                <li class="">You have NOT answered the question, but have marked the question for review.</li>
                                <li class="">You have NOT answered the question, but have marked the question for review.</li>
                            </ol>
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myCheckbox">
                                <label class="form-check-label" for="myCheckbox">
                                    I Have Read All Instructions
                                </label>
                            </div>
                            <div class="text-center">
                                <button href="mcq.php" id="myButton" disabled class="btn btn-primary mt-4">Start Test</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    var checkbox = document.getElementById('myCheckbox');
    var button = document.getElementById('myButton');

    // Add an event listener to the checkbox
    checkbox.addEventListener('change', function() {
        // Enable or disable the button based on the checkbox state
        button.disabled = !checkbox.checked;
    });
    myButton.addEventListener("click", () => {
        window.location.href = 'http://localhost/acceron/MANOEUVRE/student-admin/mano_mocktest/mcq.php';
    })
</script>



<script>
    var checkbox = document.getElementById('myCheckbox');
    var button = document.getElementById('myButton');

    // Add an event listener to the checkbox
    checkbox.addEventListener('change', function() {
        // Enable or disable the button based on the checkbox state
        button.disabled = !checkbox.checked;
    });
    myButton.addEventListener("click", () => {
        window.location.href = 'http://localhost/acceron/MANOEUVRE/student-admin/mano_mocktest/mcq.php';
    })
</script>