<form method="POST" action="{{ route('order.next') }}">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-input w-full" value="{{ old('name', session('order.name')) }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-input w-full" value="{{ old('email', session('order.email')) }}">
        </div>
        <!-- Tambahkan field lainnya -->
    </div>

    <div class="mt-6 text-right">
        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">Lanjut</button>
    </div>
</form>
