
<div class="pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Add New User</h1>
</div>
<div class="col">
    <?php echo validation_errors('<p class="alert alert-danger">'); ?>

    <form method="POST"  action="http://kewlcms.test/index.php/admin/users/add">
        <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
            <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / <a href="http://kewlcms.test/index.php/admin/users">Users</a> / Add User</span></p>
            <div class="btns">
                <input type="submit" name="submit" class="btn btn-outline-success" value="Save">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>First Name</strong></label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Last Name</strong></label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Username</strong></label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>
        <div class="mb-3">
            <label for="form-label"><strong>User Group</strong></label>
            <select name="group" class="form-control">
                <?php foreach($groups as $group) :?>
                    <option value="<?php echo $group->id; ?>"><?php echo $group->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Password</strong></label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
