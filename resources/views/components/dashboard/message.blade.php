<!-- filepath: d:\app\laragon\www\project-smt-2\dairyweb\resources\views\dashboard\messages.blade.php -->
@props(['messages'])
<div class="container py-4">
    <h1 class="mb-4">Pesan Masuk</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Subjek</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $messages->links() }}
</div>
