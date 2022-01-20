<?php $URL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];?>


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) === 'dashboard') {echo "active";}?>" href="http://kewlcms.test/index.php/admin/dashboard">
          <i class="bi bi-house-fill"></i> Dashboard<br>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) === 'articles') {echo "active";}?>" href="http://kewlcms.test/index.php/admin/articles/index">
          <span data-feather="file"></span>
          <i class="bi bi-wallet-fill"></i> Articles
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link <?php if ($this->uri->segment(2) === 'categories') {echo "active";}?>" href="http://kewlcms.test/index.php/admin/categories">
          <span data-feather="shopping-cart"></span>
          <i class="bi bi-tags-fill"></i> Categories
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) === 'users') {echo "active";}?>" href="http://kewlcms.test/index.php/admin/users">
          <span data-feather="users"></span>
          <i class="bi bi-file-earmark-person-fill"></i> Users
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) === 'groups') {echo "active";}?>" href="http://kewlcms.test/index.php/admin/groups">
          <span data-feather="users"></span>
          <i class="bi bi-people-fill"></i> Users Groups
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) === 'settings') {echo "active";}?>" href="http://kewlcms.test/index.php/admin/settings">
          <span data-feather="layers"></span>
          <i class="bi bi-gear-fill"></i> Settings
        </a>
      </li>
    </ul>
  </div>
</nav>
