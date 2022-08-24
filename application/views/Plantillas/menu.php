<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
  <div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class=" navigation navigation-main">
      <li class=" nav-item">
        <a href="#">
          <i class="icon-ios-folder-outline"></i>
          <span class="menu-title">Proyectos</span>
        </a>
        <ul class="menu-content">
          <li>
            <a href="<?php echo base_url('index.php/Proyectos'); ?>" class="menu-item">Crear Proyecto</a>
          </li>
          <li>
            <a href="<?php echo base_url('Index.php/Proyectos/consultarMiProyecto'); ?>" class="menu-item">Consultar Mis Proyecto</a>
          </li>
          <li>
            <a href="<?php echo base_url('Index.php/Proyectos/consultar_proyectos'); ?>" class="menu-item">Consultar Proyectos</a>
          </li>
        </ul>
      </li>
      <?php 
        if($this->session->userdata('sesionProyectoADSI')['tipo_usuario'] == 'Administrador'){
      ?>
        <li class=" nav-item">
          <a href="#">
            <i class="icon-android-contacts"></i>
            <span class="menu-title">Usuarios</span>
          </a>
          <ul class="menu-content">
            <li>
              <a href="<?php echo base_url('index.php/Usuarios/crearUsuarios'); ?>" class="menu-item">Crear Usuario</a>
            </li>
            <li>
              <a href="<?php echo base_url('Index.php/Usuarios/consultarUsuarios'); ?>" class="menu-item">Consultar Usuario</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item">
          <a href="#">
            <i class="icon-pricetag"></i>
            <span class="menu-title">Areas</span>
          </a>
          <ul class="menu-content">
            <li>
              <a href="<?php echo base_url('Index.php/Areas/crearAreas') ?>" class="menu-item">Crear Area</a>
            </li>
            <li>
              <a href="<?php echo base_url('Index.php/Areas/consultarAreas') ?>" class="menu-item">Consultar Area</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item">
          <a href="#">
            <i class="icon-social-buffer-outline"></i>
            <span class="menu-title">Sub Areas</span>
          </a>
          <ul class="menu-content">
            <li>
              <a href="<?php echo base_url('Index.php/SubAreas/crearSubAreas') ?>" class="menu-item">Crear Sub Areas</a>
            </li>
            <li>
              <a href="<?php echo base_url('Index.php/SubAreas/consultarSubAreas') ?>"class="menu-item">Consultar Sub Areas</a>
            </li>
          </ul>
        </li> 
      <?php
        }
      ?>
      
                                                                                     
    </ul>
  </div>
</div>