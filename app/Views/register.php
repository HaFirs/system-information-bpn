<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register - ATR/BPN Kota Palangka Raya</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('themes/plugins'); ?>/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('themes/dist'); ?>/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?php echo base_url('home'); ?>"><b>ATR/BPN</b> <br>Kota Palangka Raya</a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Registrasi Untuk Menjadi Admin</p>
        <?php
          $errors = session()->getFlashdata('errors');
          if(!empty($errors)){
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger">
              Whoops! Ada kesalahan saat input data, yaitu:
              <ul>
                <?php foreach ($errors as $error) { ?>
                <li><?php echo esc($error); ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php $inputs = session()->getFlashdata('inputs'); ?>
        <?php echo form_open('/auth/proses_register'); ?>
        <div class="input-group mb-3">
          <?php
            $username = [
              'type'  => 'text',
              'name'  => 'username',
              'id'    => 'username',
              'value' => $inputs['username'],
              'class' => 'form-control',
              'placeholder' => 'Username'
            ];
            echo form_input($username); 
          ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php
            $name = [
              'type'  => 'text',
              'name'  => 'name',
              'id'    => 'name',
              'value' => $inputs['name'],
              'class' => 'form-control',
              'placeholder' => 'Nama Lengkap'
            ];
            echo form_input($name); 
          ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php
            $email = [
              'type'  => 'email',
              'name'  => 'email',
              'id'    => 'email',
              'value' => $inputs['email'],
              'class' => 'form-control',
              'placeholder' => 'email_anda@example.com'
            ];
            echo form_input($email); 
          ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php
            $email = [
              'type'  => 'password',
              'name'  => 'password',
              'id'    => 'password',
              'value' => $inputs['password'],
              'class' => 'form-control',
              'placeholder' => 'Kata Sandi'
            ];
            echo form_input($email); 
          ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php
            $confirm_password = [
              'type'  => 'password',
              'name'  => 'confirm_password',
              'id'    => 'confirm_password',
              'value' => $inputs['confirm_password'],
              'class' => 'form-control',
              'placeholder' => 'Konfirmasi Kata Sandi'
            ];
            echo form_input($confirm_password); 
          ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
<script src="<?php echo base_url('themes/plugins'); ?>/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('themes/plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('themes/dist'); ?>/js/adminlte.min.js"></script>
</body>
</html>