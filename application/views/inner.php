
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
          <a class="navbar-brand text-dark" href="http://kewlcms.test/">Top navbar</a>
        </div>
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active btn btn-primary" href="<?php echo base_url(); ?>">Home</a>
            </li>

              <?php foreach($menu_items as $item):?>
                <li class="nav-item"><a class="nav-link text-primary" href="http://kewlcms.test/index.php/articles/view/<?php echo $item->id; ?>"><?php echo $item->title; ?></a></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      <div class="col-lg-12">
        <h1><?php echo $article->title; ?></h1>
        <p><?php echo $article->body; ?></p>    
      </div>
    </main>
    <script src="<?php echo base_url(); ?>assets/bootstrap.js"></script>
  </body>
</html>
