<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>KEWL CMS | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/login.css" rel="stylesheet" />

    <!-- Favicons -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="text-center">
    <main class="form-signin">
      <!-- <form>
        <h1 class="h3 mb-3 fw-normal">KEWL CMS</h1>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="name@example.com"
            name="username"
          />
          <label for="floatingInput">User Name</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            placeholder="Password"
            name="password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        <input type="submit" value="Login" class="w-100 btn btn-lg btn-primary">

      </form> -->

    <?php $attributes = array('class' => 'form_signin');?>

    <?php echo form_open('index.php/admin/authenticate/login', $attributes); ?>


        <h1 class="h3 mb-3 fw-normal">KEWL CMS</h1>
        <?php echo validation_errors('<p class="alert alert-danger">'); ?>
            <?php if ($this->session->flashdata('fail_login')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('fail_login'); ?>
            <?php endif;?>
            <?php if ($this->session->flashdata('access_denied')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('access_denied'); ?>
            <?php endif;?>
            <?php if ($this->session->flashdata('logged_out')): ?>
                <?php echo '<p class="alert alert-success">' . $this->session->flashdata('logged_out'); ?>
            <?php endif;?>

            <?php
$data = array(
    'name' => 'username',
    'class' => 'form-control mb-2',
    'placeholder' => 'Username',
);
echo form_input($data);
?>

            <?php
$data = array(
    'name' => 'password',
    'class' => 'form-control mb-2',
    'placeholder' => 'Password',
);
echo form_password($data);
?>

            <?php
$data = array(
    'name' => 'submit',
    'class' => 'form-control btn btn-primary',
    'value' => 'Login',
);
echo form_submit($data);
?>


    <?php form_close();?>

    </main>
  </body>
</html>
