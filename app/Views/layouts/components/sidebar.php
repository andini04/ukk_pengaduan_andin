<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<?php if(session('level')=='admin'){
    ?>
    <li class="nav-item">
        <a class="nav-link" href="/petugas">
            <i class="fas fa-fw fa-light fa-user-lock"></i>
            <span>Petugas</span>
        </a>
    </li>
    <?php
}
?>

<?php if(session('level')!='masyarakat'){
    ?>
    <li class="nav-item">
        <a class="nav-link" href="/masyarakat">
            <i class="fas fa-fw fa-regular fa-users"></i>
            <span>Masyarakat</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/tanggapan">
            <i class="fas fa-fw fa-solid fa-file"></i>
            <span>Tanggapan</span>
        </a>
    </li>
    <?php 
    }
    ?>
    
    <li class="nav-item">
        <a class="nav-link" href="/pengaduan">
            <i class="fas fa-fw fa-regular fa-comment"></i>
            <span>Pengaduan</span>
        </a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span>
        </a>
    </li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->

</ul>