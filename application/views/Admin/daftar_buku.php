<main class="main-content position-relative border-radius-lg">
    <div class="container mt-4">
        <h3 class="mb-3"><?= $title ?></h3>

        <!-- Form Tambah/Edit Buku -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= base_url('admin/simpan_buku') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_buku" id="id_buku">
                    <div class="mb-3">
                        <label>Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Cover Buku</label>
                        <input type="file" name="cover" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" onclick="clearForm()" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>

        <!-- Tabel Buku -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Buku</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Deskripsi</th>
                                <th>Cover</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($buku as $b): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $b->judul ?></td>
                                    <td><?= $b->slug ?></td>
                                    <td><?= $b->detail ?></td>
                                    <td>
                                        <?php if ($b->cover): ?>
                                            <img src="<?= base_url('uploads/cover/' . $b->cover) ?>" alt="cover" width="50">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="editBuku(<?= htmlspecialchars(json_encode($b), ENT_QUOTES, 'UTF-8') ?>)">Edit</button>
                                        <a href="<?= base_url('admin/hapus_buku/' . $b->id_buku) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (empty($buku)) echo '<tr><td colspan="6" class="text-center">Tidak ada data buku</td></tr>'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- JS untuk isi form saat klik Edit -->
<script>
    function editBuku(data) {
        document.getElementById('id_buku').value = data.id_buku;
        document.getElementById('judul').value = data.judul;
        document.getElementById('slug').value = data.slug;
        document.getElementById('deskripsi').value = data.detail;
    }

    function clearForm() {
        document.getElementById('id_buku').value = '';
        document.getElementById('judul').value = '';
        document.getElementById('slug').value = '';
        document.getElementById('deskripsi').value = '';
    }
</script>