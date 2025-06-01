@props(['messages'])
<div class="container py-4">
    <h1 class="mb-4">
        Pesan Masuk
        @if($messages->where('read_at', null)->count() > 0)
            <span class="badge bg-danger">{{ $messages->where('read_at', null)->count() }} Baru</span>
        @endif
    </h1>

    @if($messages->count() > 0)
        <div class="row g-4">
            @foreach ($messages as $message)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 {{ is_null($message->read_at) ? 'border-primary' : '' }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-1">{{ $message->name }}</h5>
                                @if(is_null($message->read_at))
                                    <span class="badge bg-primary">Baru</span>
                                @endif
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $message->email }}</h6>
                            <p class="card-text text-muted small mb-2">
                                {{ $message->created_at->format('d M Y, H:i') }}
                            </p>
                            <h6 class="fw-bold mb-2">{{ $message->subject }}</h6>
                            <p class="card-text mb-3">{{ Str::limit($message->message, 100) }}</p>
                            <button type="button" class="text-white btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}">
                                Baca Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fixed Modal Structure -->
                <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-white">
                            <div class="modal-header border-bottom">
                                <h5 class="modal-title">Pesan dari {{ $message->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <strong>Pengirim:</strong>
                                    <p class="mb-1">{{ $message->name }} ({{ $message->email }})</p>
                                </div>
                                <div class="mb-3">
                                    <strong>Tanggal:</strong>
                                    <p class="mb-1">{{ $message->created_at->format('d M Y, H:i') }}</p>
                                </div>
                                <div class="mb-3">
                                    <strong>Subjek:</strong>
                                    <p class="mb-1">{{ $message->subject }}</p>
                                </div>
                                <div class="mb-3">
                                    <strong>Pesan:</strong>
                                    <p class="mb-1">{{ $message->message }}</p>
                                </div>
                            </div>
                            <div class="modal-footer border-top">
                                @if(is_null($message->read_at))
                                    <form action="{{ route('dashboard.messages.markAsRead', $message->id) }}" method="POST" class="me-2">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">
                                            <i class="bi bi-check2"></i> Tandai Sudah Dibaca
                                        </button>
                                    </form>
                                @endif
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $messages->links('pagination::bootstrap-5') }}
        </div>
    @else
        <div class="text-center py-5">
            <i class="bi bi-inbox display-1 text-muted"></i>
            <p class="text-muted mt-3">Tidak ada pesan</p>
        </div>
    @endif
</div>
