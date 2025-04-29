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
    <li class="nav-item nav-category">Airdrop Portal</li>
    <li class="nav-item">
      <a class="nav-link" href="#overview" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-airballoon menu-icon"></i>
        <span class="menu-title">My Airdrops</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#audiences" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-gift menu-icon"></i>
        <span class="menu-title">Available Airdrops</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#demographics" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-check-circle menu-icon"></i>
        <span class="menu-title">Task Completion</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#more" data-bs-toggle="tab" role="tab">
        <i class="mdi mdi-wallet menu-icon"></i>
        <span class="menu-title">My Wallet</span>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->