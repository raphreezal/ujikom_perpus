<main class="main-content position-relative border-radius-lg">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom px-4 shadow-sm bg-white">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="https://openlibrary.org/static/images/openlibrary-logo-tighter.svg" alt="Open Library" height="30" class="me-2">
        <strong>Admin Panel</strong>
      </a>

      <!-- Toggle (for mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar content -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <!-- Left side -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Manajemen Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pengguna</a>
          </li>
        </ul>

        <!-- Admin Info -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <span class="nav-link">Halo, Admin!</span>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-danger btn-sm" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Dashboard Content -->
  <div class="container mt-4">
  <h2>Dashboard Admin</h2>
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card border-start border-primary border-4 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Total Buku</h5>
          <p class="fs-3 fw-bold"><?= $total_buku ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card border-start border-success border-4 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Total Pengguna</h5>
          <p class="fs-3 fw-bold"><?= $total_user ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Ringkasan Lain -->
<div class="card mt-4 shadow-sm">
  <div class="card-header bg-light">
    <h5 class="mb-0">Ringkasan Aktivitas Terbaru</h5>
  </div>
  <div class="card-body">
    <ul class="list-group list-group-flush">
      
      <?php if (!empty($buku_terakhir)): ?>
        <li class="list-group-item">
          📚 Buku terbaru ditambahkan: <strong><?= htmlspecialchars($buku_terakhir->judul) ?></strong>
        </li>
      <?php else: ?>
        <li class="list-group-item">📚 Belum ada buku yang ditambahkan.</li>
      <?php endif; ?>

      <?php if (!empty($pengguna_baru)): ?>
        <?php foreach ($pengguna_baru as $pengguna): ?>
          <li class="list-group-item">
            👤 Pengguna baru <strong><?= htmlspecialchars($pengguna->name) ?></strong> telah mendaftar pada <em><?= date('d M Y', strtotime($pengguna->date_created)) ?></em>.
          </li>
        <?php endforeach; ?>
      <?php else: ?>
        <li class="list-group-item">👤 Belum ada pengguna baru yang terdaftar.</li>
      <?php endif; ?>

      <li class="list-group-item">🔄 Buku "Matematika Dasar" telah dikembalikan.</li>
    </ul>
  </div>
</div>
