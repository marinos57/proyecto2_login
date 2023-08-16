<div class="container">
    <div class="row justify-content-center mt-5">
        <form class="col-lg-4 border rounded p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="usu_catalogo" class="form-label">Catalogo</label>
                    <input type="number" class="form-control" id="usu_catalogo">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="usu_password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="usu_password">
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </div>
            </div>
        </form>
    </div>
    <script src="<?= asset('./build/js/login/index.js') ?>"></script>
</div>
