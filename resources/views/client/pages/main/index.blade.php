@extends('client.layouts.app')

@section('content')
@include('client.components.hero')
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
                            <img class="max-w-full w-full mx-auto h-auto"
                                src="https://tailnews.tailwindtemplate.net/src/img/dummy/img1.jpg" alt="Image description">
                        </a>
                        <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                            <a href="#">
                                <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are
                                    Ditching Designer Belts for This Best-Selling</h2>
                            </a>
                            <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting
                                text below as a natural lead-in to additional content. This very helpfull for
                                generate default content..</p>
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
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="https://tailnews.tailwindtemplate.net/src/img/dummy/img2.jpg"
                                        alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">News
                                            magazines are becoming obsolete, replaced by gadgets</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                            Techno
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="https://tailnews.tailwindtemplate.net/src/img/dummy/img3.jpg"
                                        alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">
                                            Minimalist designs are starting to be popular with the next generation
                                        </h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                            Architecture
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="https://tailnews.tailwindtemplate.net/src/img/dummy/img4.jpg"
                                        alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Tips
                                            for decorating the interior of the living room</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                            Interior
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="https://tailnews.tailwindtemplate.net/src/img/dummy/img5.jpg"
                                        alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">
                                            Online taxi users are increasing drastically ahead of the new year</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                            Lifestyle
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
            <button
                class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-6 rounded-md shadow-md transition duration-300">
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
                    <div
                        class="w-12 h-12 bg-yellow-200 text-yellow-500 font-bold rounded-full flex items-center justify-center border-4 border-white shadow-md mb-4 z-10 relative">
                        1
                    </div>
                    <h3 class="text-lg font-bold text-yellow-500 mb-2">Integrasi Sistem Multi-Biller</h3>
                    <p class="text-gray-600 text-sm">
                        Kami menyediakan solusi backend yang mendukung integrasi multi-biller untuk pembayaran
                        tagihan listrik, air, internet, dan kebutuhan lainnya dalam satu platform yang efisien.
                    </p>
                </div>

                <!-- Node 2 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                    <div
                        class="w-12 h-12 bg-white text-gray-700 font-bold rounded-full flex items-center justify-center border-2 border-gray-300 shadow mb-4 z-10 relative">
                        2
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pengembangan Aplikasi Loket Bayar</h3>
                    <p class="text-gray-600 text-sm">
                        Kami merancang aplikasi khusus loket bayar, mulai dari sistem pencatatan transaksi hingga
                        laporan keuangan, guna mempermudah operasional bisnis Anda.
                    </p>
                </div>

                <!-- Node 3 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                    <div
                        class="w-12 h-12 bg-white text-gray-700 font-bold rounded-full flex items-center justify-center border-2 border-gray-300 shadow mb-4 z-10 relative">
                        3
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Automasi Proses Transaksi</h3>
                    <p class="text-gray-600 text-sm">
                        Optimalkan waktu dengan teknologi otomatisasi yang mendukung proses pembayaran dalam
                        hitungan detik, termasuk verifikasi data secara real-time.
                    </p>
                </div>

                <!-- Node 4 -->
                <div class="relative flex flex-col items-center text-center md:items-start md:text-left">
                    <div
                        class="w-12 h-12 bg-white text-gray-700 font-bold rounded-full flex items-center justify-center border-2 border-gray-300 shadow mb-4 z-10 relative">
                        4
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Keamanan Transaksi</h3>
                    <p class="text-gray-600 text-sm">
                        Sistem kami dilengkapi dengan enkripsi data tingkat tinggi untuk memastikan semua transaksi
                        dan data pelanggan aman dari ancaman keamanan digital.
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
                    <input type="text" placeholder="cth. Akbar"
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                    <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email *</label>
                    <input type="email" placeholder="cth. emailmu@gmail.com"
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                    <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>

                <!-- Nomor WhatsApp -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nomor WhatsApp *</label>
                    <div class="flex mt-1">
                        <span
                            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+62</span>
                        <input type="text" placeholder="cth. 8914192u419"
                            class="flex-1 rounded-r-md border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>

                <!-- Kota -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kota *</label>
                    <select
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500">
                        <option>Lemari, sepatu, sandal</option>
                    </select>
                    <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>

                <!-- Kode Referral -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kode Referal</label>
                    <input type="text" placeholder="cth. AKBR2004"
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500" />
                    <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>

                <!-- Sumber Info -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Dari mana kamu mengetahui Kostbox
                        *</label>
                    <select
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500">
                        <option>Jogja</option>
                    </select>
                    <p class="text-xs text-gray-400 mt-1">Helper teks ada disini nanti</p>
                </div>
            </div>

            <!-- Tombol -->
            <button type="submit"
                class="mt-6 w-full bg-[#129c56] text-white font-semibold py-3 rounded-lg hover:bg-green-600 transition">
                Kirim via WhatsApp
            </button>
        </form>
    </div>

    @include('client.components.testimonial')
    @include('client.components.faq')
    @include('client.components.cta')

@endsection