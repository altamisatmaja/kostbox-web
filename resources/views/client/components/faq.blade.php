<style>
    /* Tambahkan ini di head atau dalam file CSS terpisah */
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        opacity: 0;
    }
    
    .faq-answer.open {
        max-height: 500px; /* Sesuaikan dengan tinggi maksimum konten Anda */
        opacity: 1;
        transition: max-height 0.5s ease-in, opacity 0.3s ease-in;
    }
    
    .toggle-icon {
        transition: transform 0.3s ease;
    }
    
    .toggle-icon.rotate {
        transform: rotate(180deg);
    }
</style>
<!-- component -->
<div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
    <h1 class="text-center  lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">
        FAQ's</h1>

    <div
        class="lg:mt-12 bg-gray-100 dark:bg-gray-800 md:mt-10 mt-8 lg:py-7 lg:px-6 md:p-6 py-6 px-4 lg:w-8/12 w-full mx-auto">
        <div class="flex justify-between md:flex-row flex-col">
            <div class="md:mb-0 mb-8 md:text-left text-center">
                <h2 class="font-medium  text-xl leading-5 text-gray-800 lg:mb-2 mb-4">Questions</h2>
                <p
                    class="font-normal dark:text-gray-300 text-sm leading-5 text-gray-600 md:w-8/12 md:ml-0 w-11/12 mx-auto">
                    If you don’t find your answer, Please contact us or Leave a Message, we’ll be more than happy to
                    assist you.</p>
            </div>

            <div class="flex justify-center items-center">
                <div
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 flex bg-white md:justify-center justify-between items-center px-4 py-3 w-full">
                    <input class="focus:outline-none bg-white" type="text" placeholder="Search" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg1.svg" alt="search">
                </div>
            </div>
        </div>
    </div>
    <div class="lg:w-8/12 w-full mx-auto">
        <!-- Question 1 -->
        <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p
                        class="flex justify-center items-center  font-medium text-base leading-6 md:leading-4 text-gray-800">
                        <span
                            class="lg:mr-6 mr-4  lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span>
                        How do i know if a product is available in boutiques?</p>
                </div>
                <button aria-label="toggler"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the
                    status of your orders any time in My orders in the My account section. if you are not resigered at
                    Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your
                    e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 2 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p
                        class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                        <span
                            class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q2.</span>
                        How can i find the prices or get other information about chanel products?</p>
                </div>
                <button aria-label="toggler"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the
                    status of your orders any time in My orders in the My account section. if you are not resigered at
                    Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your
                    e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 3 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p
                        class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                        <span
                            class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q3.</span>How
                        many collections come out every year?</p>
                </div>
                <button aria-label="toggler"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the
                    status of your orders any time in My orders in the My account section. if you are not resigered at
                    Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your
                    e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 4 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p
                        class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                        <span
                            class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q4.</span>Are
                        all of the fashion collections features on the website?</p>
                </div>
                <button aria-label="toggler"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the
                    status of your orders any time in My orders in the My account section. if you are not resigered at
                    Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your
                    e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 5 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p
                        class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                        <span
                            class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q5.</span>Where
                        do i find products that i have seen in magazines or Social Media?</p>
                </div>
                <button aria-label="toggler"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden "
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the
                    status of your orders any time in My orders in the My account section. if you are not resigered at
                    Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your
                    e-mail address and order number.</p>
            </div>
        </div>

        <hr class="w-full lg:mt-10 my-8" />
    </div>
</div>

<script>
    let elements = document.querySelectorAll("[data-menu]");
    for (let i = 0; i < elements.length; i++) {
        let main = elements[i];

        main.addEventListener("click", function () {
            let element = main.parentElement.parentElement;
            let indicators = main.querySelectorAll("img");
            let child = element.querySelector("#menu");
            let h = element.querySelector("#mainHeading>div>p");

            child.classList.toggle("hidden");
            // console.log(indicators[0]);
            indicators[0].classList.toggle("rotate-180");
        });
    }
</script>