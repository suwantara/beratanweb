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
                    <x-form.textarea name="content" label="Content" rows="10" required />

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error('CKEditor init error:', error);
                });
        });
    </script>
    @endpush
</x-app-layout>
