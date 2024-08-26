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
                                <th>Video Mading</th>
                                <th>Expire</th>
                                <th>Status</th>
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
                                        <td>
                                            <img style="width: 60pt; height: 75pt;" src="<?= base_url('uploads/' . $mading->mading_img)?>" alt="">
                                        </td>
                                        <td>
                                            <video style="height: 75pt;" class="video-kiri" controls muted>
                                                <source src="<?= base_url('uploads/' . $mading->mading_vid) ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </td>
                                        <td><?= $mading->expire ?></td>
                                        <td>
                                            <form action="<?php echo site_url('admin_mading/update_status/' . $mading->id); ?>" method="post">
                                                <div class="form-group">
                                                    <select name="status" class="form-select">
                                                        <option value="<?= $mading->status?>" selected hidden><?= $mading->status?></option>
                                                        <option value="Show">Show</option>
                                                        <option value="Hide">Hide</option>
                                                    </select>
                                                </div>
                                                <div class="justify-content-end">
                                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </td>
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