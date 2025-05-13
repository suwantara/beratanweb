@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3 text-white">Tambah Produk</a>

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
@endsection
