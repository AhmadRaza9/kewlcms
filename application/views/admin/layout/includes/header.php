
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
    <title>Dashboard | Welcome</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/CMS.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/custom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

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
  <body>

      <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 p-0" href="<?php echo base_url(); ?>index.php/admin/dashboard">
          <img src="<?php echo base_url(); ?>assets/images/<?php echo $this->global_data['site_logo']; ?>" alt="" width="109px"></a>
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php $attributes = array('class' => 'navbar-form navbar-right', 'style' => 'flex:1;');?>
      <?php echo form_open('index.php/admin/articles/index', $attributes); ?>
      <?php $data = array(
    'name' => 'keywords',
    'class' => 'form-control',
    'placeholder' => 'Search Articles...');
echo form_input($data);?>
      <?php echo form_close(); ?>


      <!-- <input class="form-control form-control-dark" type="text" id="search_input" placeholder="Search Article..."/> -->


      <div class="navbar-nav">
        <div class="nav-item text-nowrap" id="dash_nav_link">
          <a class="nav-link px-3" href="<?php echo base_url(); ?>index.php" target="_blank">View Site</a>
          <a class="nav-link px-3" href="<?php echo base_url(); ?>index.php/admin/logout">Log out</a>
        </div>
      </div>
    </header>