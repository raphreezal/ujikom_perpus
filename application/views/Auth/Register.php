<body>
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welkom op de website van de bibliotheek</h1>
                        <p class="text-lead text-white">"Socra De Libra"</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Registrasi Perpustakaan</h5>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nama lengkap Pengguna" value="<?= set_value('name'); ?>"
                                        aria-label="Nama lengkap">
                                    <?= form_error('name', '<small class="text-danger pl-3" style="font-size:0.75rem">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Masukkan alamat email" value="<?= set_value('email'); ?>"
                                        aria-label="Email">
                                    <?= form_error('email', '<small class="text-danger pl-3" style="font-size:0.75rem">', '</small>'); ?>
                                </div>

                                <!-- Password 1 -->
                                <div class="mb-3 position-relative">
                                    <input type="password" class="form-control" id="password1" name="password1"
                                        placeholder="Buat Kata Sandi" aria-label="Kata Sandi">
                                    <i class="fa fa-eye toggle-password"
                                        toggle="#password1"
                                        style="position:absolute; top:50%; right:10px; transform:translateY(-50%); cursor:pointer;"></i>
                                    <?= form_error('password1', '<small class="text-danger pl-3" style="font-size:0.75rem">', '</small>'); ?>
                                </div>

                                <!-- Password 2 -->
                                <div class="mb-3 position-relative">
                                    <input type="password" class="form-control" id="password2" name="password2"
                                        placeholder="Ulangi Kata Sandi" aria-label="Ulangi Kata Sandi">
                                    <i class="fa fa-eye toggle-password"
                                        toggle="#password2"
                                        style="position:absolute; top:50%; right:10px; transform:translateY(-50%); cursor:pointer;"></i>
                                    <?= form_error('password2', '<small class="text-danger pl-3" style="font-size:0.75rem">', '</small>'); ?>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar Akun</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Sudah punya akun? <a href="<?= base_url('auth'); ?>"
                                        class="text-dark font-weight-bolder">Masuk Sekarang!</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
