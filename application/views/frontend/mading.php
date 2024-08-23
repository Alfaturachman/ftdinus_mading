<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mading Fakultas Teknik Udinus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style>
        .slick-slide {
            padding: 10px;
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-blue-500 text-white text-center p-6">
        <h1 class="text-3xl font-bold">Mading Fakultas Teknik Udinus</h1>
    </header>

    <!-- Tanggal dan Waktu -->
    <div class="flex justify-between items-center p-4">
        <div id="datetime" class="text-lg text-gray-700 font-bold"></div>
        <div id="countdown" class="text-lg text-red-500 font-bold"></div>
    </div>

    <!-- Poster Kiri dan Poster Kanan -->
    <div class="flex flex-1 overflow-hidden min-h-screen">
        <!-- Poster Kiri -->
        <div id="kiri" class="w-1/2 h-full overflow-hidden">
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20240322-105629.png" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20240322-105509.png" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20240322-105414.png" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-07-20230329-090320.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20221221-153324.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20221213-185426.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20221209-130431.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20221206-164654.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20221206-164640.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-01-20221206-164621.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kiri/wft-mad-pos-kiri-02-20221206-164056.jpeg" alt="Poster Kiri" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Poster Kanan -->
        <div id="kanan" class="w-1/2 h-full overflow-hidden">
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20240612-130732.png" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20240105-144434.jpg" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20230925-102401.png" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20230920-122446.png" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20230919-185404.png" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20230919-185242.png" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20230919-180034.jpg" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20230905-122625.jpg" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-01-20221209-130457.jpeg" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
            <div class="poster">
                <img src="https://ft.dinus.ac.id/syafaat/aset/img/slick/kanan/wft-mad-pos-kanan-03-20221206-164230.png" alt="Poster Kanan" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Slick Slider, Tanggal dan Waktu -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            /* JAM DIGITAL */
            function startTime() {
                const today = new Date();

                // Format tanggal
                const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                const dayName = days[today.getDay()];
                const day = today.getDate();
                const month = months[today.getMonth()];
                const year = today.getFullYear();

                // Format waktu
                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);

                // Menampilkan tanggal dan waktu dalam format yang diinginkan
                document.getElementById('datetime').innerHTML = `${dayName}, ${day} ${month} ${year}, ${h}:${m}:${s}`;
                setTimeout(startTime, 1000);
            }

            function checkTime(i) {
                return i < 10 ? "0" + i : i;
            }

            // Mulai fungsi saat halaman dimuat
            startTime();

            /* COUNT-DOWN TIMER */
            var distance = 173 * 1000;
            var x = setInterval(function() {
                distance = distance - 1000;
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("countdown").innerHTML = "-" + checkTime(minutes) + ":" + checkTime(seconds);
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML = "SELESAI";
                }
            }, 1000);

            /* SLICK SLIDER */
            $('#kiri').slick({
                autoplay: true,
                autoplaySpeed: 6789,
                adaptiveHeight: true,
                arrows: false
            });

            $('#kanan').slick({
                autoplay: true,
                autoplaySpeed: 6789,
                adaptiveHeight: true,
                arrows: false
            });
        });
    </script>

</body>

</html>