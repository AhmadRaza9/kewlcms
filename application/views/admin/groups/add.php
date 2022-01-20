
<div class="pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Add New Group</h1>
</div>
<div class="col">
    <?php echo validation_errors('<p class="alert alert-danger">'); ?>
    <form method="post" action="http://kewlcms.test/index.php/admin/groups/add">
        <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
        <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / <a href="http://kewlcms.test/index.php/admin/groups">Groups</a> / Add Group</span></p>
        <div class="btns">
            <input type="submit" name="submit" class="btn btn-outline-success" value="Save">
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Group Name</strong></label>
            <input type="text" class="form-control" name="name" placeholder="Enter Group Name" value="<?php echo set_Value('name'); ?>">
        </div>

    </form>
</div>
</div>
