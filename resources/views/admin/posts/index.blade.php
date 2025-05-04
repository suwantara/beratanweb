<!-- filepath: d:\app\laragon\www\project-smt-2\dairyweb\resources\views\admin\posts\index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 mb-0 text-gray-800">Manage Posts</h2>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Add New Post
            </a>
        </div>
    </x-slot>

    <div class="container py-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>
                                        <img src="{{ Storage::url($post->image) }}"
                                             alt="{{ $post->title }}"
                                             class="img-thumbnail me-2"
                                             style="width: 50px; height: 50px; object-fit: cover;">
                                        {{ $post->title }}
                                    </td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->author->name }}</td>
                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.posts.edit', $post) }}"
                                               class="btn btn-sm btn-info">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.posts.destroy', $post) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No posts found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
