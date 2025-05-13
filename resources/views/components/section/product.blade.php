@props(['products'])

<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Produk</p>
            <h1 class="mb-5">Produk Susu Kami untuk Hidup Sehat</h1>
        </div>
        <div class="row gx-4">
            @forelse($products as $product)
                <!-- Card produk sesuai struktur yang kamu inginkan -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.{{ ($loop->index + 1) * 2 }}s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid"
                                 src="{{ $product->image ? asset('storage/' . $product->image) : asset('img/no-image.png') }}"
                                 alt="{{ $product->name }}">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1"
                                   href="{{ route('products.show', $product->id) }}">
                                    <i class="bi bi-link"></i>
                                </a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="#">
                                    <i class="bi bi-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                            <span class="text-primary me-1">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            {{-- Jika ingin harga diskon, tambahkan field di database dan tampilkan di sini --}}
                            {{-- <span class="text-decoration-line-through">Rp {{ number_format($product->old_price, 0, ',', '.') }}</span> --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">Belum ada produk.</div>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Product End -->
