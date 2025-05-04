<section class="mb-4">
    <header class="mb-4">
        <h2 class="h5 text-dark fw-bold">
            Hapus Akun
        </h2>

        <p class="text-muted small">
            Ketika Anda menghapus akun ini, semua data dan informasi yang terkait dengan akun ini akan dihapus secara permanen.
        </p>
    </header>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        Hapus Akun
    </button>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <p class="text-muted">
                            Apakah Anda yakin ingin menghapus akun ini? Semua data akan terhapus permanen.
                        </p>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="form-control"
                                placeholder="Masukkan password Anda"
                                required
                            />
                            <x-input-error :messages="$errors->userDeletion->get('password')" class="text-danger small mt-1" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
