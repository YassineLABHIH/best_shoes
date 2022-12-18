  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= ROOT ?>admin/index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <!-- Start products Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-basket"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="<?= ROOT ?>admin/products/add">
              <i class="bi bi-circle"></i><span>All Products</span>
            </a>
          </li>
        <li>
            <a href="<?= ROOT ?>admin/products/add">
              <i class="bi bi-circle"></i><span>Add New Product</span>
            </a>
          </li>
        </ul>
      </li> <!-- End products Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= ROOT ?>admin/category">
          <i class="bi bi-collection"></i>
          <span>Categories</span>
        </a>
      </li><!-- End Categories Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= ROOT ?>admin/order">
          <i class="bi bi-cart-check"></i>
          <span>Order</span>
        </a>
      </li><!-- End Order Page Nav -->

                  <!-- Start Categories Nav -->
                  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="<?= ROOT ?>admin/user">
          <i class="bi bi-person"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="<?= ROOT ?>admin/user/customer">
              <i class="bi bi-circle"></i><span>Customer</span>
            </a>
          </li>
        <li>
            <a href="<?= ROOT ?>admin/user/admin">
              <i class="bi bi-circle"></i><span>Admin</span>
            </a>
          </li>
        </ul>
      </li> <!-- End Categories Nav -->




      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= ROOT ?>admin/setting">
          <i class="bi bi-gear"></i>
          <span>Setting</span>
        </a>
      </li><!-- End Setting Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->