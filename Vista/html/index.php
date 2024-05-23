<?php include_once 'headerinicio.php'; ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h6 class="modal-title">INICIAR SESIÓN - GESTIÓN DE TAREA</h6>
                </div>
                <div class="modal-body">
                    <center>
                        <div style="width: 10rem;">
                            <img src="Vista/imagen/icono.png"  class="card-img-top" alt="...">
                        </div>
                    </center> 
                    <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=login">
                        <div class="mb-3">
                            <label for="data" class="form-label">Identificación:</label>
                            <input type="number" class="form-control form-control-sm" id="c_identificacion" name="c_identificacion" placeholder="Ingrese información" required>
                        </div>

                        <div class="mb-3">
                            <label for="data" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control form-control-sm" id="c_contrasena" name="c_contrasena" placeholder="Ingrese información" required>
                        </div>
                        <center><button type="submit" class="btn btn-dark btn-sm">Acceder&nbsp; &nbsp; <i class="fa-solid fa-floppy-disk"></i></button></center>
                    </form>
                    <a href="index.php?accion=registrate" class="btn btn-secondary btn-sm" >Registraté</a>

                </div>
        
            </div>
        </div>
    </div>

</body>
</html>