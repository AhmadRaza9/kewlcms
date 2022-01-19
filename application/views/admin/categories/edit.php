
<div class="pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Category</h1>
</div>
<div class="col">
    <?php echo validation_errors('<p class="alert alert-danger">'); ?>
    <form method="post" action="http://kewlcms.test/index.php/admin/categories/add/<?php echo $category->id; ?>">
        <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
        <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / <a href="http://kewlcms.test/index.php/admin/categories">Categories</a> / Edit Category</span></p>
        <div class="btns">
            <input type="submit" name="submit" class="btn btn-outline-success" value="Save">
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Category Name</strong></label>
            <input type="text" class="form-control" name="name" placeholder="Enter Category Name" value="<?php echo $category->name; ?>">
        </div>

    </form>
</div>
</div>
