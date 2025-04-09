<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostbox Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans">

    {{-- Wrapper Content --}}
    <div class="max-w-3xl mx-auto px-6 py-10">
        {{-- Logo --}}
        <div class="mb-6">
            <img src="{{ asset('images/kostbox-logo.png') }}" alt="Kostbox Logo" class="h-8">
        </div>

        {{-- Heading --}}
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Cek Harga Layanan Kostbox Sekarang!</h1>
            <p class="text-gray-600 text-sm md:text-base">Packing, angkut, gudang, hingga cargo—semua bisa kamu pesan dari sini. Isi formnya, tim kami akan bantu hitung harga dan hubungi kamu lewat WhatsApp!</p>
        </div>

        {{-- Slot untuk konten form --}}
        <div class="mb-6">
            @yield('form-step')
        </div>

        {{-- Progress Bar --}}
        <div class="w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
            <div
                class="h-full bg-green-500 transition-all duration-500 ease-in-out"
                style="width: {{ ($step / 4) * 100 }}%">
            </div>
        </div>
    </div>

</body>
</html>
