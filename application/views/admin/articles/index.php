<div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Articles</h1>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <a href="add_article.html" class="btn btn-success">Add Article</a>
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
                        <td><?php echo $article->title; ?></td>
                        <td><?php echo $article->category_name; ?></td>
                        <td><?php echo $article->first_name; ?> <?php echo $article->last_name; ?></td>
                        <td><?php echo date("F j, Y, g:i a", strtotime($article->created)); ?></td>
                        <td>
                            <a href="edit/<?php echo $article->id; ?>" class="btn btn-primary">Edit</a>
                            <?php if ($article->is_published == 1): ?>
                            <a href="unpublish/<?php echo $article->id; ?>" class="btn btn-dark">Unpublish</a>
                            <?php elseif ($article->is_published == 0): ?>
                            <a href="publishe/<?php echo $article->id; ?>" class="btn btn-success">Published</a>
                            <?php endif;?>
                            <a href="delete<?php echo $article->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
