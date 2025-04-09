<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Form Pengiriman Barang</h1>

    <form action="{{ route('order.submit') }}" method="POST">
        @csrf

        <!-- Checkbox: Gunakan Kostbox Warehouse -->
        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="use_warehouse" id="use_warehouse" class="form-checkbox text-green-600"
                    checked>
                <span class="ml-2">Gunakan Kostbox Warehouse</span>
            </label>
        </div>

        <!-- Lokasi Penjemputan -->
        <div class="mb-6">
            <label for="pickup-map" class="block font-semibold mb-2">Pilih lokasi penjemputan barang *</label>
            <div id="pickup-map" class="w-full h-64 rounded shadow border"></div>
        </div>

        <!-- Lokasi Pengiriman -->
        <div class="mb-6 relative">
            <label for="delivery-map" class="block font-semibold mb-2">Pilih lokasi pengiriman barang *</label>
            <div id="delivery-map" class="w-full h-64 rounded shadow border relative">
                <div id="delivery-overlay" class="absolute inset-0 bg-white bg-opacity-50 z-10 hidden rounded flex items-center justify-center">
                    <p class="text-gray-800 font-semibold text-center">Anda menggunakan warehouse Kostbox</p>
                </div>
            </div>
            
        </div>


        <!-- Hidden Inputs for Coordinates -->
        <input type="hidden" name="pickup_lat" id="pickup_lat">
        <input type="hidden" name="pickup_lng" id="pickup_lng">
        <input type="hidden" name="delivery_lat" id="delivery_lat">
        <input type="hidden" name="delivery_lng" id="delivery_lng">

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Submit
        </button>
    </form>
</div>

<!-- Mapbox JS and CSS -->
<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>

<script>
    mapboxgl.accessToken = '{{ env('MAPBOX_TOKEN') }}';

    const defaultPickup = [106.8272, -6.1754]; // Monas (Jakarta)
    const warehouseCoord = [106.8000, -6.2000]; // Kostbox Warehouse coordinate

    // Pickup Map
    const pickupMap = new mapboxgl.Map({
        container: 'pickup-map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: defaultPickup,
        zoom: 12
    });

    let pickupMarker = new mapboxgl.Marker({ draggable: true })
        .setLngLat(defaultPickup)
        .addTo(pickupMap);

    document.getElementById('pickup_lat').value = defaultPickup[1];
    document.getElementById('pickup_lng').value = defaultPickup[0];

    pickupMarker.on('dragend', () => {
        const lngLat = pickupMarker.getLngLat();
        document.getElementById('pickup_lat').value = lngLat.lat;
        document.getElementById('pickup_lng').value = lngLat.lng;
    });

    pickupMap.on('click', function (e) {
        const { lng, lat } = e.lngLat;
        pickupMarker.setLngLat([lng, lat]);
        document.getElementById('pickup_lat').value = lat;
        document.getElementById('pickup_lng').value = lng;
    });

    // Delivery Map
    const deliveryMap = new mapboxgl.Map({
        container: 'delivery-map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: warehouseCoord,
        zoom: 12
    });

    let deliveryMarker = new mapboxgl.Marker({ draggable: true })
        .setLngLat(warehouseCoord)
        .addTo(deliveryMap);

    document.getElementById('delivery_lat').value = warehouseCoord[1];
    document.getElementById('delivery_lng').value = warehouseCoord[0];

    deliveryMarker.on('dragend', () => {
        const lngLat = deliveryMarker.getLngLat();
        document.getElementById('delivery_lat').value = lngLat.lat;
        document.getElementById('delivery_lng').value = lngLat.lng;
    });

    deliveryMap.on('click', function (e) {
        if (document.getElementById('use_warehouse').checked) return; // prevent click if using warehouse
        const { lng, lat } = e.lngLat;
        deliveryMarker.setLngLat([lng, lat]);
        document.getElementById('delivery_lat').value = lat;
        document.getElementById('delivery_lng').value = lng;
    });

    // Checkbox behavior
    const warehouseCheckbox = document.getElementById('use_warehouse');
    const warehouseInfo = document.getElementById('warehouse-info');

    warehouseCheckbox.addEventListener('change', function () {
        const checked = this.checked;

        const deliveryOverlay = document.getElementById('delivery-overlay');

        if (checked) {
            deliveryMarker.setLngLat(warehouseCoord);
            deliveryMap.setCenter(warehouseCoord);
            document.getElementById('delivery_lat').value = warehouseCoord[1];
            document.getElementById('delivery_lng').value = warehouseCoord[0];
            deliveryMarker.setDraggable(false);
            deliveryOverlay.classList.remove('hidden');
        } else {
            deliveryMarker.setDraggable(true);
            deliveryOverlay.classList.add('hidden');
        }
    });

    // On load check
    if (document.getElementById('use_warehouse').checked) {
    document.getElementById('delivery-overlay').classList.remove('hidden');
} else {
    document.getElementById('delivery-overlay').classList.add('hidden');
}

</script>

<style>
    #delivery-overlay {
        pointer-events: none;
    }
</style>