<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <i class="fa-solid fa-phone"></i>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <i class="fa-solid fa-envelope"></i>
          </a>
        </div>
      </div>
      <div class="row">
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/');?>/js/core/popper.min.js"></script>
  <script src="<?php echo base_url('assets/');?>/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/');?>/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url('assets/');?>/js/plugins/smooth-scrollbar.min.js"></script>
   <!-- Toggle Password Script -->
   <script>
        document.querySelectorAll('.toggle-password').forEach(function (icon) {
            icon.addEventListener('click', function () {
                const input = document.querySelector(icon.getAttribute('toggle'));
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
    </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/');?>/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>