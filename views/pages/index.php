<div class="row mb-3">
  <div class="col text-center">
    <h1>PROYECTO 2 LOGIN</h1>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Iniciar Sesión</h4>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico o Teléfono</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
  <div class="col-lg-4">
    <img src="./images/cit.png" width="100%" alt="">
  </div>
</div>
<script src="build/js/inicio.js"></script>