          <div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <h2>Articles</h2>
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
                        <td><?php echo word_limiter($article->title, 3); ?></td>
                        <td><?php echo $article->category_name; ?></td>
                        <td><?php echo $article->first_name; ?> <?php echo $article->last_name; ?></td>
                        <td><?php echo date("F j, Y, g:i a", strtotime($article->created)); ?></td>
                        <td>
                            <a href="articles/edit/<?php echo $article->id; ?>" class="btn btn-primary">Edit</a>
                            <a href="articles/unpublish/<?php echo $article->id; ?>" class="btn btn-dark">Unpublish</a>
                            <a href="articles/delete<?php echo $article->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h2>Latest Categories</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th width="70">#</th>
                      <th>Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?php echo $category->id; ?></td>
                            <td><?php echo $category->name; ?></td>
                            <td>
                                <a href="categories/edit/<?php echo $category->id; ?>" class="btn btn-primary">Edit</a>
                                <a href="categories/delete/<?php echo $category->id; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <h2>Latest Users</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th width="70">#</th>
                      <th>Username</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td>
                                <a href="users/edit/<?php echo $user->id; ?>" class="btn btn-primary">Edit</a>
                                <a href="users/delete/<?php echo $user->id; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>