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

        .video-container {
            position: relative;
            padding-bottom: 19%;
            height: 0;
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
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
            <?php foreach ($mading_umum as $u): ?>
                <?php if (!empty($u->mading_vid)) :?>
                <div class="video-container">
                    <video class="video-kiri" controls autoplay muted>
                        <source src="<?= base_url('uploads/' . $u->mading_vid) ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <?php endif;?>
                <img src="<?= base_url('uploads/' . $u->mading_img) ?>" alt="Poster Kiri" class="w-full h-full object-cover">
            <?php endforeach; ?>
        </div>

        <!-- Poster Kanan -->
        <div id="kanan" class="w-1/2 h-full overflow-hidden">
            <?php foreach ($mading_mahasiswa as $m):                 
                if (!empty($m->mading_vid)) :?>
                <div class="video-container">
                    <video class="video-kanan" controls autoplay muted>
                        <source src="<?= base_url('uploads/' . $m->mading_vid) ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <?php endif;?>
                <img src="<?= base_url('uploads/' . $m->mading_img) ?>" alt="Poster Kanan" class="w-full h-full object-cover">                
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Slick Slider, Tanggal dan Waktu -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            function startTime() {
                const today = new Date();

                const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                const dayName = days[today.getDay()];
                const day = today.getDate();
                const month = months[today.getMonth()];
                const year = today.getFullYear();

                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);

                document.getElementById('datetime').innerHTML = `${dayName}, ${day} ${month} ${year}, ${h}:${m}:${s}`;
                setTimeout(startTime, 1000);
            }

            function checkTime(i) {
                return i < 10 ? "0" + i : i;
            }

            startTime();

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

            $('#kiri').slick({
                autoplay: false,
                adaptiveHeight: true,
                arrows: false
            });

            $('#kanan').slick({
                autoplay: false,
                adaptiveHeight: true,
                arrows: false
            });

            function handleVideoEnd() {
                var videoContainers = ['#kiri', '#kanan'];

                videoContainers.forEach(function(container) {
                    $(container + ' video').on('ended', function() {
                        $(container).slick('slickNext');
                    });
                });
            }

            handleVideoEnd();

            function playVideoOnSlideChange() {
                function playActiveVideo(container) {
                    $(container).find('video').each(function() {
                        const videoElement = this;
                        if ($(this).closest('.slick-slide').hasClass('slick-active')) {
                            videoElement.play();
                        } else {
                            videoElement.pause();
                            videoElement.currentTime = 0;
                        }
                    });
                }

                $('#kiri').on('afterChange', function(event, slick, currentSlide) {
                    playActiveVideo('#kiri');
                });

                $('#kanan').on('afterChange', function(event, slick, currentSlide) {
                    playActiveVideo('#kanan');
                });

                // Initial play for the first slide
                playActiveVideo('#kiri');
                playActiveVideo('#kanan');
            }

            playVideoOnSlideChange();
        });
    </script>
</body>

</html>