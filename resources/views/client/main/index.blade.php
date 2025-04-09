<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kostbox</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
</head>

<body>
    <main>
        <header class="bg-white sticky top-0 z-50">
            <nav x-data="{ isOpen: false }" class="container mx-auto px-6 py-4 lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="{{ asset('/client/icons/kostbox-icon.png') }}" class="h-7 mr-2" alt="">
                        <p class="uppercase font-bold text-lg">Kostbox.id</p>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400"
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

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out dark:bg-gray-900 lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none lg:dark:bg-transparent">
                    <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
                        <a class="text-black hover:text-blue-500 lg:mx-6"
                            href="#">Home</a>
                        <a class="text-black hover:text-blue-500 lg:mx-6"
                            href="#">Components</a>
                        <a class="text-black hover:text-blue-500 lg:mx-6"
                            href="#">Pricing</a>
                        <a class="text-black hover:text-blue-500 lg:mx-6"
                            href="#">Contact</a>
                        <a class="text-black hover:text-blue-500 lg:mx-6"
                            href="#">FAQ</a>
                    </div>

                    <a class="mt-4 block h-10 transform rounded-md bg-gray border px-5 py-2 text-center text-sm capitalize text-gray-700 transition-colors duration-300 hover:bg-gray-100 lg:mt-0 lg:w-auto"
                        href="#"> Contact Us </a>
                </div>
            </nav>
        </header>

        <div class="container mx-auto px-6 py-5">
            <div class="relative">
                <img src="{{ asset('/client/images/hero-bg.png') }}" alt="" class="w-full h-auto">

                <!-- Overlay teks utama di kiri tengah -->
                <div class="absolute inset-0 flex items-center justify-start z-10 pl-8">
                    <div class="container mx-auto px-6 py-16 pt-28 text-center">
                        <div class="mx-auto max-w-lg">
                            <h1 class="text-3xl font-bold text-gray-800 dark:text-white md:text-4xl">Create beautiful
                                website layout with Meraki UI.</h1>

                            <p class="mt-6 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Libero similique obcaecati illum mollitia.</p>

                            <div
                                class="mx-auto mt-6 w-full max-w-sm rounded-md border bg-transparent focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 focus-within:ring-opacity-40 dark:border-gray-700 dark:focus-within:border-blue-300">
                                <form class="flex flex-col md:flex-row">
                                    <input type="email" placeholder="Enter your email address"
                                        class="m-1 h-10 flex-1 appearance-none border-none bg-transparent px-4 py-2 text-gray-700 placeholder-gray-400 focus:placeholder-transparent focus:outline-none focus:ring-0 dark:text-gray-200" />

                                    <button type="button"
                                        class="m-1 h-10 transform rounded-md bg-blue-500 px-4 py-2 text-white transition-colors duration-300 hover:bg-blue-400 focus:bg-blue-400 focus:outline-none">Join
                                        Us</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="absolute bottom-0 right-0 bg-[#2B9959] bg-opacity-80 text-black w-[52.2rem] h-[4.7rem] px-4 py-2 rounded-lg shadow-md z-10">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                        <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                            <svg class="h-12 fill-current text-gray-500 dark:text-gray-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 266 100">
                                <path fill="none" d="M0 0h266v100H0z"></path>
                                <path
                                    d="M140.021 49.597c-1.784 0-3.07.585-4.374 1.181v13.486c1.249.119 1.965.119 3.15.119 4.282 0 4.869-1.961 4.869-4.699v-6.441c0-2.022-.671-3.646-3.645-3.646zm-28.438-.736c-2.971 0-3.649 1.631-3.649 3.651v1.135h7.294v-1.135c0-2.02-.678-3.651-3.645-3.651zm-55.09 14.037c0 1.598.754 2.428 2.418 2.428 1.785 0 2.842-.582 4.145-1.18v-3.199h-3.903c-1.848 0-2.66.344-2.66 1.951zm111.191-13.301c-2.976 0-4.007 1.624-4.007 3.646v7.379c0 2.027 1.031 3.656 4.007 3.656 2.968 0 4.007-1.629 4.007-3.656v-7.379c-.001-2.022-1.04-3.646-4.007-3.646zM41.909 71.172h-8.748V49.998H28.79v-7.296h4.372V38.32c0-5.953 2.467-9.492 9.479-9.492h5.838v7.298H44.83c-2.73 0-2.91 1.02-2.91 2.923l-.011 3.652h6.61l-.773 7.296h-5.837v21.175zm29.897.055h-7.291l-.315-1.844c-3.329 1.844-6.3 2.143-8.26 2.143-5.347 0-8.193-3.572-8.193-8.512 0-5.828 3.321-7.908 9.262-7.908h6.047v-1.26c0-2.975-.341-3.848-4.916-3.848h-7.48l.731-7.296h8.176c10.038 0 12.239 3.171 12.239 11.203v17.322zm24.793-20.694c-4.537-.778-5.84-.949-8.023-.949-3.921 0-5.106.865-5.106 4.195v6.299c0 3.33 1.185 4.199 5.106 4.199 2.183 0 3.486-.174 8.023-.955v7.117c-3.974.891-6.563 1.125-8.751 1.125-9.392 0-13.125-4.939-13.125-12.074v-5.111c0-7.141 3.733-12.089 13.125-12.089 2.188 0 4.777.235 8.751 1.13v7.113zm27.376 8.957h-16.042v.588c0 3.33 1.186 4.199 5.106 4.199 3.524 0 5.675-.174 10.204-.955v7.117c-4.368.891-6.644 1.125-10.929 1.125-9.393 0-13.128-4.939-13.128-12.074v-5.844c0-6.243 2.771-11.356 12.396-11.356s12.393 5.054 12.393 11.356v5.844zm28.437.135c0 6.896-1.971 11.926-13.911 11.926-4.312 0-6.841-.379-11.6-1.111V31.02l8.745-1.459V43.35c1.89-.702 4.336-1.059 6.562-1.059 8.746 0 10.203 3.921 10.203 10.222v7.112zm28.033.15c0 5.949-2.456 11.719-12.732 11.719-10.281 0-12.783-5.77-12.783-11.719v-5.744c0-5.952 2.502-11.723 12.783-11.723 10.276 0 12.732 5.771 12.732 11.723v5.744zm28.014 0c0 5.949-2.459 11.719-12.733 11.719-10.281 0-12.783-5.77-12.783-11.719v-5.744c0-5.952 2.502-11.723 12.783-11.723 10.274 0 12.733 5.771 12.733 11.723v5.744zm28.749 11.397h-9.479l-8.017-13.383v13.383h-8.748V31.019l8.748-1.459v25.849l8.017-12.707h9.479l-8.752 13.867 8.752 14.603zm-41.512-21.575c-2.971 0-4.002 1.624-4.002 3.646v7.379c0 2.027 1.031 3.656 4.002 3.656 2.967 0 4.017-1.629 4.017-3.656v-7.379c0-2.022-1.05-3.646-4.017-3.646zm46.505 16.581c1.473 0 2.646 1.201 2.646 2.701 0 1.523-1.174 2.711-2.657 2.711-1.476 0-2.673-1.188-2.673-2.711 0-1.5 1.197-2.701 2.673-2.701h.011zm-.011.42c-1.187 0-2.158 1.021-2.158 2.281 0 1.283.972 2.291 2.169 2.291 1.198.012 2.155-1.008 2.155-2.279s-.957-2.293-2.155-2.293h-.011zm-.503 3.853h-.48v-3.014c.252-.035.492-.07.852-.07.456 0 .754.096.937.227.177.133.272.336.272.623 0 .398-.262.637-.585.734v.023c.263.049.442.287.503.73.07.469.143.648.19.746h-.503c-.071-.098-.144-.373-.204-.77-.07-.383-.264-.527-.648-.527h-.333v1.298zm0-1.668h.348c.394 0 .729-.145.729-.518 0-.264-.19-.527-.729-.527-.157 0-.266.012-.348.023v1.022z">
                                </path>
                            </svg>
                        </div>

                        <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                            <svg class="h-10 fill-current text-gray-500 dark:text-gray-300"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 316 60">
                                <g transform="translate(9.259 4.552) scale(.4941)">
                                    <path
                                        d="M52.1 102.1V82.5c20.8 0 36.8-20.6 28.9-42.4-3-8.1-9.4-14.6-17.5-17.5-21.8-7.9-42.4 8.1-42.4 28.9H1.5c0-33.1 32-58.9 66.7-48.1 15.2 4.7 27.2 16.8 31.9 31.9 10.8 34.8-14.9 66.8-48 66.8z">
                                    </path>
                                    <path d="M32.6 63h19.5v19.5H32.6zm-15 34.5v-15h15v15h-15zM5 70h12.6v12.5H5z"
                                        fill-rule="evenodd"></path>
                                    <path
                                        d="M181.5 30.2c-5.8-4-13-6.1-21.4-6.1h-18.3v58.1h18.3c8.4 0 15.6-2.1 21.4-6.4 3.2-2.2 5.7-5.4 7.4-9.3s2.6-8.5 2.6-13.7c0-5.1-.9-9.7-2.6-13.6-1.7-3.8-4.2-6.9-7.4-9zm-29 3.8h5.8c6.4 0 11.7 1.3 15.7 3.7 4.4 2.7 6.7 7.8 6.7 15.1 0 7.6-2.3 12.9-6.7 15.8-3.8 2.5-9.1 3.8-15.6 3.8h-5.8V34z">
                                    </path>
                                    <use xlink:href="#A"></use>
                                    <path
                                        d="M199 41.3h10.3v41H199zm47.8 3.4c-3.1-2.8-6.6-4.4-10.3-4.4-5.7 0-10.4 2-14.1 5.8s-5.5 8.8-5.5 14.7c0 5.8 1.8 10.7 5.5 14.7 3.7 3.8 8.4 5.8 14.1 5.8 4 0 7.4-1.1 10.2-3.3v1c0 3.4-.9 6-2.7 7.9-1.8 1.8-4.3 2.7-7.4 2.7-4.8 0-7.7-1.9-11.4-6.8l-7 6.7.2.3c1.5 2.1 3.8 4.2 6.9 6.2s6.9 3 11.5 3c6.1 0 11.1-1.9 14.7-5.6 3.7-3.7 5.5-8.7 5.5-14.9V41.3h-10.1v3.4zm-2.7 24.2c-1.8 2-4.1 3-7.1 3s-5.3-1-7-3c-1.8-2-2.7-4.7-2.7-8s.9-6.1 2.7-8.1 4.1-3.1 7-3.1c3 0 5.3 1 7.1 3.1 1.8 2 2.7 4.8 2.7 8.1s-1 6-2.7 8zm21.6-27.6H276v41h-10.3z">
                                    </path>
                                    <use xlink:href="#A" x="66.7"></use>
                                    <path
                                        d="M298.6 30.3h-10.1v11.1h-5.9v9.4h5.9v17c0 5.3 1.1 9.1 3.2 11.3s5.8 3.3 11.1 3.3c1.7 0 3.4-.1 5-.2h.5v-9.4l-3.5.2c-2.5 0-4.1-.4-4.9-1.3s-1.2-2.7-1.2-5.4V50.7h9.6v-9.4h-9.6v-11zm57.9-6.2h10.3v58.1h-10.3zm114.4 43.5c-1.8 2.1-3.7 3.9-5.2 4.8-1.4.9-3.2 1.4-5.3 1.4-3 0-5.5-1.1-7.5-3.4s-3-5.2-3-8.7 1-6.4 2.9-8.6c2-2.3 4.4-3.4 7.4-3.4 3.3 0 6.8 2.1 9.8 5.6l6.8-6.5c-4.4-5.8-10.1-8.5-16.9-8.5-5.7 0-10.6 2.1-14.6 6.1s-6 9.2-6 15.3 2 11.2 6 15.3 8.9 6.1 14.6 6.1c7.5 0 13.5-3.2 17.5-9.1l-6.5-6.4zM513.2 47c-1.5-2-3.5-3.7-5.9-4.9-2.5-1.2-5.3-1.8-8.5-1.8-5.8 0-10.5 2.1-14 6.3-3.4 4.2-5.2 9.3-5.2 15.4 0 6.2 1.9 11.3 5.7 15.3 3.7 3.9 8.8 5.9 14.9 5.9 6.9 0 12.7-2.8 16.9-8.4l.2-.3-6.7-6.5c-.6.8-1.5 1.6-2.3 2.4-1 1-2 1.7-3 2.2-1.5.8-3.3 1.1-5.2 1.1-2.9 0-5.2-.8-7-2.5-1.7-1.5-2.7-3.6-2.9-6.2h27.3l.1-3.8c0-2.7-.4-5.2-1.1-7.6-.7-2.3-1.8-4.5-3.3-6.6zm-22.5 9.7c.5-2 1.4-3.6 2.7-4.9 1.4-1.4 3.2-2.1 5.4-2.1 2.5 0 4.4.7 5.7 2.1 1.2 1.3 1.9 2.9 2.1 4.8h-15.9zm62.1-12.3c-3.1-2.7-7.4-4-12.8-4-3.4 0-6.6.8-9.5 2.2-2.7 1.4-5.3 3.6-7 6.6l.1.1 6.6 6.3c2.7-4.3 5.7-5.8 9.7-5.8 2.2 0 3.9.6 5.3 1.7s2 2.6 2 4.4v2c-2.6-.8-5.1-1.2-7.6-1.2-5.1 0-9.3 1.2-12.4 3.6s-4.7 5.9-4.7 10.2c0 3.8 1.3 7 4 9.3 2.7 2.2 6 3.4 9.9 3.4s7.6-1.6 10.9-4.3v3.4h10.1V55.9c.2-4.9-1.4-8.8-4.6-11.5zm-18.3 22.2c1.2-.8 2.8-1.2 4.9-1.2 2.5 0 5.1.5 7.8 1.5v4C545 73 542 74 538.3 74c-1.8 0-3.2-.4-4.1-1.2s-1.4-1.7-1.4-3 .6-2.4 1.7-3.2zm62.7-21.4c-2.9-3.2-6.9-4.8-12-4.8-4.1 0-7.4 1.2-9.9 3.5v-2.5h-10.1v41h10.3V59.7c0-3.1.7-5.6 2.2-7.3 1.5-1.8 3.4-2.6 6.1-2.6 2.3 0 4.1.8 5.4 2.3 1.3 1.6 2 3.7 2 6.4v23.7h10.3V58.5c0-5.6-1.4-10.1-4.3-13.3zm-253.6-.8c-3.1-2.7-7.4-4-12.8-4-3.4 0-6.6.8-9.5 2.2-2.7 1.4-5.3 3.6-7 6.6l.1.1 6.6 6.3c2.7-4.3 5.7-5.8 9.7-5.8 2.2 0 3.9.6 5.3 1.7s2 2.6 2 4.4v2c-2.6-.8-5.1-1.2-7.6-1.2-5.1 0-9.3 1.2-12.4 3.6s-4.7 5.9-4.7 10.2c0 3.8 1.3 7 4 9.3 2.7 2.2 6 3.4 9.9 3.4s7.6-1.6 10.9-4.3v3.4h10.1V55.9c.1-4.9-1.5-8.8-4.6-11.5zm-18.3 22.2c1.2-.8 2.8-1.2 4.9-1.2 2.5 0 5.1.5 7.8 1.5v4c-2.2 2.1-5.2 3.1-8.9 3.1-1.8 0-3.2-.4-4.1-1.2s-1.4-1.7-1.4-3 .5-2.4 1.7-3.2zm78.9 16.5c-16.5 0-30-13.4-30-30s13.4-30 30-30c16.5 0 30 13.4 30 30s-13.5 30-30 30zm0-49.3c-10.7 0-19.4 8.7-19.4 19.4s8.7 19.4 19.4 19.4 19.4-8.7 19.4-19.4-8.7-19.4-19.4-19.4z">
                                    </path>
                                </g>
                                <defs>
                                    <path
                                        d="M204.3 23.4c-1.8 0-3.3.6-4.5 1.8s-1.9 2.7-1.9 4.4c0 1.8.6 3.3 1.9 4.5 1.2 1.2 2.7 1.9 4.5 1.9s3.3-.6 4.5-1.9c1.2-1.2 1.9-2.8 1.9-4.5 0-1.8-.6-3.3-1.9-4.4-1.2-1.2-2.8-1.8-4.5-1.8z">
                                    </path>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                            <svg class="mt-2 h-8 fill-current text-gray-500 dark:text-gray-300" viewBox="0 0 398 120"
                                xmlns="http://www.w3.org/2000/svg">
                                <g fill-rule="nonzero">
                                    <path
                                        d="M247.292 94.106C224.124 111.016 190.526 120 161.608 120c-40.544 0-77.046-14.822-104.673-39.476-2.164-1.936-.235-4.583 2.369-3.082 29.806 17.15 66.66 27.475 104.731 27.475 25.677 0 53.906-5.271 79.884-16.163 3.923-1.646 7.21 2.545 3.373 5.352">
                                    </path>
                                    <path
                                        d="M256.533 82.534c-2.965-3.771-19.551-1.787-27.003-.897-2.254.277-2.605-1.692-.57-3.122 13.233-9.265 34.922-6.587 37.447-3.487 2.54 3.13-.666 24.802-13.073 35.147-1.91 1.59-3.718.744-2.877-1.357 2.782-6.952 9.04-22.505 6.076-26.284zM230.05 13.058V4.063c.015-1.378 1.04-2.29 2.291-2.283l40.493-.007c1.295 0 2.335.94 2.335 2.268v7.726c-.015 1.29-1.113 2.983-3.053 5.668l-20.97 29.843c7.78-.182 16.022.985 23.093 4.939 1.596.897 2.027 2.217 2.152 3.516v9.607c0 1.32-1.457 2.86-2.987 2.057-12.458-6.507-29-7.214-42.776.08-1.405.745-2.884-.765-2.884-2.086v-9.133c0-1.459.03-3.961 1.508-6.186l24.302-34.738h-21.162c-1.295 0-2.327-.927-2.342-2.276zM82.354 69.294H70.042c-1.171-.08-2.108-.956-2.203-2.072l.014-63.006c0-1.262 1.062-2.268 2.38-2.268L81.71 1.94c1.2.059 2.159.963 2.232 2.116v8.221h.234C87.163 4.326 92.8.613 100.39.613c7.708 0 12.539 3.713 15.98 11.664C119.361 4.326 126.14.613 133.393.613c5.175 0 10.804 2.123 14.251 6.893 3.916 5.311 3.111 12.993 3.111 19.755l-.015 39.764c0 1.255-1.061 2.262-2.379 2.262h-12.304c-1.23-.08-2.203-1.05-2.203-2.262l-.007-33.41c0-2.648.234-9.28-.344-11.796-.923-4.246-3.675-5.435-7.24-5.435-2.986 0-6.09 1.985-7.356 5.165-1.266 3.188-1.15 8.484-1.15 12.066v33.403c0 1.255-1.06 2.262-2.378 2.262h-12.297c-1.237-.08-2.21-1.051-2.21-2.262l-.015-33.41c0-7.025 1.142-17.362-7.59-17.362-8.858 0-8.506 10.074-8.506 17.362l-.007 33.403c-.022 1.276-1.084 2.283-2.401 2.283zm227.788-55.82c-9.084 0-9.662 12.328-9.662 20.017s-.117 24.131 9.545 24.131c9.545 0 10.006-13.262 10.006-21.345 0-5.303-.234-11.664-1.845-16.705-1.383-4.377-4.143-6.098-8.044-6.098zM310.025.613c18.284 0 28.173 15.647 28.173 35.533 0 19.222-10.92 34.468-28.173 34.468-17.933 0-27.712-15.647-27.712-35.132C282.305 15.86 292.2.612 310.025.612zm51.882 68.681h-12.275c-1.23-.08-2.211-1.05-2.211-2.261l-.015-63.028c.103-1.16 1.12-2.057 2.365-2.057l11.426-.008c1.076.059 1.961.788 2.188 1.766v9.636h.234c3.448-8.622 8.279-12.73 16.785-12.73 5.519 0 10.92 1.992 14.375 7.427C398 13.072 398 21.556 398 27.662v39.64c-.14 1.117-1.142 1.985-2.364 1.985h-12.349c-1.141-.073-2.064-.912-2.188-1.984V33.097c0-6.894.805-16.968-7.708-16.968-2.993 0-5.753 1.984-7.13 5.033-1.72 3.845-1.953 7.69-1.953 11.935v33.928c-.03 1.262-1.091 2.27-2.401 2.27zm-151.715-.16c-.813.73-1.991.78-2.913.284-4.092-3.385-4.824-4.953-7.064-8.177-6.756 6.864-11.543 8.921-20.305 8.921-10.372 0-18.438-6.376-18.438-19.134 0-9.965 5.424-16.742 13.139-20.061 6.683-2.925 16.023-3.458 23.167-4.253v-1.598c0-2.925.234-6.375-1.5-8.9-1.501-2.26-4.378-3.195-6.918-3.195-4.692 0-8.871 2.4-9.904 7.375-.212 1.11-1.024 2.204-2.137 2.262l-11.938-1.291c-1.01-.234-2.13-1.029-1.838-2.568C166.288 4.362 179.37 0 191.087 0c5.995 0 13.827 1.59 18.556 6.113 5.995 5.58 5.416 13.021 5.416 21.126v19.127c0 5.756 2.401 8.28 4.648 11.373.79 1.116.967 2.444-.036 3.26-2.518 2.102-6.983 5.968-9.443 8.15l-.036-.015zm-12.414-29.931v-2.656c-8.908 0-18.322 1.897-18.322 12.35 0 5.319 2.767 8.908 7.488 8.908 3.455 0 6.566-2.123 8.528-5.58 2.423-4.254 2.306-8.237 2.306-13.022zM48.72 69.133c-.813.73-1.991.781-2.913.285-4.092-3.385-4.824-4.953-7.064-8.177-6.763 6.864-11.55 8.921-20.305 8.921C8.06 70.162 0 63.786 0 51.028c0-9.965 5.417-16.742 13.139-20.061 6.683-2.925 16.015-3.458 23.16-4.253v-1.598c0-2.925.233-6.375-1.501-8.9-1.5-2.26-4.377-3.195-6.91-3.195-4.7 0-8.879 2.4-9.904 7.375-.212 1.11-1.024 2.204-2.137 2.262L3.91 21.367c-1.01-.234-2.13-1.029-1.845-2.568C4.81 4.362 17.89.007 29.615.007c5.995 0 13.827 1.59 18.556 6.113 5.995 5.581 5.416 13.022 5.416 21.126v19.128c0 5.755 2.401 8.28 4.648 11.372.79 1.116.967 2.444-.036 3.261-2.518 2.101-6.99 5.967-9.45 8.148l-.03-.021zm-12.422-29.93v-2.656c-8.908 0-18.32 1.897-18.32 12.35 0 5.319 2.766 8.908 7.487 8.908 3.462 0 6.573-2.123 8.528-5.58 2.422-4.254 2.305-8.237 2.305-13.022z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full px-4 py-10 bg-white">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-10">
              Layanan yang kami sediakan
            </h2>
          
            <div class="flex flex-wrap justify-center gap-4">
              <!-- Card 1: Normal size -->
              <div class="flex flex-col items-center border rounded-lg px-6 py-6 w-[150px] hover:shadow-md transition">
                <img src="/icons/packing.svg" alt="Packing" class="w-8 h-8 mb-2 text-green-600" />
                <p class="text-sm font-medium text-gray-800 text-center">Packing</p>
              </div>
          
              <!-- Card 2: 2x width -->
              <div class="flex flex-col items-center border rounded-lg px-6 py-6 w-[300px] hover:shadow-md transition">
                <img src="/icons/truck.svg" alt="Jasa Angkutan" class="w-8 h-8 mb-2 text-green-600" />
                <p class="text-sm font-medium text-gray-800 text-center">Jasa Angkutan<br>(dalam/luar kota)</p>
              </div>
          
              <!-- Card 3: 2x width -->
              <div class="flex flex-col items-center border rounded-lg px-6 py-6 w-[300px] hover:shadow-md transition">
                <img src="/icons/house.svg" alt="Titip Barang Kos" class="w-8 h-8 mb-2 text-green-600" />
                <p class="text-sm font-medium text-gray-800 text-center">Titip Barang Kos<br>(harian/bulanan)</p>
              </div>
          
              <!-- Card 4: Normal size -->
              <div class="flex flex-col items-center border rounded-lg px-6 py-6 w-[150px] hover:shadow-md transition">
                <img src="/icons/kargo.svg" alt="Kargo" class="w-8 h-8 mb-2 text-green-600" />
                <p class="text-sm font-medium text-gray-800 text-center">Kargo</p>
              </div>
            </div>
          
            <div class="flex justify-center mt-10">
              <button class="bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2 rounded">
                Pelajari lebih lanjut
              </button>
            </div>
          </div>
          <div class="bg-white py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <!-- big grid 1 -->
                <div class="flex flex-row flex-wrap">
                    <!--Start left cover-->
                    <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
                        <div class="relative hover-img max-h-98 overflow-hidden">
                            <a href="#">
                                <img class="max-w-full w-full mx-auto h-auto" src="https://tailnews.tailwindtemplate.net/src/img/dummy/img1.jpg" alt="Image description">
                            </a>
                            <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                                <a href="#">
                                    <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                                </a>
                                <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>
                                <div class="pt-2">
                                    <div class="text-gray-100">
                                        <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start box news-->
                    <div class="flex-shrink max-w-full w-full lg:w-1/2">
                        <div class="box-one flex flex-row flex-wrap">
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="https://tailnews.tailwindtemplate.net/src/img/dummy/img2.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">News magazines are becoming obsolete, replaced by gadgets</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Techno
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="https://tailnews.tailwindtemplate.net/src/img/dummy/img3.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Minimalist designs are starting to be popular with the next generation</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Architecture
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="https://tailnews.tailwindtemplate.net/src/img/dummy/img4.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Tips for decorating the interior of the living room</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Interior
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                <div class="relative hover-img max-h-48 overflow-hidden">
                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="https://tailnews.tailwindtemplate.net/src/img/dummy/img5.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Online taxi users are increasing drastically ahead of the new year</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Lifestyle
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white py-16 px-6 md:px-20 relative">
            <!-- Judul, Subtitle, dll. -->
            <div class="inline-block bg-yellow-100 text-yellow-600 text-sm font-semibold px-4 py-1 rounded-full mb-4">
              Layanan Kami
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-snug mb-8">
              Solusi Digital Terpadu Untuk<br />
              Meningkatkan <span class="text-yellow-500 underline decoration-wavy decoration-2">Bisnis</span> Anda
            </h2>
            <div class="mb-20">
              <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-6 rounded-md shadow-md transition duration-300">
                Pelajari Selengkapnya
              </button>
            </div>
          
            <!-- Container untuk layanan -->
            <div class="relative">
              <!-- Garis horizontal -->
              <div class="hidden md:block absolute top-[25px] left-0 w-full h-0.5 bg-gray-200 z-0"></div>
          
              <!-- Layanan Nodes -->
              <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                <!-- Node 1 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                  <div class="w-12 h-12 bg-yellow-200 text-yellow-500 font-bold rounded-full flex items-center justify-center border-4 border-white shadow-md mb-4 z-10 relative">
                    1
                  </div>
                  <h3 class="text-lg font-bold text-yellow-500 mb-2">Integrasi Sistem Multi-Biller</h3>
                  <p class="text-gray-600 text-sm">
                    Kami menyediakan solusi backend yang mendukung integrasi multi-biller untuk pembayaran tagihan listrik, air, internet, dan kebutuhan lainnya dalam satu platform yang efisien.
                  </p>
                </div>
          
                <!-- Node 2 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                  <div class="w-12 h-12 bg-white text-gray-700 font-bold rounded-full flex items-center justify-center border-2 border-gray-300 shadow mb-4 z-10 relative">
                    2
                  </div>
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Pengembangan Aplikasi Loket Bayar</h3>
                  <p class="text-gray-600 text-sm">
                    Kami merancang aplikasi khusus loket bayar, mulai dari sistem pencatatan transaksi hingga laporan keuangan, guna mempermudah operasional bisnis Anda.
                  </p>
                </div>
          
                <!-- Node 3 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                  <div class="w-12 h-12 bg-white text-gray-700 font-bold rounded-full flex items-center justify-center border-2 border-gray-300 shadow mb-4 z-10 relative">
                    3
                  </div>
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Automasi Proses Transaksi</h3>
                  <p class="text-gray-600 text-sm">
                    Optimalkan waktu dengan teknologi otomatisasi yang mendukung proses pembayaran dalam hitungan detik, termasuk verifikasi data secara real-time.
                  </p>
                </div>
          
                <!-- Node 4 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                  <div class="w-12 h-12 bg-white text-gray-700 font-bold rounded-full flex items-center justify-center border-2 border-gray-300 shadow mb-4 z-10 relative">
                    4
                  </div>
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Keamanan Transaksi</h3>
                  <p class="text-gray-600 text-sm">
                    Sistem kami dilengkapi dengan enkripsi data tingkat tinggi untuk memastikan semua transaksi dan data pelanggan aman dari ancaman keamanan digital.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="relative py-16 bg-white overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
              <h2 class="text-2xl md:text-3xl font-semibold mb-4">Misi Kami</h2>
              <p class="text-lg md:text-xl font-medium text-gray-700 mb-8">
                Kami menawarkan solusi penyimpanan barang dengan biaya 80% lebih hemat dibandingkan biaya kos
              </p>
          
              <!-- Avatar images absolute positioned -->
              <div class="absolute left-4 top-10 w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-md">
                <img src="https://placehold.co/400" alt="Avatar" class="w-full h-full object-cover" />
              </div>
              <div class="absolute left-16 top-24 w-8 h-8 rounded-full overflow-hidden border-2 border-white shadow-md">
                <img src="https://placehold.co/400" alt="Avatar" class="w-full h-full object-cover" />
              </div>
              <div class="absolute right-4 top-10 w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-md">
                <img src="https://placehold.co/400" alt="Avatar" class="w-full h-full object-cover" />
              </div>
              <div class="absolute right-16 top-24 w-8 h-8 rounded-full overflow-hidden border-2 border-white shadow-md">
                <img src="https://placehold.co/400" alt="Avatar" class="w-full h-full object-cover" />
              </div>
          
              <!-- Grid Benefit -->
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-16">
                <div class="border border-green-300 rounded-lg p-4 text-left">
                  <p class="font-bold text-gray-900">Amanah</p>
                  <p class="text-gray-600">dan sudah dipercaya</p>
                </div>
          
                <div class="border border-green-300 rounded-lg p-4 text-left">
                  <p class="font-bold text-gray-900">Jaminan Keamanan</p>
                  <p class="text-gray-600">dan Garansi</p>
                </div>
          
                <!-- Box hijau lebar 2 kolom -->
                <div class="bg-green-600 text-white rounded-lg p-4 text-left md:row-span-2">
                  <p class="text-lg font-semibold">Solusi praktis ini sangat cocok untuk mahasiswa dan pekerja</p>
                </div>
          
                <div class="border border-green-300 rounded-lg p-4 text-left">
                  <p class="font-bold text-gray-900">Harga terjangkau</p>
                  <p class="text-gray-600">mulai dari 17rb perbulan</p>
                </div>
          
                <div class="border border-green-300 rounded-lg p-4 text-left">
                  <p class="font-bold text-gray-900">Admin ramah</p>
                  <p class="text-gray-600">dan respon cepat</p>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 bg-white">
            <div class="max-w-5xl mx-auto px-4 text-center">
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">Dimana lokasi kami?</h2>
        
                <!-- Map with border -->
                <div class="rounded-xl overflow-hidden border-4 border-cyan-500 mb-8">
                    <iframe class="w-full h-[400px]"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=110.3878%2C-7.7858%2C110.3958%2C-7.7798&layer=mapnik&marker=-7.7828%2C110.3918"
                        style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
        
                </div>
        
                <!-- Location Info -->
                <div class="flex flex-col md:flex-row justify-between text-sm md:text-base text-gray-800">
                    <p class="font-semibold text-base md:text-2xl">
                        Penitipan Barang Jogja | Kostbox.id
                    </p>
                    <p class="md:text-right mt-2 md:mt-0">
                        Jl. Demangan Baru Jl. Cenderawasih No.13, Demangan Baru, Caturtunggal, Kec. Depok,
                        Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                    </p>
                </div>
            </div>
        </section>
        <div class="bg-[#129c56] py-10 px-6 rounded-[30px] flex flex-col lg:flex-row items-center justify-between gap-10">
            <!-- Kiri -->
            <div class="text-white max-w-md">
              <h2 class="text-3xl font-bold leading-tight mb-4">
                Mau tanya-tanya? <br />
                kontak kami gratis!
              </h2>
              <p class="text-base">
                Admin kami akan menghubungi Anda secepatnya, jangan ragu <span>😊</span>
              </p>
            </div>
          
            <!-- Kanan -->
            <form class="bg-white p-6 rounded-2xl shadow-md w-full max-w-2xl">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nama -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">Nama *</label>
                  <input type="text" placeholder="cth. Akbar" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                  <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
          
                <!-- Email -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">Email *</label>
                  <input type="email" placeholder="cth. emailmu@gmail.com" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                  <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
          
                <!-- Nomor WhatsApp -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">Nomor WhatsApp *</label>
                  <div class="flex mt-1">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+62</span>
                    <input type="text" placeholder="cth. 8914192u419" class="flex-1 rounded-r-md border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                  </div>
                  <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
          
                <!-- Kota -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">Kota *</label>
                  <select class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500">
                    <option>Lemari, sepatu, sandal</option>
                  </select>
                  <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
          
                <!-- Kode Referral -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">Kode Referal</label>
                  <input type="text" placeholder="cth. AKBR2004" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                  <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
          
                <!-- Sumber Info -->
                <div>
                  <label class="block text-sm font-medium text-gray-700">Dari mana kamu mengetahui Kostbox *</label>
                  <select class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500">
                    <option>Jogja</option>
                  </select>
                  <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
              </div>
          
              <!-- Tombol -->
              <button type="submit" class="mt-6 w-full bg-[#129c56] text-white font-semibold py-3 rounded-lg hover:bg-green-600 transition">
                Kirim via WhatsApp
              </button>
            </form>
          </div>
          
          @include('client.components.testimonial')
          @include('client.components.faq')
          @include('client.components.cta')
          
          
        <!-- component -->
<div class="flex items-end w-full min-h-screen bg-white">

    <footer class="w-full text-gray-700 bg-gray-100 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <svg class="w-auto h-5 text-gray-900 fill-current" viewBox="0 0 202 69"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M57.44.672s6.656 1.872 6.656 5.72c0 0-1.56 2.6-3.744 6.552 8.424 1.248 16.744 1.248 23.816-1.976-1.352 7.904-12.688 8.008-26.208 6.136-7.696 13.624-19.656 36.192-19.656 42.848 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C56.608 53.088 42.152 69 36.432 69c-4.472 0-8.216-5.928-8.216-10.4 0-6.552 11.752-28.08 20.28-42.952-9.984-1.664-20.176-3.64-27.976-3.848-13.936 0-16.64 3.536-17.576 6.032-.104.312-.52.52-.832.312-3.744-7.072-1.456-14.56 14.144-14.56 9.36 0 22.048 4.576 34.944 7.592C54.736 5.04 57.44.672 57.44.672zm46.124 41.08c1.144-1.456 4.264.728 3.016 2.392C100.236 53.088 85.78 69 80.06 69c-4.576 0-8.32-5.928-8.32-10.4v-.208C67.58 64.32 63.524 69 61.34 69c-4.472 0-8.944-4.992-8.944-11.856 0-10.608 15.704-33.072 24.96-33.072 4.992 0 7.384 2.392 8.528 4.576l2.6-4.576s6.656 1.976 6.656 5.824c0 0-13.312 24.336-13.312 30.056 0 .208 0 .624.52.624 4.472 0 17.888-14.352 21.216-18.824zm-40.56 18.72c2.184 0 11.752-13.312 17.368-22.048l4.16-7.488c-8.008-7.904-27.248 29.536-21.528 29.536zm57.564-38.168c-2.184 0-4.992-2.808-4.992-4.784 0-2.912 5.824-14.872 7.28-14.872 2.6 0 6.136 2.808 6.136 6.344 0 2.08-7.176 12.064-8.424 13.312zm-17.68 46.592c-4.472 0-8.216-5.928-8.216-10.4 0-6.656 16.744-34.528 16.744-34.528s6.552 1.976 6.552 5.824c0 0-13.312 24.336-13.312 30.056 0 .208.104.624.624.624 4.472 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392-6.448 8.944-20.904 24.856-26.624 24.856zM147.244.672s6.656 1.872 6.656 5.72c0 0-25.792 43.784-25.792 53.56 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C146.412 53.088 131.956 69 126.236 69c-4.472 0-8.216-5.928-8.216-10.4 0-10.4 29.224-57.928 29.224-57.928zM169.7 60.16c3.848-2.392 7.904-6.864 10.816-10.92 6.656-9.464 11.544-20.696 10.504-27.352-.312-3.432-.104-4.056 3.12-2.704 5.2 2.392 11.336 8.632 2.184 22.88-5.2 8.008-12.48 15.288-19.344 19.76-2.704 1.768-6.344 3.328-9.984 4.16-.52.416-1.04.728-1.456.936-1.872 1.352-4.264 2.08-7.592 2.08-14.664 0-16.848-12.272-16.848-16.016 0-2.392 3.224-4.68 4.784-3.744.208.104.312.416.312.624 0 2.808 1.872 13.104 9.984 13.104 7.904 0 3.432-18.304 2.288-27.144-1.456 2.288-3.432 4.992-5.616 8.32-2.6 3.744-5.72 1.456-4.784 0 5.824-8.424 9.152-13.832 11.856-18.616 1.248-2.08 3.328-3.328 6.448-3.328 2.704 0 5.824 3.016 6.864 4.784.312.52 0 1.04-.52 1.144a5.44 5.44 0 00-4.368 5.408c0 6.968 2.6 17.16 1.664 24.856l-.312 1.768z"
                            fill-rule="nonzero" /></svg>
                </a>
                <p class="mt-2 text-sm text-gray-500">Design, Code and Ship!</p>
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">About</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Company</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Careers</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Support</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contact Support</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Help Resources</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Release Updates</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Platform
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Pricing</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Send a Message</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Request a Quote</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">+123-456-7890</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-300">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-gray-700 capitalize xl:text-center">© 2020 All rights reserved </p>
            </div>
        </div>
    </footer>

</div>
    </main>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');
</style>