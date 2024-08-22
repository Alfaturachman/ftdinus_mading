<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Ruang</h3>
                <p class="text-subtitle text-muted">Daftar data untuk Ruang</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ruang</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br>

    <section class="section">
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url('ruang/add_view') ?>" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Ruang
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Ruang</th>
                                <th>Nama Ruang</th>
                                <th>Kapasitas Kuliah</th>
                                <th>Kapasitas Ujian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($ruang)) : ?>
                                <?php $no = 1;
                                foreach ($ruang as $ruang) : ?>
                                    <tr>
                                        <td class="py-3"><?php echo $no++; ?></td>
                                        <td><?= $ruang->kd_ruang ?></td>
                                        <td><?= $ruang->nama ?></td>
                                        <td><?= $ruang->kap_kuliah ?></td>
                                        <td><?= $ruang->kap_ujian ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5">Tidak ada data ruang.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#table1').DataTable();
    });
</script>