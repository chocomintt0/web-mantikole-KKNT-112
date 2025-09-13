@extends('mantikole.layout.app')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-blue-700 mb-6">Tambah Berita</h1>

        <form action="{{ route('admin-berita.store') }}" method="POST" enctype="multipart/form-data"
              class="bg-white p-8 rounded-2xl shadow border-l-4 border-blue-500">
            @include('mantikole.pages.admin-berita._form', ['submit' => 'Simpan'])
        </form>
    </div>
</section>
@endsection
