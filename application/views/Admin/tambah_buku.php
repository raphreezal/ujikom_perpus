<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tambah Buku Baru</h6>
        </div>
        <div class="card-body px-4 pt-4 pb-2">
          <form action="<?= base_url('admin/tambah_buku') ?>" method="post" enctype="multipart/form-data">
            <!-- Judul Buku Input -->
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" name="judul" id="judul" required>
            </div>

            <!-- Slug Input -->
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" name="slug" id="slug" required>
            </div>

            <!-- Deskripsi Input -->
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" required></textarea>
            </div>

            <!-- Cover Buku File Input -->
            <div class="mb-3">
              <label for="cover" class="form-label">Cover Buku (jpg/png)</label>
              <input type="file" class="form-control" name="cover" id="cover" accept="image/jpeg, image/png" required>
            </div>

            <!-- File Buku PDF Input -->
            <div class="mb-3">
              <label for="file_pdf" class="form-label">File Buku (PDF)</label>
              <input type="file" class="form-control" name="file_pdf" id="file_pdf" accept="application/pdf" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>