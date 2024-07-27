<x-layout>
    <x-slot:title>AmperePedia</x-slot:title>

    <section id="bayar" class="position-relative pt-xl-9">
        <!-- SVG decoration START-->
        <div class="position-absolute top-0 start-0 ms-n7 d-none d-xl-block">
            <img src="assets/images/decoration-pattern-1.svg" alt="">
        </div>
        <div class="position-absolute top-0 end-0 me-n4 mt-n7">
            <img class="light-mode-item" src="assets/images/decoration-pattern-3.svg" style="opacity: 0.1" alt="">
            <img class="dark-mode-item" src="assets/images/decoration-pattern-4.svg" style="opacity: 0.1"
                alt="">
        </div>
        <!-- SVG decoration END-->

        <div class="container pt-4 pt-sm-5 text-center">
            <!-- Hero content START -->
            <span class="heading-color d-inline-block bg-light small rounded-3 px-3 py-2">
                <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Telegram-Animated-Emojis/main/Animals%20and%20Nature/High%20Voltage.webp"
                    alt="High Voltage" width="25" height="25">
                Listrik PLN
            </span>

            <!-- Title -->
            <h1 class="mt-3 lh-base">Tempat bayar listrik
                <span class="cd-headline clip big-clip is-full-width text-primary mb-0 d-block d-xxl-inline-block">
                    <span class="typed" data-type-text="Cepat&&Murah&&Aman&&Terpercaya"></span>
                </span>
            </h1>

            <!-- Lead -->
            <p class="lead text-body-secondary">Bayar tagihan listrik Anda tanpa ribet! Hanya dengan beberapa
                klik saja.</p>

            <!-- Input -->
            <form class="inner-container bg-body border rounded-3 position-relative p-2 mt-4 mt-md-5" id="orderForm"
                method="post" style="max-width: 600px;">
                <div class="input-group d-flex gap-2">
                    <div class="dropdown flex-grow-1">
                        <button class="btn dropdown-toggle w-100 d-flex justify-content-between align-items-center"
                            type="button" id="dropdownClientNumber" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Nomor Pelanggan
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownClientNumber"
                            id="dropdownMenuClientNumber">
                            <li class="dropdown-item" data-value="123456789012">123456789012</li>
                            <hr class="dropdown-divider">
                            <li class="dropdown-item text-primary" data-value="addNew">
                                <i class="fa-solid fa-plus me-1"></i>Tambahkan Baru
                            </li>
                        </ul>
                    </div>
                    <input type="hidden" name="clientNumber" id="clientNumber" required>
                    <button type="submit"
                        class="btn btn-primary rounded-3 mb-0 flex-grow-1 flex-md-grow-0">Bayar</button>
                </div>
            </form>

            <!-- Hero content END -->
        </div>
    </section>

    <section id="layanan" class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="inner-container text-center mb-4 mb-sm-5">
                <h2 class="mb-0">Layanan Kami</h2>
            </div>

            <!-- Service list START -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <i class="fa-duotone fa-phone fs-3 mb-4"
                                style="--fa-primary-color: #09b850; --fa-secondary-color: #c1edd3; --fa-secondary-opacity: 1;"></i>

                            <!-- Content -->
                            <h5 class="mb-3">Bantuan 24/7</h5>
                            <p>Pusat Dukungan Ramah & Membantu dengan siaga 24 Jam untuk bantuan Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <i class="fa-duotone fa-shield-halved fs-3 mb-4"
                                style="--fa-primary-color: #c1edd3; --fa-secondary-color: #09b850; --fa-secondary-opacity: 1;"></i>

                            <!-- Content -->
                            <h5 class="mb-3">Aman</h5>
                            <p>Data pelanggan terjamin perlindungan maksimal dengan sistem keamanan terbaik.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <i class="fa-duotone fa-circle-dollar fs-3 mb-4"
                                style="--fa-primary-color: #09b850; --fa-secondary-color: #c1edd3; --fa-secondary-opacity: 1;"></i>

                            <!-- Content -->
                            <h5 class="mb-3">Murah</h5>
                            <p>Biaya layanan paling murah dibandingkan dengan yang lain.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <i class="fa-duotone fa-stopwatch fs-3 mb-4"
                                style="--fa-primary-color: #09b850; --fa-secondary-color: #c1edd3; --fa-secondary-opacity: 1;"></i>

                            <!-- Content -->
                            <h5 class="mb-3">Cepat</h5>
                            <p>Proses pembayaran yang cepat tanpa harus menunggu lama.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <i class="fa-duotone fa-cart-shopping-fast fs-3 mb-4"
                                style="--fa-primary-color: #09b850; --fa-secondary-color: #c1edd3; --fa-secondary-opacity: 1;"></i>

                            <!-- Content -->
                            <h5 class="mb-3">Anti Ribet</h5>
                            <p>Hanya dengan beberapa klik saja, bayar tagihan listrik Anda dengan mudah.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <i class="fa-duotone fa-people-group fs-3 mb-4"
                                style="--fa-primary-color: #09b850; --fa-secondary-color: #c1edd3; --fa-secondary-opacity: 1;"></i>

                            <!-- Content -->
                            <h5 class="mb-3">Terpercaya</h5>
                            <p>Telah dipercaya oleh ribuan pelanggan dengan reputasi yang baik.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service list END -->
        </div>
    </section>

    <section id="faq" class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                    <!-- Accordion START -->
                    <div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button fw-semibold rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    Apa itu AmperePedia?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    AmperePedia adalah website yang memudahkan Anda untuk membayar tagihan listrik
                                    pascabayar dengan cepat, aman, dan terpercaya. Kami menyediakan layanan 24/7
                                    untuk memastikan kenyamanan dan kemudahan Anda dalam melakukan pembayaran
                                    listrik.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-2">
                                <button class="accordion-button fw-semibold rounded collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">
                                    Bagaimana cara membayar tagihan listrik di AmperePedia?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Untuk membayar tagihan listrik di AmperePedia, Anda cukup memasukkan nomor
                                    pelanggan Anda pada kolom yang tersedia, klik tombol "Bayar," dan ikuti
                                    langkah-langkah yang diberikan. Pembayaran Anda akan diproses secara instan.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-3">
                                <button class="accordion-button fw-semibold collapsed rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">
                                    Apakah data saya aman di AmperePedia?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Ya, keamanan data Anda adalah prioritas utama kami. Kami menggunakan teknologi
                                    enkripsi canggih untuk melindungi informasi pribadi dan pembayaran Anda dari
                                    akses yang tidak sah. Anda dapat bertransaksi dengan aman di platform kami.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-4">
                                <button class="accordion-button fw-semibold collapsed rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">
                                    Bagaimana cara menghubungi layanan pelanggan AmperePedia?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Jika Anda memiliki pertanyaan atau membutuhkan bantuan, Anda dapat menghubungi
                                    layanan pelanggan kami yang siap membantu Anda 24/7. Anda dapat menghubungi kami
                                    melalui kontak yang tertera paling bawah website. Tim kami akan dengan senang
                                    hati membantu Anda.
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item mb-3">
                            <div class="accordion-header font-base" id="heading-5">
                                <button class="accordion-button fw-semibold collapsed rounded" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">
                                    Apakah AmperePedia mendukung berbagai metode pembayaran?
                                </button>
                            </div>
                            <!-- Body -->
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body mt-3 pb-0">
                                    Ya, AmperePedia mendukung berbagai metode pembayaran, termasuk kartu kredit,
                                    kartu debit, transfer bank, QRIS, dan e-wallet. Kami terus berupaya untuk
                                    menambahkan metode pembayaran lainnya untuk kenyamanan Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion END -->
                </div>
            </div>
        </div>
    </section>
</x-layout>
