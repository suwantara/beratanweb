<!-- filepath: d:\app\laragon\www\project-smt-2\dairyweb\resources\views\dashboard\messages.blade.php -->
@props(['messages'])
<div class="container py-4">
    <h1 class="mb-4">Pesan Masuk</h1>

    @if($messages->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengirim</th>
                    <th>Email Pengirim</th>
                    <th>Tentang</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <!-- Gunakan perhitungan untuk nomor urut -->
                        <td>{{ ($messages->currentPage() - 1) * $messages->perPage() + $loop->iteration }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Gunakan Bootstrap Pagination -->
        <div class="d-flex justify-content-center">
            {{ $messages->links('pagination::bootstrap-5') }}
        </div>
    @else
        <p class="text-center text-muted">Tidak ada pesan</p>
    @endif
</div>
