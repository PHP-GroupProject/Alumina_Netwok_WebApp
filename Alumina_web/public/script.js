document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    const nextButton = document.querySelector('.next-slide');
    const prevButton = document.querySelector('.prev-slide');
    const progressDots = document.querySelectorAll('.progress-dot');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        progressDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }

    nextButton.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    prevButton.addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    progressDots.forEach(dot => {
        dot.addEventListener('click', function () {
            currentIndex = parseInt(this.getAttribute('data-index'));
            showSlide(currentIndex);
        });
    });

    // Initialize the first slide
    showSlide(currentIndex);
});
