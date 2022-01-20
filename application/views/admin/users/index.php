<div class="pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Users</h1>
</div>
<div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
  <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / Users</span></p>
  </div>
<div class="d-flex justify-content-between align-items-center">
  <h2></h2>
  <a href="users/add" class="btn btn-success">Add User</a>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th width="70" scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
          <tr>
              <td><?php echo $user->id; ?></td>
              <td><?php echo $user->first_name . $user->last_name; ?></td>
              <td>
                  <a href="users/edit/<?php echo $user->id; ?>" class="btn btn-primary">Edit</a>
                  <a href="http://kewlcms.test/index.php/admin/users/delete/<?php echo $user->id; ?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>