<!-- Navbar -->

<?php
  $session = session();
  $nombre = $session->get ('nombre');
  $perfil = $session ->get ('perfil_id');
  ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo" /> Tecno Movil
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <!--                                Listas del nav                 -->

    <!--                               Admin                -->
    <?php if (session()->perfil_id == 1): ?>
          <div class="btn btn-warning active btnUser btn-sm">
              <a href="">ADMIN: <?php echo session ('nombre');?> </a>
          </div> 


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal">Pincipal</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('/login'); ?>>Login</a>
          </li>

          <li class="nav-item">  
          <a class="nav-link" href="<?php echo base_url('/logout');?>"tabindex="-1"   aria-disabled="true">   Cerrar Sesion</a>
          </li>
        </ul>

      <!--                        cliente               -->

      
        <?php elseif (session()->perfil_id == 2): ?>
          <div class="btn btn-warning active btnUser btn-sm">
              <a href="">CLIENTE: <?php echo session ('nombre');?> </a>
          </div>
          
          <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/principal'); ?>">Inicio</a
              >   
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/quienes_somos'); ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catalogo
              </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url('/construccion'); ?>">Celulares</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('/construccion'); ?>"
                    >Accesorios</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('/construccion'); ?>">Tablet</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_de">Acerca de</a>
                    </li>

          <li class="nav-item">  
          <a class="nav-link" href="<?php echo base_url('/logout');?>"tabindex="-1"   aria-disabled="true">   Cerrar Sesion</a>
          </li>
        </ul>

       

           <?php else:?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/principal'); ?>">Inicio</a
              >   
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/quienes_somos'); ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catalogo
              </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url('/construccion'); ?>">Celulares</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('/construccion'); ?>"
                    >Accesorios</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo base_url('/construccion'); ?>">Tablet</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_de">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Iniciar Sesión</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Ingrese aqui" />
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">
              Buscar
            </button>
                </form>
                <?php endif;?>
     
            </div>
        </div>
    </nav>