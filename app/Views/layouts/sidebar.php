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
    <li class="nav-item nav-category">Airdrop Management</li>
    <li class="nav-item">
      <a class="nav-link" href="#overview" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-chart-areaspline menu-icon"></i>
        <span class="menu-title">User Analytics</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#audiences" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-airplane menu-icon"></i>
        <span class="menu-title">Airdrop Management</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#demographics" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-check-all menu-icon"></i>
        <span class="menu-title">Task Verification</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#more" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-cog menu-icon"></i>
        <span class="menu-title">System Settings</span>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->