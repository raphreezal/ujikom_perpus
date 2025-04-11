<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Masuk Situs Perpustakaan</h4>
                                    <p class="mb-0">Masukkan email dan kata sandi untuk masuk</p>
                                </div>
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <form role="form" method="post" action="<?php echo base_url('auth/login'); ?>">
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan alamat email" value="<?php echo set_value('email'); ?>">
                                            <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan kata sandi">
                                            <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Tidak Punya akun?
                                        <a href="<?php echo base_url('auth/register');?>" class="text-primary text-gradient font-weight-bold">Daftar disini!</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Seorang pembaca hidup seribu kehidupan sebelum dia meninggal"</h4>
                                <p class="text-white position-relative">- George RR Martin.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Core JS Files -->
    <script src="<?php echo base_url('assets/');?>js/core/popper.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/core/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/plugins