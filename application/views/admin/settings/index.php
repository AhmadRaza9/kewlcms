<?php if ($this->session->flashdata('setting_saved')): ?>
    <?php echo "<p class='alert alert-success mt-3'>" . $this->session->flashdata('setting_saved'); ?>
<?php endif;?>




<div class="pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Cannot Delete Any Settings Of This CMS.</h1>
</div>
<div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
  <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / Setting</span></p>
  </div>

<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th width="70">#</th>
        <th>Key</th>
        <th>Value</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($settings as $setting): ?>
        <tr>
            <td><?php echo $setting->id; ?></td>
            <td><span class="badge bg-primary"><?php echo $setting->set_key; ?></span></td>
            <td><?php echo word_limiter($setting->value, 10); ?></td>
            <td>
                <a href="settings/edit/<?php echo $setting->id; ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>