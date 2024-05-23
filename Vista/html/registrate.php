<?php include_once 'headerinicio.php'; ?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h6 class="modal-title">REGISTRARME A GESTIÓN DE TAREA</h6>
        </div>
        <div class="modal-body">
            <center>
                <div style="width: 10rem;">
                    <img src="Vista/imagen/icono.png"  class="card-img-top" alt="...">
                </div>
            </center> 
            <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=registrarme">
                <div class="mb-3">
                    <label for="data" class="form-label">Identificación:</label>
                    <input type="number" class="form-control form-control-sm" id="c_identificacion" name="c_identificacion" placeholder="Ingrese información" required>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Nombres:</label>
                    <input type="text" class="form-control form-control-sm" id="c_nombres" name="c_nombres" placeholder="Ingrese información" required>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Aapellidos::</label>
                    <input type="text" class="form-control form-control-sm" id="c_apellidos" name="c_apellidos" placeholder="Ingrese información" required>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Celular:</label>
                    <input type="number" class="form-control form-control-sm" id="c_celular" name="c_celular" placeholder="Ingrese información" required>
                </div>

                <div class="mb-3">
                    <label for="data" class="form-label">Email:</label>
                    <input type="email" class="form-control form-control-sm" id="c_correo" name="c_correo" placeholder="Ingrese información" required>
                </div>

                <div class="mb-3">
                    <label for="data" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control form-control-sm" id="c_contrasena" name="c_contrasena" placeholder="Ingrese información" required>
                    <input type="hidden" class="form-control form-control-sm" id="c_rol" name="c_rol" value="2">
                </div>
                <center><button type="submit" class="btn btn-dark btn-sm">Registrarme&nbsp; &nbsp; <i class="fa-solid fa-floppy-disk"></i></button></center>
            </form>
            <a href="index.php?accion=index" class="btn btn-secondary btn-sm" >Iniciar Sesión</a>

        </div>

    </div>
</div>
</div>

</body>
</html>