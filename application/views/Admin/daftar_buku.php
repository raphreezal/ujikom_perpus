<main class="main-content position-relative border-radius-lg">
  <div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Buku</h2>

    <?php if (!empty($buku)): ?>
      <div class="row">
        <?php foreach ($buku as $item): ?>
          <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-light">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><?= htmlspecialchars($item->judul) ?></h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>📝 Slug:</strong> <span><?= htmlspecialchars($item->slug) ?></span></li>
                  <li class="list-group-item"><strong>📖 Deskripsi:</strong> <br><?= nl2br(htmlspecialchars($item->detail)) ?></li>
                  <li class="list-group-item">
                    <strong>🖼️ Cover:</strong>
                    <?php if (!empty($item->cover)): ?>
                      <div class="text-center mt-2">
                        <img src="<?= base_url('uploads/cover/' . $item->cover) ?>" alt="Cover Buku" class="img-fluid" style="max-width: 150px;">
                      </div>
                    <?php else: ?>
                      <div class="text-center"><em>Tidak ada cover</em></div>
                    <?php endif; ?>
                  </li>
                </ul>
              </div>
              <div class="card-footer text-muted text-center">
                <small>Perpus Kegiatan</small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="alert alert-info mt-4 text-center">
        Belum ada data buku yang ditambahkan.
      </div>
    <?php endif; ?>
  </div>
</main>
