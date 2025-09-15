@extends('mantikole.layout.admin')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-blue-700 mb-6">Edit Berita</h1>

        <form action="{{ route('admin-berita.update', $berita) }}" method="POST" enctype="multipart/form-data"
              class="bg-white p-8 rounded-2xl shadow border-l-4 border-blue-500">
            @method('PUT')
            @include('mantikole.pages.admin-berita._form', ['submit' => 'Update', 'berita' => $berita])
        </form>
    </div>
</section>
@endsection