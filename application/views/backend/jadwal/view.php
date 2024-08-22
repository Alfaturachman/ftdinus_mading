<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Jadwal</h3>
                <p class="text-subtitle text-muted">Daftar data untuk Jadwal</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jadwal Ruang</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br>

    <section class="section">
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url('jadwal/add_view') ?>" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Jadwal
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
                                <th>Kegiatan</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($jadwal)) : ?>
                                <?php $no = 1;
                                foreach ($jadwal as $jadwal) : ?>
                                    <tr>
                                        <td class="py-3"><?php echo $no++; ?></td>
                                        <td><?= $jadwal->kd_ruang ?></td>
                                        <td><?= $jadwal->kegiatan ?></td>
                                        <td><?= formatDate($jadwal->start_time) ?></td>
                                        <td><?= formatDate($jadwal->end_time) ?></td>
                                        <td><?= $jadwal->deskripsi ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6">Tidak ada jadwal ruang.</td>
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

<?php
// Fungsi format tanggal
function formatDate($datetime)
{
    $date = new DateTime($datetime);
    $months = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];
    $day = $date->format('d');
    $month = $months[(int)$date->format('m')];
    $year = $date->format('Y');
    $time = $date->format('H:i');

    return "{$day} {$month} {$year} - {$time}";
}
?>