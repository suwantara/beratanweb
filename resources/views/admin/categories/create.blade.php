<!-- filepath: d:\app\laragon\www\project-smt-2\dairyweb\resources\views\admin\categories\create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0 text-gray-800">Create New Category</h2>
    </x-slot>

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary ms-2">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
