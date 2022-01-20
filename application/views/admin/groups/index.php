<?php if ($this->session->flashdata('group_saved')): ?>
    <?php echo "<p class='alert alert-success mt-3'>" . $this->session->flashdata('category_saved'); ?>
<?php endif;?>

<?php if ($this->session->flashdata('group_deleted')): ?>
    <?php echo "<p class='alert alert-danger mt-3'>" . $this->session->flashdata('category_deleted'); ?>
<?php endif;?>


<div class="pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Groups</h1>
</div>
<div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
  <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / Groups</span></p>
  </div>
<div class="d-flex justify-content-between align-items-center">
  <h2></h2>
  <a href="groups/add" class="btn btn-success">Add Group</a>
</div>

<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th width="70">#</th>
        <th>Group Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($groups as $group): ?>
        <tr>
            <td><?php echo $group->id; ?></td>
            <td><?php echo $group->name; ?></td>
            <td>
                <a href="groups/edit/<?php echo $group->id; ?>" class="btn btn-primary">Edit</a>
                <a href="groups/delete/<?php echo $group->id; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>