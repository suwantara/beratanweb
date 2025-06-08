@props([
    'action', // route action
    'message' => 'Apakah Anda yakin ingin menghapus data ini?', // pesan konfirmasi
    'buttonClass' => 'btn btn-sm btn-danger mx-2',
    'iconClass' => 'bi bi-trash',
    'formId' => 'form-delete-' . uniqid(),
])

<form id="{{ $formId }}" action="{{ $action }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="button" class="{{ $buttonClass }}" onclick="confirmDelete('{{ $formId }}', '{{ $message }}')">
        <i class="{{ $iconClass }}"></i>
    </button>
</form>
