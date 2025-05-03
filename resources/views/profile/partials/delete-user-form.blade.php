<section class="mb-4">
    <header class="mb-4">
        <h2 class="h5 text-dark fw-bold">
            Hapus Akun
        </h2>

        <p class="text-muted small">
            Ketika Anda menghapus akun ini, semua data dan informasi yang terkait dengan akun ini akan dihapus secara permanen. Sebelum menghapus akun Anda, silakan unduh data atau informasi yang ingin Anda simpan.
        </p>
    </header>

    <button
        type="button"
        class="btn btn-danger"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >
        Hapus Akun
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
            @csrf
            @method('delete')

            <h2 class="h5 text-dark fw-bold">
                Apakah Anda yakin ingin menghapus akun ini?
            </h2>

            <p class="text-muted small">
                Ketika Anda menghapus akun ini, semua data dan informasi yang terkait dengan akun ini akan dihapus secara permanen. Sebelum menghapus akun Anda, silakan unduh data atau informasi yang ingin Anda simpan.
            </p>

            <div class="mb-3">
                <label for="password" class="form-label">
                    Password
                </label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control"
                    placeholder="Password"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="text-danger small mt-1" />
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-secondary" x-on:click="$dispatch('close')">
                    Batal
                </button>

                <button type="submit" class="btn btn-danger">
                    Hapus Akun
                </button>
            </div>
        </form>
    </x-modal>
</section>
