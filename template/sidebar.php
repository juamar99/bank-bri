<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
        <!-- <div class="sidebar-brand-icon rotate-n-0">
            <img class="img-profile rounded-circle" width="50px" src="./img/tlm.png">
        </div> -->
        <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg" /> -->
        <div class="sidebar-brand-text mx-3">INVENTARIS BANK BRI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($page == halaman('beranda')) ? 'active' : ''; ?>">
        <a class="nav-link" href="./">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <!-- <div class="sidebar-heading">Interface</div> -->
    <!-- Divider -->

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a href="atm" class="nav-link">
            <i class="fas fa-credit-card"></i>
            <span>ATM</span></a>
    </li>
    <hr class="sidebar-divider" />
    <li class="nav-item">
        <a class="nav-link" href="edc">
            <i class="fas fa-industry"></i>
            <span>EDC</span></a>
    </li>
    <hr class="sidebar-divider" />
    <li class="nav-item">
        <a class="nav-link" href="kerusakan">
            <i class="fas fa-tools"></i>
            <span>KERUSAKAN</span>
        </a>
    </li>
    <hr class="sidebar-divider" />
    <li class="nav-item">
        <a class="nav-link" href="teknisi">
            <i class="fas fa-users"></i>
            <span>TEKNISI</span></a>
    </li>
    <hr class="sidebar-divider" />
    <li class="nav-item">
        <a class="nav-link" href="costumer">
            <i class="fas fa-user"></i>
            <span>USER</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
</ul>