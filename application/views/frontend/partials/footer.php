<!-- ====== Footer Section Start -->
<footer
    class="wow fadeInUp bg-[#090E34]"
    data-wow-delay=".15s">
    <div
        class="border-t border-[#8890A4] border-opacity-40 py-8">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/3 lg:w-1/2">
                    <div class="my-1 flex justify-start md:justify-start">
                        <p class="text-base text-gray-7">
                            Copyright 2024
                            <a
                                href="https://dinus.ac.id/"
                                rel="nofollow noopner"
                                target="_blank"
                                class="text-gray-1 hover:underline">
                                &copy; Universitas Dian Nuswantoro
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ====== Footer Section End -->

<!-- ====== Back To Top Start 
<a
    class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
    <span
        class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
</a>
Back To Top End -->

<!-- ====== All Scripts -->

<script src="<?= base_url('') ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?= base_url('') ?>assets/js/main.js"></script>
<script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

    window.document.addEventListener("scroll", onScroll);

    // Testimonial
    const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    document.querySelector('.back-to-top').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Optional: Show the button when the user scrolls down
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) { // Adjust the value as needed
            document.querySelector('.back-to-top').classList.remove('hidden');
        } else {
            document.querySelector('.back-to-top').classList.add('hidden');
        }
    });
</script>
</body>

</html>