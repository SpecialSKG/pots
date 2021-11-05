<div class="pagetitle">
    <h1>Tabla Reserva</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Reservas</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<br><br>

<section class="section">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Insertar Reserva</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3">

                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floating_usuario" aria-label="State" required>
                                    <option selected>Opciones</option>
                                    <?php foreach ($usuario as $u) : ?>
                                        <option value="<?= $u->id; ?>">
                                            <?= $u->nombre; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floating_usuario">Usuario</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floating_lugar" aria-label="State" required>
                                    <option selected>Opciones</option>
                                    <?php foreach ($lugar as $l) : ?>
                                        <option value="<?= $l->id; ?>">
                                            <?= $l->lugar; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floating_lugar">Lugar</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="date" class="form-control" id="floating_fecha" required>
                        </div>

                        <div class="col-md-6">
                            <input type="time" class="form-control" id="floating_hora" required>
                        </div>

                        <div class="text-center">
                            <input class="btn btn-primary" type="button" id="insert_reserva" value="Guardar">

                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>

        </div>
    </div>
</section>

<script src="<?php echo base_url() . 'assets/js/reserva/insertar_reserva.js'; ?>"></script>