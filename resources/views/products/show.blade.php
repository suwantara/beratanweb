@extends('layouts.app')
@section('title', $product->name)
@section('content')



<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <a href="{{ route('product') }}" class="btn btn-outline-primary mb-4">
            <i class="bi bi-arrow-left"></i> Kembali ke Daftar Produk
        </a>
    </div>
    <div class="container text-center">
        <div class="row gx-2">
            <div class="col-md-5 mb-4 mb-md-0">
                <img class="img-fluid rounded"
                     src="{{ $product->image ? asset('storage/' . $product->image) : asset('img/no-image.png') }}"
                     alt="{{ $product->name }}">
            </div>
            <div class="col-md-7 text-start ps-3">
                <div class="border-bottom pb-3">
                    <h3>{{ $product->name }}</h3>
                    <p class="fs-6 fw-bold">{{ $product->short_description ?? 'Produk susu berkualitas dari peternakan kami.' }}</p>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="mt-4">
                    <h4>Harga</h4>
                    <p class="fs-5 fw-semi-bold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                    {{-- Jika ingin multi-ukuran/harga, tambahkan field di database dan loop di sini --}}
                </div>
                <div class="mt-4">
                    <div class="d-flex justify-content-start mb-3">
                        <button type="button" class="btn btn-secondary py-3 px-4 me-3">Beli Sekarang</button>
                        <button type="button" class="btn border border-primary border-2 px-3 text-primary">Tambahkan Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
