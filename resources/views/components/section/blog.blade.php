<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Artikel Kami</p>
            <h1 class="mb-5">Artikel Terbaru</h1>
        </div>
        <div class="row g-4">
            <div class="col-4">
                <!-- Search Start -->
                <div class="shadow-sm pt-4 pb-5 px-4 rounded-2 border">
                    <h4 class="mb-4">Cari Artikel</h4>
                    <form action="{{ route('blog.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text"
                                   name="search"
                                   class="form-control border-primary"
                                   placeholder="Cari artikel..."
                                   value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
                <!-- Search End -->

                <!-- Category Start -->
                <div class="mt-5 shadow-sm pt-4 pb-5 px-4 rounded-2 border">
                    <h4 class="mb-4">Kategori</h4>
                    <div class="list-group">
                        @foreach($categories as $category)
                            <a href="{{ route('blog.index', ['category' => $category->id]) }}"
                               class="list-group-item list-group-item-action d-flex justify-content-between align-items-center
                                      {{ request('category') == $category->id ? 'active' : '' }}">
                                {{ $category->name }}
                                <span class="badge bg-primary rounded-pill">{{ $category->posts_count }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Posts Start -->
                <div class="mt-5 shadow-sm pt-4 pb-5 px-4 rounded-2 border">
                    <h4 class="mb-4">Artikel Terbaru</h4>
                    <div class="list-group">
                        @foreach($recentPosts as $post)
                            <a href="{{ route('blog.show', $post->slug) }}"
                               class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">{{ $post->title }}</h6>
                                    <small>{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                                <small class="text-muted">{{ $post->category->name }}</small>
                            </a>
                        @endforeach
                    </div>
                </div>
                <!-- Recent Posts End -->
            </div>

            <!-- Blog Posts Start -->
            <div class="col-8">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @forelse($posts as $post)
                        <div class="col">
                            <div class="card h-100 border-primary">
                                <img src="{{ Storage::url($post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text text-truncate-3">{{ $post->excerpt }}</p>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="stretched-link"></a>
                                </div>
                                <div class="card-footer border-top border-primary bg-primary">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-light">{{ $post->author->name }}</small>
                                        <small class="text-light">{{ $post->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info">
                                Tidak ada artikel yang ditemukan.
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination Start -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $posts->links() }}
                </div>
                <!-- Pagination End -->
            </div>
            <!-- Blog Posts End -->
        </div>
    </div>
</div>
