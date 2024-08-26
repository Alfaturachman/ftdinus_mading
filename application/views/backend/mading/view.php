<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Mading</h3>
                <p class="text-subtitle text-muted">Daftar data untuk Mading</p>
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
    <br>

    <section class="section">
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url('admin_mading/add_view') ?>" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Mading
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Gambar Mading</th>
                                <th>Link Youtube</th>
                                <th>Expire</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($mading)) : ?>
                                <?php $no = 1;
                                foreach ($mading as $mading) : ?>
                                    <tr>
                                        <td class="py-3"><?php echo $no++; ?></td>
                                        <td><?= $mading->judul ?></td>
                                        <td><?= $mading->kategori ?></td>
                                        <td><?= $mading->mading_img ?></td>
                                        <td><?= $mading->mading_vid ?></td>
                                        <td><?= $mading->expire ?></td>
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