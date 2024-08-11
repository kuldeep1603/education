
// not answered 
const clickableElements = document.querySelectorAll(".questions");
clickableElements.forEach(function (element) {
    element.addEventListener("click", function () {
        element.classList.remove("not-visited-1");
        element.classList.add("not-answered1");
    });
});



// mark for reviews 
document.addEventListener("DOMContentLoaded", function () {
    const updateButton = document.getElementById("mark-review");
    const listItems = document.querySelectorAll(".questions");

    let currentIndex = 0;

    updateButton.addEventListener("click", function () {
        // Remove the existing class from the current element
        listItems[currentIndex].classList.remove("not-visited-1");

        // Move to the next element or wrap around to the first element
        currentIndex = (currentIndex + 1) % listItems.length;

        // Add a new class to the next element
        listItems[currentIndex].classList.add("mark-for-review-1");
    });
});


// clear-response 
document.addEventListener("DOMContentLoaded", function () {
    const ClearResponse = document.getElementById("clear-response");
    const clickableElements2 = document.querySelectorAll(".questions");

    ClearResponse.addEventListener("click", function () {
        clickableElements2.forEach(function (element1) {
            element1.classList.remove("mark-for-review-1", "answered1", "not-answered1");
            element1.classList.add("not-visited-1");
        });
    });
});


// answered
document.addEventListener("DOMContentLoaded", function () {
    const SaveNext = document.getElementById("save-next");
    const listItems = document.querySelectorAll(".questions");

    let currentIndex = 0;

    SaveNext.addEventListener("click", function () {
        // Remove the existing class from the current element
        listItems[currentIndex].classList.remove("not-visited-1");

        // Move to the next element or wrap around to the first element
        currentIndex = (currentIndex + 1) % listItems.length;

        // Add a new class to the next element
        listItems[currentIndex].classList.add("answered1");
    });
});
