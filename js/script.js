let slideIndex = 0;

function moveSlide(n) {
    const slides = document.getElementsByClassName("deroulante")[0];
    const images = slides.getElementsByTagName("img");
    slideIndex += n;

    if (slideIndex >= images.length) {
        slideIndex = 0;
    }

    if (slideIndex < 0) {
        slideIndex = images.length - 1;
    }

    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
}