<?php $validation = \Config\Services::validation(); ?>

<form method="post" action="<?php echo base_url('/enviar_form'); ?>"> 
<?= csrf_field(); ?>
<?php if (!empty(session()->getFlashdata('fail'))): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
<?php endif ?>
<?php if (!empty(session()->getFlashdata('success'))): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
<?php endif ?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Registro de Usuario</h4>
                    </div>
                    <div class="card-body">

                    <div class="mb-3 row">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="nombre" id="nombre" required>
            <?php if ($validation->getError('nombre')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('nombre'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" placeholder="apellido" id="apellido" required>
            <?php if ($validation->getError('apellido')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('apellido'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3 row">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="email" id="email" required>
            <?php if ($validation->getError('email')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('email'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3 row">
            <label for="usuario" class="form-label">Usuario</label>
            <input name="usuario" type="text" class="form-control" placeholder="usuario" id="usuario" required>
            <?php if ($validation->getError('usuario')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('usuario'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3 row">
            <label for="password" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="contraseña" id="password" required>
            <?php if ($validation->getError('pass')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('pass'); ?></div>
            <?php endif ?>
        </div>

        <div class="mb-3 row ">
                  <div class=" text-center">
                    <button type="submit" value="guardar" class="btn btn-primary">
                      Registrar
                    </button>
                    <button type="reset" value="cancelar" class="btn btn-primary">
                      Cancelar
                    </button>
                  </div>
                </div>
       
        <div class="text-center">
            <small>¿Tienes una cuenta? <a class="fw-bold" href="<?php echo base_url('/login'); ?>">Iniciar Sesión</a></small>
        </div>

    


    </div>
</div>
</form>

</div>
          </div>
        </div>
      </div>
    </div>