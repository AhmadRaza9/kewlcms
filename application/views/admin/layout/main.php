<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Dashboard | Welcome</title>
    <link rel="shortcut icon" href="../../../assets/images/CMS.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="../../../assets/custom.css" rel="stylesheet" />
    <link href="../../../assets/bootstrap.css" rel="stylesheet" />
    <link href="../../../assets/dashboard.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
    <header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-0 p-0" href="<?php echo base_url(); ?>index.php/admin/dashboard">
          <img src="<?php echo base_url(); ?>assets/images/<?php echo $this->global_data['site_logo'];?>" alt="" width="109px"></a>
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark" type="text" id="search_input" placeholder="Search Article..."/>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap" id="dash_nav_link">
          <a class="nav-link px-3" href="<?php echo base_url(); ?>index.php" target="_blank">View Site</a>
          <a class="nav-link px-3" href="<?php echo base_url(); ?>index.php/admin/users/logout">Log out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="index.html"
                >
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="articles.html">
                  <span data-feather="file"></span>
                  Articles
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.html">
                  <span data-feather="shopping-cart"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="users.html">
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="settings.html">
                  <span data-feather="layers"></span>
                  Settings
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
        </main>
      </div>
    </div>

    <script src="../../../assets/bootstrap.js"></script>
  </body>
</html>
