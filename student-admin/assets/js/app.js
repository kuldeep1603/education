// active class 
const listItems1 = document.querySelectorAll(".admin1active");
listItems1.forEach(item => {
    item.addEventListener("click", function () {
        listItems1.forEach(item => {
            item.classList.remove("sessionsactive");
        });
        this.classList.add("sessionsactive");
    });
});
// active class 



// quiz 
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


// quiz
const quizoptions = document.querySelectorAll('.quizoption');
const quizcards = document.querySelectorAll('.quizcard');

quizoptions.forEach((option, index) => {
    option.addEventListener('change', () => {
        if (option.checked) {
            quizcards.forEach((card) => {
                card.style.backgroundColor = '#fff';
                // quizcards[index].style.border = "1px solid rgba(0, 0, 0, 0.4)";
            });

            quizcards[index].style.backgroundColor = '#F2F8E7';
            // quizcards[index].style.border = "0px";
        }
    });
});

// quiz


$(document).ready(function () {
    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function () {
        readURL(this);
    });

    $(".upload-button").on('click', function () {
        $(".file-upload").click();
    });
});

// month filter 


// show-More-Btn
const button = document.getElementById("show-more");
const courseDetailsContent = document.querySelector('.course-details-content');

button.addEventListener('click', () => {
    if (courseDetailsContent.style.maxHeight === "100px") {
        courseDetailsContent.style.maxHeight = "100%";
        button.textContent = "Show Less";
    } else {
        courseDetailsContent.style.maxHeight = "100px";
        button.textContent = "Show More";
    }
});


// sidebar active class 
// active class 
const sidebarmenu = document.querySelectorAll(".sidebarmenu");
sidebarmenu.forEach(item => {
    item.addEventListener("click", function () {
        sidebarmenu.forEach(item => {
            item.classList.remove("active");
        });
        this.classList.add("active");
    });
});
// active class
// sidebar active class 
