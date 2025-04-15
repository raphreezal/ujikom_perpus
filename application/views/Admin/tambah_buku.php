<main class="main-content position-relative border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card shadow-lg mb-4">
          <div class="card-header bg-gradient-primary text-white py-3 px-4">
            <h5 class="mb-0">Tambah Buku Baru</h5>
          </div>
          <div class="card-body px-4 pt-4 pb-2">
            <form action="<?= base_url('admin/post_buku') ?>" method="post" enctype="multipart/form-data">
              
              <!-- Judul Buku -->
              <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control shadow-sm" name="judul" id="judul" required>
              </div>

              <!-- Penulis Buku -->
              <div class="mb-3">
                <label for="writer" class="form-label">Penulis</label>
                <input type="text" class="form-control shadow-sm" name="writer" id="writer" required>
              </div>

              <!-- Detail / Deskripsi Buku -->
              <div class="mb-3">
                <label for="detail" class="form-label">Deskripsi / Detail Buku</label>
                <textarea class="form-control shadow-sm" name="detail" id="detail" rows="4" required></textarea>
              </div>

              <!-- Upload Cover -->
              <div class="mb-3">
                <label for="cover" class="form-label">Cover Buku (JPG / PNG)</label>
                <input type="file" class="form-control shadow-sm" name="cover" id="cover" accept="image/jpeg, image/png" required>
              </div>

              <!-- Upload PDF (opsional jika kolom sudah dibuat di DB) -->
              <!--
              <div class="mb-3">
                <label for="file_pdf" class="form-label">File Buku (PDF)</label>
                <input type="file" class="form-control shadow-sm" name="file_pdf" id="file_pdf" accept="application/pdf">
              </div>
              -->

              <!-- Submit Button -->
              <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-success shadow-sm px-4">
                  <i class="fas fa-plus me-2"></i> Tambah Buku
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
