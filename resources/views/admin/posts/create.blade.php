<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0 text-gray-800">Create New Post</h2>
    </x-slot>

    <div class="container py-4">
        @if($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="title" label="Title" required />
                    <x-form.select name="category_id" label="Category" :options="$categories" required />
                    <x-form.input name="image" label="Image" type="file" required accept="image/*" />
                    <x-form.textarea name="excerpt" label="Excerpt" rows="3" required />

                    {{-- Ganti komponen textarea content agar ada id="content" --}}
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" rows="10" required>{{ old('content') }}</textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary text-white">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
        {{-- Vite directive untuk CSS (pastikan sudah import summernote di app.js) --}}
        @vite(['resources/js/app.js'])
    @endpush

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#content').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
    @endpush
</x-app-layout>
