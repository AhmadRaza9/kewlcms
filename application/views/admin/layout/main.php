<!-- header -->
<?php $this->load->view('admin/layout/includes/header');?>

    <div class="container-fluid">
      <div class="row">

        <!-- sidebar -->
        <?php $this->load->view('admin/layout/includes/sidebar');?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <?php $this->load->view($main_content);?>
        </main>
      </div>
    </div>

<!-- footer -->
<?php $this->load->view('admin/layout/includes/footer');?>