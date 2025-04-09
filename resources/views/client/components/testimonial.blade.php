<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Apa kata mereka?</h2>

        <!-- Carousel -->
        <div class="relative">
            <div id="carousel" class="flex overflow-x-auto no-scrollbar scroll-smooth space-x-6 snap-x snap-mandatory">
                <!-- Testimonial Cards -->
                <div class="testimonial-card snap-center">
                    <div class="min-w-[280px] max-w-sm bg-white border rounded-2xl p-6 flex-shrink-0">
                        <div class="text-4xl text-[#129c56] mb-3">“</div>
                        <p class="text-gray-800 font-medium mb-6">
                            Tempat penitipan barang terpercaya sih, pelayananya bagus dan adminnya ramah
                        </p>
                        <div>
                            <p class="font-semibold">Altamis</p>
                            <p class="text-sm text-gray-500">Penitipan Barang</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card snap-center">
                    <div class="min-w-[280px] max-w-sm bg-white border rounded-2xl p-6 flex-shrink-0">
                        <div class="text-4xl text-[#129c56] mb-3">“</div>
                        <p class="text-gray-800 font-medium mb-6">
                            Layanan cepat dan aman, sangat membantu saat butuh tempat penyimpanan sementara.
                        </p>
                        <div>
                            <p class="font-semibold">Sinta</p>
                            <p class="text-sm text-gray-500">Customer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card snap-center">
                    <div class="min-w-[280px] max-w-sm bg-white border rounded-2xl p-6 flex-shrink-0">
                        <div class="text-4xl text-[#129c56] mb-3">“</div>
                        <p class="text-gray-800 font-medium mb-6">
                            Harga terjangkau, lokasi strategis, pokoknya recommended banget deh!
                        </p>
                        <div>
                            <p class="font-semibold">Budi</p>
                            <p class="text-sm text-gray-500">Pengguna Setia</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card snap-center">
                    <div class="min-w-[280px] max-w-sm bg-white border rounded-2xl p-6 flex-shrink-0">
                        <div class="text-4xl text-[#129c56] mb-3">“</div>
                        <p class="text-gray-800 font-medium mb-6">
                            Harga terjangkau, lokasi strategis, pokoknya recommended banget deh!
                        </p>
                        <div>
                            <p class="font-semibold">Budi</p>
                            <p class="text-sm text-gray-500">Pengguna Setia</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card snap-center">
                    <div class="min-w-[280px] max-w-sm bg-white border rounded-2xl p-6 flex-shrink-0">
                        <div class="text-4xl text-[#129c56] mb-3">“</div>
                        <p class="text-gray-800 font-medium mb-6">
                            Harga terjangkau, lokasi strategis, pokoknya recommended banget deh!
                        </p>
                        <div>
                            <p class="font-semibold">Budi</p>
                            <p class="text-sm text-gray-500">Pengguna Setia</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="absolute -bottom-10 right-0 flex space-x-4">
                <button onclick="scrollCarousel(-1)" class="bg-gray-100 hover:bg-gray-200 p-2 rounded-full shadow-md">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button onclick="scrollCarousel(1)" class="bg-gray-100 hover:bg-gray-200 p-2 rounded-full shadow-md">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .testimonial-card {
        transition: transform 0.3s ease;
    }

    .testimonial-card.active {
        transform: scale(1.05);
    }

    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    const carousel = document.getElementById("carousel");
    const cards = carousel.querySelectorAll(".testimonial-card");
    let currentIndex = 0;

    function scrollCarousel(direction) {
        const cardWidth = cards[0].offsetWidth + 24; // 24 = space-x-6
        currentIndex += direction;

        if (currentIndex < 0) currentIndex = 0;
        if (currentIndex >= cards.length) currentIndex = cards.length - 1;

        carousel.scrollTo({
            left: currentIndex * cardWidth - carousel.offsetWidth / 2 + cardWidth / 2,
            behavior: "smooth",
        });

        updateActiveCard();
    }

    function updateActiveCard() {
        cards.forEach((card, i) => {
            if (i === currentIndex) {
                card.classList.add("active");
            } else {
                card.classList.remove("active");
            }
        });
    }

    // Set active card on load
    window.addEventListener("load", () => {
        scrollCarousel(0);
    });
</script>