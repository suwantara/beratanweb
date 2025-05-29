{{-- File: resources/views/admin/posts/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0 text-gray-800">Edit Post</h2>
    </x-slot>

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <x-form.input
                        name="title"
                        label="Title"
                        :value="old('title', $post->title)"
                        required
                    />

                    <x-form.select
                        name="category_id"
                        label="Category"
                        :options="$categories"
                        :selected="old('category_id', $post->category_id)"
                        required
                    />

                    <x-form.input
                        name="image"
                        label="Image"
                        type="file"
                        accept="image/*"
                    />

                    <x-form.textarea
                        name="excerpt"
                        label="Excerpt"
                        rows="3"
                        :value="old('excerpt', $post->excerpt)"
                        required
                    />

                    {{-- CKEditor Textarea --}}
                    <x-form.textarea
                        name="content"
                        label="Content"
                        rows="10"
                        :value="old('content', $post->content)"
                        required
                        id="content"
                    />

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Post</button>
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
