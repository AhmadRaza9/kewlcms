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
    <title>Welcome | <?php echo $this->global_data[1];?></title>
    <link rel="shortcut icon" href="CMS.png" type="image/x-icon" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap.css" rel="stylesheet" />

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
    <nav class="navbar navbar-expand-md navbar-dark mb-4">
      <div class="container">
        <div>
          <a class="navbar-brand text-dark" href="#">Top navbar</a>
        </div>
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active btn btn-primary" href="<?php echo base_url(); ?>">Home</a>
            </li>

              <?php foreach($menu_items as $item):?>
                <li class="nav-item"><a class="nav-link text-primary" href="<?php echo base_url(); ?>articles/view/<?php echo $item->id; ?>"><?php echo $item->title; ?></a></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      <div class="bg-light p-5 rounded text-center">
        <h1><?php echo $this->global_data[2];?></h1>
        <p class="lead">
         <?php echo $this->global_data[3];?>
        </p>
        <a class="btn btn-lg btn-success"><?php echo $this->global_data[4];?> &raquo;</a>
      </div>
      <ul class="home-content p-4 list-group list-group-flush">
        <?php foreach($articles as $article): ?>
          <li class="list-group-item">
            <h4><?php echo $article->title;?></h4>
            <p><?php echo word_limiter($article->body, 20); ?></p>
            <p><a class="btn btn-lg btn-primary btn-sm" href="<?php echo base_url(); ?>articles/view/<?php echo $article->id; ?>"><?php echo $this->global_data[4];?></a></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </main>
    <script src="<?php echo base_url(); ?>assets/bootstrap.js"></script>
  </body>
</html>
