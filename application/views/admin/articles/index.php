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
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                  <td>
                    <a href="edit_article.html" class="btn btn-primary">Edit</a>
                    <a href="edit_article.html" class="btn btn-dark"
                      >Unpublish</a
                    >
                          <?php $attributes = array('class' => 'navbar-form navbar-right');?>

                    <a href="edit_article.html" class="btn btn-danger"
                      >Delete</a
                    >
                  </td>
                </tr>
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
                    <tr>
                      <td>1</td>
                      <td>sit</td>
                      <td>
                        <a href="edit_category.html" class="btn btn-primary"
                          >Edit</a
                        >
                        <a href="edit_category.html" class="btn btn-danger"
                          >Delete</a
                        >
                      </td>
                    </tr>
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
                    <tr>
                      <td>1</td>
                      <td>sit</td>
                      <td>
                        <a href="edit_category.html" class="btn btn-primary"
                          >Edit</a
                        >
                        <a href="edit_category.html" class="btn btn-danger"
                          >Delete</a
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>