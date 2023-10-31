document.addEventListener("DOMContentLoaded", function () {
    var showMoreButton = document.querySelectorAll(".carousel-card-bottom");
    var slides = document.querySelectorAll(".carousel-slide");
    var currentIndex = 0;
    var timer;

    function showSlide(index) {
        slides.forEach(function (slide, i) {
            if (i === index) {
                slide.style.display = "flex";
            } else {
                slide.style.display = "none";
            }
        });
    }

    function previousSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function startCarousel() {
        timer = setInterval(nextSlide, 5000);
    }

    function stopCarousel() {
        clearInterval(timer);
    } 

    showMoreButton.forEach(function (slide) {
        slide.addEventListener("mouseenter", stopCarousel);
        slide.addEventListener("mouseleave", startCarousel);
    });

    startCarousel();
    showSlide(currentIndex);

    // Peut-etre pour plus tard
    // var prevButton = document.querySelectorAll(".left");
    // var nextButton = document.querySelectorAll(".right");

    // prevButton.forEach(function (button) {
    //     button.addEventListener("click", previousSlide);
    // });
    // nextButton.forEach(function (button) {
    //     button.addEventListener("click", nextSlide);
    // });
});