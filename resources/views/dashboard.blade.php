<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0 text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="row g-4">
            {{-- Widget Total Pesan --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Pesan</h5>
                        <p class="card-text h2">{{ \App\Models\Message::count() }}</p>
                    </div>
                </div>
            </div>

            {{-- Widget Pesan Baru --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pesan Baru</h5>
                        <p class="card-text h2">{{ \App\Models\Message::whereNull('read_at')->count() }}</p>
                    </div>
                </div>
            </div>

            {{-- Widget Total Produk --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Produk</h5>
                        <p class="card-text h2">{{ \App\Models\Product::count() }}</p>
                    </div>
                </div>
            </div>

            {{-- Widget Total Blog --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Post</h5>
                        <p class="card-text h2">{{ \App\Models\Post::count() }}</p>
                    </div>
                </div>
            </div>

            {{-- Widget Total Kategori --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Kategori</h5>
                        <p class="card-text h2">{{ \App\Models\Category::count() }}</p>
                    </div>
                </div>
            </div>

            {{-- Widget Total User --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total User</h5>
                        <p class="card-text h2">{{ \App\Models\User::count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Add more dashboard widgets here -->
        </div>
    </div>
</x-app-layout>
