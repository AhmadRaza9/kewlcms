<?php if ($this->session->flashdata('article_saved')): ?>
  <?php echo '<p class="alert alert-success mt-2">' . $this->session->flashdata('article_saved'); ?>
<?php endif;?>

<?php if ($this->session->flashdata('article_published')): ?>
  <?php echo '<p class="alert alert-success mt-2">' . $this->session->flashdata('article_published'); ?>
<?php endif;?>


<?php if ($this->session->flashdata('article_unpublished')): ?>
  <?php echo '<p class="alert alert-info mt-2">' . $this->session->flashdata('article_unpublished'); ?>
<?php endif;?>


<?php if ($this->session->flashdata('article_deleted')): ?>
  <?php echo '<p class="alert alert-danger mt-2">' . $this->session->flashdata('article_deleted'); ?>
<?php endif;?>




<div class="pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Articles</h1>
</div>
<div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
  <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / Articles</span></p>
  </div>
<div class="d-flex justify-content-between align-items-center">
  <h2></h2>
  <a href="add" class="btn btn-success">Add Article</a>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th width="70" scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Author</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($articles as $article): ?>
          <tr>
              <td><?php echo $article->id; ?></td>
              <td><?php echo word_limiter($article->title, 6); ?></td>
              <td><?php echo $article->category_name; ?></td>
              <td><?php echo $article->first_name; ?> <?php echo $article->last_name; ?></td>
              <td><?php echo date("F j, Y, g:i a", strtotime($article->created)); ?></td>
              <td>
                  <a href="edit/<?php echo $article->id; ?>" class="btn btn-primary">Edit</a>
                  <?php if ($article->is_published == 1): ?>
                  <a href="http://kewlcms.test/index.php/admin/articles/unpublish/<?php echo $article->id; ?>" class="btn btn-warning">Unpublished</a>
                  <?php elseif ($article->is_published == 0): ?>
                  <a href="http://kewlcms.test/index.php/admin/articles/publish/<?php echo $article->id; ?>" class="btn btn-success">Published</a>
                  <?php endif;?>
                  <a href="http://kewlcms.test/index.php/admin/articles/delete/<?php echo $article->id; ?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
