<!-- footer -->
    <footer class="footer-bg">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 col-12 mb-3">
                    <img src="./assets/footer-logo.png" class=" img-fluid" width="350" height="100" alt="footer-logo">
                </div>
                <div class="col-md-4 col-12">
                    <ul class="list-unstyled">
                        <li class="text-blue fw-bold pb-2 fs-5"> Quick links</li>
                        <li>Home </li>
                        <li>About</li>
                        <li>Services </li>
                        <li>Contact US </li>

                    </ul>
                </div>
                <div class="col-md-4 col-12 mb-3">
                    <h4 class=" fs-2 text-blue">Have any questions or want to discuss your project?</h4>
                    <p>We’d love to hear from you.</p>
                    <p class="">Drop us line anytime at <a href="mailto:info@icubesteel.com" class=" text-decoration-none">info@icubesteel.com</a></p>
                </div>
    </footer>

<div class="cursor-outer"></div>

    <script>
    const cursorInner = document.querySelector('.cursor-inner');
    const cursorOuter = document.querySelector('.cursor-outer');

    let mouseX = 0, mouseY = 0;
    let outerX = 0, outerY = 0;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;

        cursorInner.style.left = mouseX + 'px';
        cursorInner.style.top = mouseY + 'px';
    });

    function animateOuter() {
        outerX += (mouseX - outerX) * 0.15; // smooth follow
        outerY += (mouseY - outerY) * 0.15;

        cursorOuter.style.left = outerX + 'px';
        cursorOuter.style.top = outerY + 'px';

        requestAnimationFrame(animateOuter);
    }
    animateOuter();
</script>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <!-- GSAP script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>


    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 6,
        spaceBetween: 20,
        loop: true,
        speed: 700, // smooth slide animation speed
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: { slidesPerView: 1 },
        }
    });
</script>

<script>
    const sync = () => {
  document.documentElement.style.setProperty('--border-radius', config.radius)
  document.documentElement.style.setProperty('--border-width', config.width)
  document.documentElement.style.setProperty('--trail-size', config.size)
  document.documentElement.style.setProperty('--accent', config.accent)
  document.documentElement.dataset.explode = config.explode
}

</script>

    <!-- banner typeing script -->
     <script>
        const words = ["Manufacturing ", "Engineering "];
        let wordIndex = 0;
        let charIndex = 0;
        let currentWord = "";
        let isDeleting = false;
        const speed = 120;
        const target = document.getElementById("typed-text");

        function typeEffect() {
            currentWord = words[wordIndex];

            if (isDeleting) {
            target.textContent = currentWord.substring(0, charIndex--);
            } else {
            target.textContent = currentWord.substring(0, charIndex++);
            }

            if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            setTimeout(typeEffect, 1000); // Pause at full word
            } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(typeEffect, 300);
            } else {
            setTimeout(typeEffect, speed);
            }
        }

        document.addEventListener("DOMContentLoaded", typeEffect);
    </script>


    <!-- we sec scroll -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        const lines = gsap.utils.toArray(".line");

        lines.forEach((line, i) => {
            gsap.to(line, {
                scrollTrigger: {
                    trigger: line,
                    start: "top center+=100",
                    end: "bottom center",
                    toggleActions: "play none none reverse",
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power2.out"
            });
        });
    </script>

    <!-- header scroll -->
    <script>
        window.addEventListener("scroll", function () {
        const header = document.getElementById("mainHeader");
        if (window.scrollY > 10) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
        });

    </script>