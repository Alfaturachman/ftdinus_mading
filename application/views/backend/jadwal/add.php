<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Jadwal</h3>
                <p class="text-subtitle text-muted">Silahkan isi form di bawah untuk Jadwal</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger">
                                    <?= validation_errors() ?>
                                </div>
                            <?php endif; ?>
                            <form class="form form-horizontal" id="analisisForm" action="<?= base_url('jadwal/add') ?>" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div>
                                            <h5 class="h5 mb-4">Informasi Jadwal</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="kd_ruang">Kode Ruang</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kd_ruang" class="form-control" name="kd_ruang" placeholder="masukkan kode ruang (e.g. i.1.3)"  required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="kegiatan">Kegiatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kegiatan" class="form-control" name="kegiatan" placeholder="Kegiatan" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="start_time">Waktu Mulai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="start_time" class="form-control" name="start_time" placeholder="Waktu Mulai" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="end_time">Waktu Selesai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="end_time" class="form-control" name="end_time" placeholder="Waktu Selesai" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="deskripsi">Deskripsi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan" required></textarea>
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1 px-5">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal berhasil  -->
<div class="modal modal-borderless fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data jadwal berhasil ditambahkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
    </div>
</div>