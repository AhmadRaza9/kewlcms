
<div class="pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit</h1>
</div>
<div class="col">
    <?php echo validation_errors('<p class="alert alert-danger">'); ?>
    <form method="post" action="http://kewlcms.test/index.php/admin/settings/edit/<?php echo $settings->id; ?>">
        <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
        <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / <a href="http://kewlcms.test/index.php/admin/settings">Setting</a> / <?php echo $settings->set_key; ?></span></p>
        <div class="btns">
            <input type="submit" name="submit" class="btn btn-outline-success" value="Save">
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong><?php echo $settings->set_key; ?></strong></label>
            <input type="text" class="form-control" name="name" placeholder="Enter Group Name" value="<?php echo $settings->value; ?>">
        </div>

    </form>
</div>
</div>
