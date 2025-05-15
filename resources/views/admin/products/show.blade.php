{{-- filepath: d:\app\laragon\www\project-smt-2\dairyweb\resources\views\admin\products\show.blade.php --}}
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid mt-3">
            @endif
        </div>
    </div>
    <a href="{{ route('product') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
