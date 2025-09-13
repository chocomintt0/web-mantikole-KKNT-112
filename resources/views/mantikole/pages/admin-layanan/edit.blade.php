@extends('mantikole.layout.app')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-blue-700 mb-6">Edit Layanan</h1>

        <form action="{{ route('admin-layanan.update', $adminLayanan) }}" method="POST" class="bg-white p-8 rounded-2xl shadow border-l-4 border-blue-500">
            @method('PUT')
            @include('mantikole.pages.admin-layanan._form', ['submit' => 'Update', 'adminLayanan' => $adminLayanan])
        </form>
    </div>
</section>
@endsection
