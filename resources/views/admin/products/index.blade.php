<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 mb-0 text-gray-800">Manage Products</h2>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary text-white">
                <i class="bi bi-plus-lg"></i> Add New Product
            </a>
        </div>
    </x-slot>

<div class="container">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @forelse ($products as $product)
            <x-card.product :product="$product" />
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada produk.</div>
            </div>
        @endforelse
    </div>
</div>
</x-app-layout>
