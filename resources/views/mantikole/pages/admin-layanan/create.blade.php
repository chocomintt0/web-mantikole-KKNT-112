@extends('mantikole.layout.admin')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <!-- <h1 class="text-3xl font-bold text-blue-700 mb-6">Tambah Layanan</h1> -->
        <div class="flex items-center justify-between mt-2">
            <h1 class="text-3xl font-bold text-blue-700 mb-6">Tambah Pengumuman</h1>
            <a href="{{ route('admin-layanan.index') }}"
               class="text-blue px-5 py-3 "><- Kembali</a>
        </div>

        <form action="{{ route('admin-layanan.store') }}" method="POST" class="bg-white p-8 rounded-2xl shadow border-l-4 border-blue-500">
            @include('mantikole.pages.admin-layanan._form', ['submit' => 'Simpan'])
        </form>
    </div>
</section>
@endsection