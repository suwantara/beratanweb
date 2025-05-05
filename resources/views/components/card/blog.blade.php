
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10">
            <div class="card h-100 border-primary">
                <img src="{{ Storage::url($image) }}" class="card-img-top img-square" alt="{{ $title }}" style="width: 500px; height: 500px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $title }}</h5>
                    <p class="card-text text-truncate-3">{{ $excerpt }}</p>
                    <a href="{{ $url }}" class="stretched-link"></a>
                </div>
                <div class="card-footer border-top border-primary bg-primary">
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-light">{{ $author }}</small>
                        <small class="text-light">{{ $createdAt }}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <!-- Sidebar: Categories -->
            <div class="mb-4">
                <h4>Kategori</h4>
                <ul class="list-group">
                    @foreach($post->category->posts as $relatedPost)
                        <li class="list-group-item">
                            <a href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
