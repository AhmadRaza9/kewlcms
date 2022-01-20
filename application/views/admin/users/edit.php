<div class="pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit User</h1>
</div>
<div class="col">
    <?php echo validation_errors('<p class="alert alert-danger">'); ?>
       <form method="POST"  action="http://kewlcms.test/index.php/admin/users/edit/<?php echo $user->id; ?>">
        <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
            <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / <a href="http://kewlcms.test/index.php/admin/users">Users</a> / Add User</span></p>
            <div class="btns">
                <input type="submit" name="submit" class="btn btn-outline-success" value="Save">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>First Name</strong></label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="<?php echo $user->first_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Last Name</strong></label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="<?php echo $user->last_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Username</strong></label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $user->username; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email Address" value="<?php echo $user->email; ?>">
        </div>
        <div class="mb-3">
            <label for="form-label"><strong>User Group</strong></label>
            <select name="group" class="form-control">
                <?php foreach ($groups as $group): ?>
                    <?php if ($group->id == $user->group_id) {
    $selected = 'selected';
} else {
    $selected = ' ';
}
?>
                    <option value="<?php echo $group->id; ?>" <?php echo $selected ?> ><?php echo $group->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </form>
</div>
</div>