<header class="bg-white sticky top-0 z-50">
    <nav x-data="{ isOpen: false }"
        class="container mx-auto px-6 py-4 lg:flex lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset('/client/icons/kostbox-icon.png') }}" class="h-7 mr-2" alt="">
                <p class="uppercase font-bold text-lg">Kostbox.id</p>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none"
                    aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak :class="{'block': isOpen, 'hidden': !isOpen}"
            class="lg:flex absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md lg:relative lg:top-0 lg:mt-0 lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none hidden"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-x-full"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 -translate-x-full"
            class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none">
            <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
                <a class="text-black hover:text-blue-500 lg:mx-6" href="#">Layanan</a>
                <a class="text-black hover:text-blue-500 lg:mx-6" href="#">Tentang</a>
                <a class="text-black hover:text-blue-500 lg:mx-6" href="#">S&K</a>
            </div>
            <a class="mt-4 block h-10 transform rounded-md bg-gray border px-5 py-2 text-center text-sm capitalize text-gray-700 transition-colors duration-300 hover:bg-gray-100 lg:mt-0 lg:ml-4 lg:w-auto"
                href="#">Pesan Sekarang</a>
        </div>
    </nav>
</header>