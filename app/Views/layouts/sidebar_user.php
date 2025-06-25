<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#dashboard-basic" aria-expanded="false" aria-controls="dashboard-basic">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="dashboard-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin') ?>">Akses Admin</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url('user') ?>">Akses User</a></li>
        </ul>
      </div>
    </li>
    
    <!-- Main Navigation Categories -->
    <li class="nav-item nav-category">E-Commerce Management</li>
    
    <!-- Home Navigation -->
    <li class="nav-item">
      <a class="nav-link" href="#home-content" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>
    
    <!-- Shopping Cart Navigation -->
    <li class="nav-item">
      <a class="nav-link" href="#keranjang-content" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-cart menu-icon"></i>
        <span class="menu-title">Keranjang</span>
      </a>
    </li>
  </ul>
</nav>

<!-- partial -->