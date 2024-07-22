<div class="container mt-5 login-23">

 
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Iniciar Sesión</h4>
                    </div>
                    <div class="card-body">
                    <!-- Inicio del formulario de login -->
    <form style="width:500px" method="post" action="<?php echo base_url('/enviarlogin'); ?>">


                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text"></div>
                  
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
        <a href="<?php echo base_url('login'); ?>" class="btn btn-primary">Cancelar</a>
        </div>
                        </form>
                    </div>
                   
                    <div class="card-footer text-center">
                    <span>¿Aún no se registró? <a href="<?php echo base_url('/registrar'); ?>">Registrarse aquí</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>





