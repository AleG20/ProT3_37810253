<div class="d-flex justify-content-center align-items-center py-5 mb-5 my-5" style="border: solid 2px blueviolet">
    <!-- Mensaje de Error -->
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <!-- Inicio del formulario de login -->
    <form style="width:500px" method="post" action="<?php echo base_url('/enviarlogin'); ?>">
       <!--  ?= csrf_field(); ?> -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-danger">Login</button>
        <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
        <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>">Registrarse aquí</a></span>
    </form>
</div>
