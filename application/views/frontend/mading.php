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
            padding-bottom: 19%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
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
            <?php foreach($mading_umum as $u): ?>
            <div class="video-container">
                <iframe id="iframe-kiri" src="https://www.youtube.com/embed/<?= getYouTubeID($u->link_yt); ?>?autoplay=1&mute=1&enablejsapi=1"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <img src="<?= base_url('uploads/' . $u->mading_img) ?>" alt="Poster Kiri" class="w-full h-full object-cover">
            <?php endforeach;?>
        </div>

        <!-- Poster Kanan -->
        <div id="kanan" class="w-1/2 h-full overflow-hidden">
            <?php foreach($mading_mahasiswa as $m):?>
            <div class="video-container">
                <iframe id="iframe-kanan" src="https://www.youtube.com/embed/<?= getYouTubeID($m->link_yt); ?>?autoplay=1&mute=1&enablejsapi=1"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <img src="<?= base_url('uploads/' . $m->mading_img) ?>" alt="Poster Kanan" class="w-full h-full object-cover">
            <?php endforeach;?>
        </div>
    </div>

    <!-- Slick Slider, Tanggal dan Waktu -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    $(document).ready(function () {
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
        var x = setInterval(function () {
            distance = distance - 1000;
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("countdown").innerHTML = "-" + checkTime(minutes) + ":" + checkTime(seconds);
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "SELESAI";
            }
        }, 1000);

        function onYouTubeIframeAPIReady() {
            $('#kiri').find('iframe-kiri').each(function () {
                var player = new YT.Player(this, {
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            });

            $('#kanan').find('iframe-kanan').each(function () {
                var player = new YT.Player(this, {
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            });
        }

        function onPlayerStateChange(event) {
            if (event.data === YT.PlayerState.ENDED) {
                // Move to the next slide when the video ends
                $('#kiri').slick('slickNext');
                $('#kanan').slick('slickNext');
            }
        }

        $('#kiri').slick({
            autoplay: false, // Turn off autoplay for YouTube videos
            adaptiveHeight: true,
            arrows: false
        });

        $('#kanan').slick({
            autoplay: false, // Turn off autoplay for YouTube videos
            adaptiveHeight: true,
            arrows: false
        });

        // Load the YouTube IFrame API
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    });
</script>


    <?php
    function getYouTubeID($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $urlParams);
        return $urlParams['v'] ?? '';
    }
    ?>

</body>

</html>
