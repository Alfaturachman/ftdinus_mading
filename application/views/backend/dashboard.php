<div class="page-heading">
    <h3>Dashboard Medical</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <h5>Selamat datang, <?= $this->session->userdata('username') ?></h5>
            <br>
            

        </div>
    </section>
</div>

<style>
    .nowrap {
        white-space: nowrap;
    }

    @media (max-width: 576px) {
        .custom-mb {
            margin-bottom: .5rem;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById("periksaMingguanChart").getContext("2d");

        // Data dari PHP ke JavaScript
        var periksaMingguan = <?= json_encode($periksa_mingguan) ?>;

        // Inisialisasi data per hari dalam minggu
        var daysOfWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        var suntikData = Array(7).fill(0);
        var ultrasoundData = Array(7).fill(0);
        var superbrightData = Array(7).fill(0);
        var magnetikData = Array(7).fill(0);

        // Olah data untuk Chart.js
        periksaMingguan.forEach(function(item) {
            var dayIndex = daysOfWeek.indexOf(item.day);
            if (dayIndex !== -1) {
                switch (item.type) {
                    case 'Suntik':
                        suntikData[dayIndex] = item.total;
                        break;
                    case 'Ultrasound':
                        ultrasoundData[dayIndex] = item.total;
                        break;
                    case 'Superbright':
                        superbrightData[dayIndex] = item.total;
                        break;
                    case 'Magnetik':
                        magnetikData[dayIndex] = item.total;
                        break;
                }
            }
        });

        // Membuat grafik bar
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: daysOfWeek,
                datasets: [{
                        label: 'Suntik',
                        data: suntikData,
                        backgroundColor: '#FF6384',
                    },
                    {
                        label: 'Ultrasound',
                        data: ultrasoundData,
                        backgroundColor: '#36A2EB',
                    },
                    {
                        label: 'Superbright',
                        data: superbrightData,
                        backgroundColor: '#FFCE56',
                    },
                    {
                        label: 'Magnetik',
                        data: magnetikData,
                        backgroundColor: '#4BC0C0',
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                var label = tooltipItem.dataset.label;
                                var value = tooltipItem.raw;
                                return label + ': ' + value;
                            }
                        }
                    }
                }
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Get context with jQuery - using jQuery's .get() method.
        var ctx = document.getElementById("chart-periksa").getContext("2d");

        // Data dari PHP ke JavaScript
        var totalSuntik = <?= $total_suntik ?>;
        var totalUltrasound = <?= $total_ultrasound ?>;
        var totalSuperbright = <?= $total_superbright ?>;
        var totalMagnetik = <?= $total_magnetik ?>;

        // Data untuk Chart.js
        var data = {
            labels: ["Suntik", "Ultrasound", "Superbright", "Magnetik"],
            datasets: [{
                data: [totalSuntik, totalUltrasound, totalSuperbright, totalMagnetik],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0"],
                hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0"]
            }]
        };

        // Membuat grafik pie
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                var label = data.labels[tooltipItem.dataIndex];
                                var value = data.datasets[0].data[tooltipItem.dataIndex];
                                return label + ': ' + value;
                            }
                        }
                    }
                }
            }
        });
    });
</script>

<?php
function formatDateTime($datetime)
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
    $time = $date->format('H:i:s');

    return "{$day} {$month} {$year}, {$time} WIB";
}
?>