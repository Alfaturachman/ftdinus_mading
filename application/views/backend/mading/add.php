<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Mading</h3>
                <p class="text-subtitle text-muted">Silahkan isi form di bawah untuk input mading</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mading</li>
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
                            <form class="form form-horizontal" id="ruangForm" action="<?= base_url('admin_mading/add') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <div>
                                            <h5 class="h5 mb-4">Informasi Mading</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="judul">Judul Mading</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="judul" class="form-control" name="judul" placeholder="Masukkan judul" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="kategori">Kategori</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" name="kategori" id="kategori" required>
                                                <option value="" selected hidden>Pilih Kategori</option>
                                                <option value="Umum">Umum</option>
                                                <option value="Mahasiswa">Mahasiswa</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="mading_img">File Gambar Mading</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" id="mading_img" class="form-control" name="mading_img" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="mading_vid">File Video (Opsional)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" id="mading_vid" class="form-control" name="mading_vid">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="expire">Waktu Selesai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="expire" class="form-control" name="expire" placeholder="Waktu Selesai" required>
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
                Data ruang berhasil ditambahkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
    </div>
</div>