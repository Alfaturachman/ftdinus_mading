<!-- ====== Hero Section Start ====== -->
<div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
    <div class="container mb-[30px]">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mb-[30px] max-w-[510px]">
                    <h2 class="mb-3 text-3xl font-bold text-white dark:text-white md:leading-[1.2]">
                        Jadwal Hari Ini
                    </h2>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-start -mx-4">
            <!-- Jadwal Hari Ini -->
            <?php foreach($ruang as $ruang): ?>
            <div class="w-full lg:w-1/3 px-4 mb-8">
                <div class="relative z-10 overflow-hidden rounded-xl bg-white py-8 px-8 shadow-lg dark:bg-gray-800">
                    <span class="block mb-5 text-xl font-medium text-gray-800 dark:text-white">
                        Ruang <?= $ruang->kd_ruang?> (<?= $ruang->nama?>)
                    </span>
                    <div>
                        <?php if (isset($jadwal[$ruang->kd_ruang]) && !empty($jadwal[$ruang->kd_ruang])): ?>
                            <?php foreach($jadwal[$ruang->kd_ruang] as $j): ?>
                                <h5 class="mb-2 text-lg font-medium text-gray-800 dark:text-white">
                                    <?= htmlspecialchars($j->kegiatan) ?>
                                </h5>
                                <div class="flex flex-col gap-2">
                                    <p class="text-base text-gray-600 dark:text-gray-400">
                                        <?= !empty($j->start_time) ? date('H:i', strtotime($j->start_time)) : 'N/A' ?> - 
                                        <?= !empty($j->end_time) ? date('H:i', strtotime($j->end_time)) : 'N/A' ?>
                                    </p>
                                </div>
                            <?php endforeach;?>
                        <?php else: ?>
                            <p class="text-base text-gray-600 dark:text-gray-400">Jadwal tidak tersedia.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>


        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mb-[30px] max-w-[510px]">
                    <h2 class="mb-3 text-3xl font-bold text-white dark:text-white md:leading-[1.2]">
                        Jadwal Besok
                    </h2>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-start -mx-4">
            <!-- Jadwal Besok -->
            <div class="w-full lg:w-1/3 px-4 mb-8">
                <div class="relative z-10 overflow-hidden rounded-xl bg-white py-8 px-8 shadow-lg dark:bg-gray-800">
                    <span class="block mb-5 text-xl font-medium text-gray-800 dark:text-white">
                        Ruang D.5.4
                    </span>
                    <div>
                        <h5 class="mb-2 text-lg font-medium text-gray-800 dark:text-white">
                            Proyek Aplikasi Mobile 2
                        </h5>
                        <div class="flex flex-col gap-2">
                            <p class="text-base text-gray-600 dark:text-gray-400">
                                07:00 - 08:40
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan jadwal lain untuk besok di sini -->
        </div>
    </div>
</div>
<!-- ====== Hero Section End ====== -->