<?php include_once('../header.php'); ?>
<?php titulo_pagina("Administrar Cuentas") ?>


<div class="container">
    <div class="mx-auto">

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="insert_pago_movil.php" method="POST">

                    <div class="card p-5">
                        <h4 class="text-center pb-2">Pago Movil</h4>
                        <label for="cedula">Nro. Cédula</label>
                        <input type="text" id="cedula" class="form-control mb-3" placeholder="Introduce número de cédula" name="cedula" required>
                        <label for="telefono">Teléfono Celular</label>
                        <input type="text" id="telefono" class="form-control mb-3" placeholder="Nro. de telefono celular" name="telefono" required>
                        <label for="banco">Banco</label>
                        <input type="text" id="banco" class="form-control mb-3" placeholder="Elige un banco" name="banco" required>
                        <br>
                        <input type="submit" class="btn btn-secondary" value="Guardar">
                    </div>
                    <!-- </div> -->
                </form>
            </div>
            <div class="col-4">
                <form action="insert_cuenta.php" method="POST">
                    <!-- <div class="row"> -->
                    <div class="card p-5">
                        <h4 class="text-center pb-2">Transferencia Bancaria</h4>
                        <input type="hidden" name="banco" value="banesco" required>
                        <label for="cuenta">Nro. Cuenta</label>
                        <input type="text" id="cuenta" class="form-control mb-3" placeholder="Introduce número de cuenta" name="cuenta" required>
                        <label for="titular">Titular de la cuenta</label>
                        <input type="text" id="titular" class="form-control mb-3" placeholder="Titular de la cuenta" name="titular" required>
                        <label for="Nacionalidad">Cédula</label>
                        <div class="input-group">
                            <select id="nacionalidad" class="mb-3" name="nacionalidad">
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="J">J</option>
                            </select>
                            <input type="text" id="cedula" class="form-control mb-3" placeholder="cédula/rif" name="cedula" required>
                        </div>
                        <label for="email">Email de titular</label>
                        <input type="email" id="email" class="form-control mb-3" placeholder="Email de titular" name="email" required>
                        <br>
                        <input type="submit" class="btn btn-secondary" value="Guardar">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include_once('../footer.php'); ?>