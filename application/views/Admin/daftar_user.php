<main class="main-content position-relative border-radius-lg">
    <div class="container mt-4">
        <h2 class="text-center"><?= $title ?></h2>

        <!-- Form Tambah User -->
        <form method="post" action="<?= base_url('admin/simpan_user') ?>" class="mb-4">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <select name="role_id" class="form-select">
                    <option value="1">Admin</option>
                    <option value="2">User </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah User</button>
        </form>

        <!-- Tabel User -->
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($user as $u): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $u->username ?></td>
                    <td><?= $u->email ?></td>
                    <td><?= $u->role_id == 1 ? 'Admin' : 'User ' ?></td>
                    <td>
                        <button 
                            class="btn btn-warning edit-btn" 
                            data-id="<?= $u->id ?>"
                            data-username="<?= $u->username ?>"
                            data-email="<?= $u->email ?>"
                            data-role="<?= $u->role_id ?>"
                            data-bs-toggle="modal" 
                            data-bs-target="#editUser Modal">
                            Edit
                        </button>
                        <a href="<?= base_url('admin/hapus_user/' . $u->id) ?>" class="btn btn-danger" onclick="return confirm('Hapus user ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="editUser Modal" tabindex="-1" aria-labelledby="editUser ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" id="editUser Form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="edit-username">Username</label>
                            <input type="text" name="username" id="edit-username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-email">Email</label>
                            <input type="email" name="email" id="edit-email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password (Kosongkan jika tidak diubah)</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="edit-role">Role</label>
                            <select name="role_id" id="edit-role" class="form-select">
                                <option value="1">Admin</option>
                                <option value="2">User </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.dataset.id;
        const username = this.dataset.username;
        const email = this.dataset.email;
        const role = this.dataset.role;

        document.getElementById('edit-id').value = id;
        document.getElementById('edit-username').value = username;
        document.getElementById('edit-email').value = email;
        document.getElementById('edit-role').value = role;

        document.getElementById('editUserForm').action = `<?= base_url('admin/update_user/') ?>${id}`;
    });
});
</script>
