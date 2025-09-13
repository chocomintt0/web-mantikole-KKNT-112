@csrf
<div class="space-y-6 bg-white p-6 rounded-2xl shadow-md">
    <div>
        <label class="block font-medium text-gray-700">Nama Layanan</label>
        <input type="text" name="nama" value="{{ old('nama', $adminLayanan->nama ?? '') }}"
               class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
               required>
        @error('nama') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-medium text-gray-700">Deskripsi</label>
        <textarea name="deskripsi" rows="6"
                  class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
                  required>{{ old('deskripsi', $adminLayanan->deskripsi ?? '') }}</textarea>
        @error('deskripsi') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-medium text-gray-700">Status</label>
        <select name="status"
                class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
                required>
            <option value="aktif" {{ old('status', $adminLayanan->status ?? 'aktif') == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $adminLayanan->status ?? '') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
        @error('status') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="flex justify-end gap-3 pt-6">
        <a href="{{ route('admin-layanan.index') }}"
           class="px-6 py-3 rounded-xl bg-gray-100 text-gray-700 font-medium shadow hover:bg-gray-200 hover:shadow-md transition">
            Batal
        </a>
        <button type="submit"
                class="px-6 py-3 rounded-xl bg-blue-600 text-white font-medium shadow hover:bg-blue-700 hover:shadow-lg transition">
            {{ $submit ?? 'Simpan' }}
        </button>
    </div>
</div>
