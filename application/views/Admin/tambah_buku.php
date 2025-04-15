<div class="container mt-5">
  <h2 class="mb-4">Tambah Buku</h2>

  <?php if ($this->session->flashdata('upload_error')): ?>
    <div class="alert alert-danger">
      <?= $this->session->flashdata('upload_error'); ?>
    </div>
  <?php endif; ?>

  <form action="<?= base_url('admin/post_buku') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="judul" class="form-label">Judul Buku</label>
      <input type="text" class="form-control" name="judul" required>
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug" required>
    </div>

    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
    </div>

    <div class="mb-3">
      <label for="cover" class="form-label">Cover Buku</label>
      <input type="file" class="form-control" name="cover" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Buku</button>
    <a href="<?= base_url('admin/dashmin') ?>" class="btn btn-secondary">Batal</a>
  </form>
</div>
