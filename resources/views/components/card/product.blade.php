{{-- Komponen Card Product --}}
@props(['product'])

<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 border-primary">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top img-fluid" alt="{{ $product->name }}" style="height: 220px; object-fit: cover;">
        @else
            <img src="{{ asset('img/no-image.png') }}" class="card-img-top img-fluid" alt="No Image" style="height: 220px; object-fit: cover;">
        @endif
        <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text text-truncate">{{ $product->description }}</p>
            <span class="text-primary fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus produk ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </div>
    </div>
</div>
