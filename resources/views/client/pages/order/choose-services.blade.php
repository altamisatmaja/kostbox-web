<div class="space-y-6">
    {{-- Heading --}}
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-900">Pilih jenis layanan</h2>
        <p class="text-gray-500 mt-2">Pemilihan layanan bisa lebih dari satu, ya!</p>
    </div>

    {{-- Form --}}
    <form method="POST" action="{{ route('order.next') }}">
        @csrf
    <div class="space-y-4">
        <label class="block text-base font-semibold text-gray-700">Jenis Layanan <span class="text-red-500">*</span></label>
        
        <div class="space-y-3">
            @php
                $services = [
                    'Packing',
                    'Jasa Angkutan atau Pindahan',
                    'Cargo',
                    'Penitipan Barang atau Sewa Gudang',
                    'Beli Kardus'
                ];

                $selectedServices = old('services', $selectedServices ?? []);
            @endphp

            @foreach ($services as $service)
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        name="services[]"
                        id="service-{{ Str::slug($service) }}"
                        value="{{ $service }}"
                        {{ in_array($service, $selectedServices) ? 'checked' : '' }}
                        class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500"
                    >
                    <label for="service-{{ Str::slug($service) }}" class="ml-3 text-gray-800 text-sm md:text-base">
                        {{ $service }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-6 text-right">
        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">Lanjut</button>
    </div>
</form>
</div>
