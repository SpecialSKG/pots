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

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reservas</h5>
                    <a class="btn btn-primary" href="<?= base_url(); ?>Reservas/ins_Reserva">
                        <i class="bi bi-star me-1"></i> Agregar
                    </a>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Lugar</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) { ?>
                                <tr>
                                    <th scope="row"><?= $d->id ?></th>
                                    <td><?= $d->nombre ?></td>
                                    <td><?= $d->lugar ?></td>
                                    <td><?= $d->fecha ?></td>
                                    <td><?= $d->hora ?></td>
                                    <td>
                                        <a type="submit" href="<?= base_url() . 'Reservas/obtenerReserva/' . $d->id ?>" class="btn btn-info">
                                            <i class="bi bi-info-circle"></i>
                                        </a>
                                        <a type="submit" data-id="<?= $d->id ?>" id="delete" class="btn btn-danger">
                                            <i class="bi bi-exclamation-octagon"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    <?php foreach ($reservas as $r) { ?>
                        <div>asda</div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="<?php echo base_url() . 'assets/js/usuario/delete_reserva.js'; ?>"></script>