@csrf
<div class="space-y-6 bg-white p-6 rounded-2xl shadow-md">
    <!-- Judul -->
    <div>
        <label class="block font-medium text-gray-700">Judul</label>
        <input type="text" name="judul" value="{{ old('judul', $berita->judul ?? '') }}"
            class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
            required>
        @error('judul')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Slug -->
    <div>
        <label class="block font-medium text-gray-700">Slug (opsional)</label>
        <input type="text" name="slug" value="{{ old('slug', $berita->slug ?? '') }}"
            class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
            placeholder="otomatis dari judul jika dikosongkan">
        @error('slug')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Isi -->
    <div>
        <label class="block font-medium text-gray-700">Isi Berita</label>
        <textarea name="isi" rows="8"
            class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
            required>{{ old('isi', $berita->isi ?? '') }}</textarea>
        @error('isi')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Excerpt -->
    <div>
        <label class="block font-medium text-gray-700">Excerpt (ringkasan, opsional)</label>
        <textarea name="excerpt" rows="3"
            class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
            placeholder="Jika kosong, akan dibuat otomatis dari isi">{{ old('excerpt', $berita->excerpt ?? '') }}</textarea>
        @error('excerpt')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Gambar -->
    <div>
        <label class="block font-medium text-gray-700">Gambar (opsional)</label>
        <div class="mt-2 flex items-center gap-3">
            <label
                class="cursor-pointer bg-gray-100 px-4 py-2 rounded-lg border shadow-sm hover:bg-gray-200 transition">
                Pilih Gambar
                <input type="file" name="gambar" class="hidden" onchange="previewImage(event)">
            </label>
            <span class="text-gray-500 text-sm" id="file-name">Belum ada file dipilih</span>
        </div>
        @error('gambar')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror

        <div id="preview-container" class="mt-3">
            @isset($berita)
                @if ($berita->gambar_url)
                    <img src="{{ $berita->gambar_url }}" alt="gambar" class="h-32 rounded-lg object-cover">
                @endif
            @endisset
        </div>
    </div>

    <!-- Tanggal Terbit -->
    <div>
        <label class="block font-medium text-gray-700">Tanggal Terbit (opsional)</label>
        <input type="datetime-local" name="published_at"
            value="{{ old('published_at', isset($berita->published_at) ? $berita->published_at->format('Y-m-d\TH:i') : '') }}"
            class="w-full mt-2 border rounded-xl p-3 shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition">
        @error('published_at')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Tombol -->
    <div class="flex justify-end gap-3 pt-6">
        <a href="{{ route('admin-berita.index') }}"
            class="px-6 py-3 rounded-xl bg-gray-100 text-gray-700 font-medium shadow hover:bg-gray-200 hover:shadow-md transition">
            Batal
        </a>
        <button type="submit"
            class="px-6 py-3 rounded-xl bg-blue-600 text-white font-medium shadow hover:bg-blue-700 hover:shadow-lg transition">
            {{ $submit ?? 'Simpan' }}
        </button>
    </div>
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const fileName = document.getElementById('file-name');
        const previewContainer = document.getElementById('preview-container');

        if (file) {
            fileName.textContent = file.name;
            const reader = new FileReader();
            reader.onload = function(e) {
                previewContainer.innerHTML = `<img src="${e.target.result}" class="h-32 rounded-lg object-cover">`;
            }
            reader.readAsDataURL(file);
        } else {
            fileName.textContent = 'Belum ada file dipilih';
            previewContainer.innerHTML = '';
        }
    }
</script>
