const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slide-dot');
        let slideIndex = 1;

        showSlides();

        function showSlides() {
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.opacity = '0';
                dots[i].classList.remove('active');
            }
            slides[slideIndex - 1].style.opacity = '1';
            dots[slideIndex - 1].classList.add('active');
            slideIndex++;
            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }