<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-xl-none" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="<?= base_url('libra'); ?>">
      <img src="<?= base_url('assets/img/logo-ct-dark.png'); ?>" width="26" height="26" class="navbar-brand-img h-100" alt="logo">
      <span class="ms-1 font-weight-bold">Libra</span>
    </a>
  </div>

  <hr class="horizontal dark mt-0">

  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <?php if ($this->session->userdata('role') == 'admin'): ?>
        <!-- Admin: Kelola Buku -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'buku') ? 'active' : '' ?>" href="<?= base_url('buku'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kelola Buku</span>
          </a>
        </li>

        <!-- Admin: Kelola Pengguna -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'user') ? 'active' : '' ?>" href="<?= base_url('user'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kelola Pengguna</span>
          </a>
        </li>

      <?php else: ?>
        <!-- User: Baca Buku -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'baca') ? 'active' : '' ?>" href="<?= base_url('libra/index'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-book-bookmark text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Baca Buku</span>
          </a>
        </li>

        <!-- User: Buku Favorit -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'favorit') ? 'active' : '' ?>" href="<?= base_url('libra/buku_fisik'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-like-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Buku Favorit</span>
          </a>
        </li>

        <!-- User: Riwayat Baca -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'riwayat') ? 'active' : '' ?>" href="<?= base_url('riwayat'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-time-alarm text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Baca</span>
          </a>
        </li>
      <?php endif; ?>

      <!-- Logout Section -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-button-power text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Logout</span>
        </a>
      </li>

    </ul>
  </div>
</aside>
