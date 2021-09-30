<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top">

      <!-- Sidebar Toggle (Topbar) -->
      <button onclick="this.blur();" id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars text-primary"></i>
      </button>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-dark  small"> Hla</span>
            <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>/img/usuario.svg">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item"  href="<?php echo base_url(); ?>/usuarios/perfil_usuario">
              <i class="fas fa-user-cog mr-2 text-gray-400"></i>
              Perfil de usuario
            </a>
            <a class="dropdown-item"  href="<?php echo base_url(); ?>/usuarios/cambia_password">
              <i class="fas fa-key mr-2 text-gray-400"></i>
              Cambiar contraseña
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Cerrar Sesión
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->