// testimonails
// var swiper = new Swiper(".testimonial", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     loop: true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//     },
//     breakpoints: {
//         300: {
//             slidesPerView: 1,
//             spaceBetween: 20,
//         },
//         540: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         768: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         1024: {
//             slidesPerView: 3,
//             spaceBetween: 30,
//         },
//         1200: {
//             slidesPerView: 3,
//             spaceBetween: 30,
//         },
//         1400: {
//             slidesPerView: 3,
//             spaceBetween: 30,
//         }
//     },
// });
// testimonails

// Watch-Video
var swiper = new Swiper(".WatchVideo", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "3",
    spaceBetween: 80,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        540: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 80,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 80,
        }
    },
    coverflowEffect: {
        rotate: 10,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

// Watch-Video

// wallofframe
var swiper = new Swiper(".wallofframe1", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 0,
        pauseOnMouseEnter: true,        // added
        disableOnInteraction: false,
    },
    speed: 3000,
    breakpoints: {
        200: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        540: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 7,
            spaceBetween: 30,
        }
    },
});
// wallofframe 

// CoursesCategories
$('.owl-carousel2').owlCarousel({
    loop: true,
    margin: 10,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        350: {
            items: 2
        },
        500: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
})
// CoursesCategories

// active class 
const listItems = document.querySelectorAll(".category-active");
listItems.forEach(item => {
    item.addEventListener("click", function () {
        listItems.forEach(item => {
            item.classList.remove("blue-card");
        });
        this.classList.add("blue-card");
    });
});
// active class 

// banner 
var swiper = new Swiper(".main-banner", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
// banner


// opt handle 
const inputs = document.getElementById("inputs");
inputs.addEventListener("input", function (e) {
    const target = e.target;
    const val = target.value;

    if (isNaN(val)) {
        target.value = "";
        return;
    }

    if (val != "") {
        const next = target.nextElementSibling;
        if (next) {
            next.focus();
        }
    }
});

inputs.addEventListener("keyup", function (e) {
    const target = e.target;
    const key = e.key.toLowerCase();

    if (key == "backspace" || key == "delete") {
        target.value = "";
        const prev = target.previousElementSibling;
        if (prev) {
            prev.focus();
        }
        return;
    }
});
// otp handle 

// active class 
const listItems1 = document.querySelectorAll(".course-tabs");
listItems1.forEach(item => {
    item.addEventListener("click", function () {
        listItems1.forEach(item => {
            item.classList.remove("course-details-tabs");
        });
        this.classList.add("course-details-tabs");
    });
});

// blogcard
const blogcard = document.querySelectorAll(".blogcard");
blogcard.forEach(item => {
    item.addEventListener("click", function () {
        blogcard.forEach(item => {
            item.classList.remove("blogcardbg");
        });
        this.classList.add("blogcardbg");
    });
});
// blogcard
// active class 

// result-video
$('.result-video').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        400: {
            items: 1
        },
        450: {
            items: 2
        },
        600: {
            items: 2
        },
        800: {
            items: 3
        },
        1000: {
            items: 4
        },
        1200: {
            items: 5
        },
    }

});
// result-video

// Results 
$('.Results').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    // autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        },
        1200: {
            items: 7
        }
    }
})
// Results 

// Result testimonial
var swiper = new Swiper(".testimonial", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        540: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
        }
    },
});
// Result testimonial

// Read-More-Btn
const readMoreButtons = document.querySelectorAll(".read-more-button");
readMoreButtons.forEach(button => {
    button.addEventListener('click', () => {
        const textElement = button.previousElementSibling;

        if (textElement.style.height === "100%") {
            textElement.style.height = "115px";
            button.textContent = "Read More";
        } else {
            textElement.style.height = "100%";
            button.textContent = "Read less";
        }
    });
});
// Read-More-Btn    

// events 
// testimonails
var swiper = new Swiper(".events-list", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        540: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 20,
        }
    },
});
// testimonails
// events 

// exam notifications 
const ExamNotificationsReadMoreButtons = document.querySelectorAll(".exam-notifications-read-more");
ExamNotificationsReadMoreButtons.forEach(button => {
    button.addEventListener('click', () => {
        const ExamNotificationsReadMoreText = button.parentElement.querySelector(".exam-notifications-read-more-text");

        if (ExamNotificationsReadMoreText.style.height === "100%") {
            ExamNotificationsReadMoreText.style.height = "45px";
            button.textContent = "Read More";
        } else {
            ExamNotificationsReadMoreText.style.height = "100%";
            button.textContent = "Read Less";
        }
    });
});

$('.exam-notifications-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        },
        1200: {
            items: 5
        }
    }
})
// exam notifications 

// result testimonails tabs 
function openTab(tabId) {
    // Get all elements with class "tab-content" and hide them
    var tabContents = document.getElementsByClassName('tab-content');
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove('active');
    }

    // Show the selected tab content
    var selectedTab = document.getElementById(tabId);
    selectedTab.classList.add('active');
}

// active class 
const Result_Testimonails_Tabs = document.querySelectorAll(".result-testimonails-tabs");
Result_Testimonails_Tabs.forEach(item => {
    item.addEventListener("click", function () {
        Result_Testimonails_Tabs.forEach(item => {
            item.classList.remove("result-tabs");
        });
        this.classList.add("result-tabs");
    });
});
// active class
// result testimonails tabs 


// show more cards 
document.addEventListener('DOMContentLoaded', function () {
    var showMoreButtons = document.querySelectorAll('.show-more-button');

    showMoreButtons.forEach(function (button) {
        var targetId = button.getAttribute('data-target');
        var cards = document.querySelectorAll('#' + targetId + ' .result-card');
        var currentIndex = 0;
        var cardsToShow = 3;

        // Show the first set of cards
        showNextCards();

        // Add a click event listener to the button
        button.addEventListener('click', function () {
            showNextCards();
        });

        // Function to show the next set of cards
        function showNextCards() {
            for (var i = currentIndex; i < currentIndex + cardsToShow; i++) {
                if (cards[i]) {
                    cards[i].classList.add('visible');
                }
            }

            currentIndex += cardsToShow;

            // If there are no more cards to show, hide the button
            if (currentIndex >= cards.length || cards.length <= cardsToShow) {
                button.style.display = 'none';
            }
        }
    });
});

// password toggle 
// function togglePasswordVisibility() {
//     var passwordInput = document.getElementById('password');
//     var toggleBtn = document.querySelector('.toggle-password');

//     if (passwordInput.type === 'password') {
//         passwordInput.type = 'text';
//         toggleBtn.innerHTML = '<i class="fa fa-eye"></i>';
//     } else {
//         passwordInput.type = 'password';
//         toggleBtn.innerHTML = '<i class="fa fa-eye-slash"></i>';
//     }
// }
// password toggle
function togglePasswordVisibility(toggleSpan) {
    var passwordInput = toggleSpan.previousElementSibling;
    var toggleIcon = toggleSpan.querySelector('i');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
        passwordInput.style.fontFamily = 'Arial, sans-serif'; // Change font to default
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
        passwordInput.style.fontFamily = 'starsFont, Arial, sans-serif'; // Set font to stars font
    }
}

// rating active class 
const rating = document.querySelectorAll(".rating-active");
rating.forEach(item => {
    item.addEventListener("click", function () {
        rating.forEach(item => {
            item.classList.remove("rating-active-class");
        });
        this.classList.add("rating-active-class");
    });
});
// active class 


// active class 
const courseDetails = document.querySelectorAll(".courseDetails");
courseDetails.forEach(item => {
    item.addEventListener("click", function () {
        courseDetails.forEach(item => {
            item.classList.remove("course-details-active");
        });
        this.classList.add("course-details-active");
    });
});
// active class 

function copyToClipboard() {
    // Select the text field
    var copyText = document.getElementById("myInput");
    copyText.select();

    // Execute the copy command
    document.execCommand("copy");

    // Deselect the text field
    copyText.setSelectionRange(0, 0);
}

// input field number 
document.addEventListener('DOMContentLoaded', function () {
    const inputElements = document.querySelectorAll('.numberInput');

    inputElements.forEach(function (inputElement) {
        inputElement.addEventListener('input', function () {
            const inputValue = inputElement.value;

            // Trim the input value to ensure it does not exceed 10 characters
            if (inputValue.length > 10) {
                inputElement.value = inputValue.slice(0, 10);
                alert("Only 10 Digits are allowed");
            }
        });
    });
});


// ForgetInputs
// opt handle 
const ForgetInputs = document.getElementById("ForgetInputs");
ForgetInputs.addEventListener("input", function (e) {
    const target = e.target;
    const val = target.value;

    if (isNaN(val)) {
        target.value = "";
        return;
    }

    if (val != "") {
        const next = target.nextElementSibling;
        if (next) {
            next.focus();
        }
    }
});

ForgetInputs.addEventListener("keyup", function (e) {
    const target = e.target;
    const key = e.key.toLowerCase();

    if (key == "backspace" || key == "delete") {
        target.value = "";
        const prev = target.previousElementSibling;
        if (prev) {
            prev.focus();
        }
        return;
    }
});
// otp handle
// ForgetInputs

// phone-login-otp
// opt handle 
const phonelogin = document.getElementById("phonelogin");
phonelogin.addEventListener("input", function (e) {
    const target = e.target;
    const val = target.value;

    if (isNaN(val)) {
        target.value = "";
        return;
    }

    if (val != "") {
        const next = target.nextElementSibling;
        if (next) {
            next.focus();
        }
    }
});

phonelogin.addEventListener("keyup", function (e) {
    const target = e.target;
    const key = e.key.toLowerCase();

    if (key == "backspace" || key == "delete") {
        target.value = "";
        const prev = target.previousElementSibling;
        if (prev) {
            prev.focus();
        }
        return;
    }
});
// otp handle
// phone-login-otp


