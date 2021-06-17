<!DOCTYPE html>
<html>
<head>
	<title>SilokerNF</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/main.css">
      <link rel="shortcut icon" href="<?= base_url('assets/img/img-logo.jpeg') ?>" type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="<?= base_url() ?>/assets/img/img-logo.jpeg" width="50px">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page') ?>">Home</a>
      </li>
      <?php if(! $this->session->has_userdata('username')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/registrasi') ?>">Registrasi</a>
      </li>
      <li class="nav-itme">
        <a class="nav-link" href="<?= base_url('admin/login') ?>">Login</a>
      </li>
      <?php else: ?>
      <li class="nav-itme">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </li>
      <?php endif; ?>

      <?php if($this->session->has_userdata('username') ):?>
      <?php if(!$this->session->has_userdata('role')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pelamar/profil') ?>"> Profile </a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <?php if($this->session->has_userdata('role')): ?>
        <a class="nav-link" href="<?= base_url('admin/career') ?>">Career</a>
        <?php else: ?>
        <a class="nav-link" href="<?= base_url('page/cara_apply') ?>">Career</a>
        <?php endif;?>
      </li>
      <li class="nav-item">
        <?php if($this->session->has_userdata('role')): ?>
        <a class="nav-link" href="<?= base_url('admin/test') ?>">Test Online</a>
        <?php else: ?>
        <a class="nav-link" href="<?= base_url('page/test_online') ?>">Test Online</a>
        <?php endif; ?>
      </li>
      <?php endif; ?>
    </ul>
  </div>
 </div>
</nav>

<div class="container">

<?= $content_view ?>
	
</div>

<div class="footer text-center text-secondary mt-5 navbar-expand-lg navbar-bottom">
CopyRight &copy; 2019 
</div>


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-dark" href="<?= base_url('pelamar/logout') ?>">Logout</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/pover.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>

<script type="text/javascript" src="<?= base_url() ?>/assets/js/scripts.js"></script>
</body>
</html>
