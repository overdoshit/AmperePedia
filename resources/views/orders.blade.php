<x-layout>
    <x-slot:title>My Orders · AmperePedia</x-slot:title>

    <section class="pt-sm-7">
        <div class="container pt-3 pt-xl-7">
            <div class="row">
                <x-sidebar></x-sidebar>

                <!-- Main content -->
                <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                    <!-- Title and offcanvas button -->
                    <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                        <!-- Title -->
                        <h1 class="h3 mb-0">Order history</h1>

                        <!-- Advanced filter responsive toggler START -->
                        <button class="btn btn-primary d-lg-none flex-shrink-0 ms-2" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar"
                            aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i> Menu
                        </button>
                        <!-- Advanced filter responsive toggler END -->
                    </div>

                    <div class="card bg-transparent">
                        <!-- Card header -->
                        <div
                            class="card-header bg-transparent border-bottom d-flex justify-content-between align-items-center p-0 pb-3">
                            <h6 class="card-title mb-0">Your Orders</h6>
                            <div class="col-md-3 ms-auto">
                                <!-- Short by filter -->
                                <form>
                                    <select class="form-select js-choice" aria-label=".form-select-sm">
                                        <option disabled>Sort by</option>
                                        <option selected>All</option>
                                        <option>Delivered</option>
                                        <option>Processing</option>
                                        <option>Cancelled</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-0 pt-5">
                            <!-- Product item START -->
                            <div class="row align-items-md-center">
                                <div class="col-12 col-md-12">
                                    <div class="row g-3 align-items-center">
                                        <!-- Content -->
                                        <div class="col-md-8 mb-3 mb-md-0">
                                            <p class="text-primary fw-bold small mb-2">#240711869549</p>
                                            <h6 class="mb-2">Listrik Pasca Bayar No. Pelanggan 787944321099</h6>
                                            <!-- List -->
                                            <ul class="nav small align-items-center mb-2">
                                                <li class="nav-item fw-bold">11 Jul 2024, 17:30 WIB</li>
                                            </ul>
                                            <a href="#details240711869549" class="fw-normal small see-detail"
                                                data-bs-toggle="collapse" aria-expanded="true"
                                                aria-controls="timeline240711869549">
                                                Lihat Detail <i class="fas ms-1 fa-chevron-down"></i>
                                            </a>
                                        </div>

                                        <!-- Price and button -->
                                        <div class="col-md-4 text-md-end ms-auto mb-3">
                                            <p class="text-primary fw-semibold mb-1 mb-md-1">
                                                <i class="fa-solid fa-circle-check me-1"></i>
                                                Selesai
                                            </p>
                                            <small>Total</small>
                                            <h5 class="mt-1 mb-0">Rp208.000</h5>
                                        </div>

                                        <div class="collapse" id="details240711869549">
                                            <div class="detailInfo">
                                                <!-- Customer Information START -->
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <h6 class="fw-bold">Customer Information</h6>
                                                        <div class="row g-2">
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Nama Pelanggan</p>
                                                                <p class="fw-semibold mb-1">John Doe</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Alamat</p>
                                                                <p class="fw-semibold mb-1">Jl. Merdeka No. 123, Jakarta
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Customer Information END -->

                                                <!-- Electricity Information START -->
                                                <div class="row g-3 mt-3">
                                                    <div class="col-12">
                                                        <h6 class="fw-bold">Electricity Information</h6>
                                                        <div class="row g-2">
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Nomor Pelanggan PLN
                                                                </p>
                                                                <p class="fw-semibold mb-1">787944321099</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Daya Listrik</p>
                                                                <p class="fw-semibold mb-1">900 VA</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Bulan / Tahun</p>
                                                                <p class="fw-semibold mb-1">Juli 2024</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Tagihan</p>
                                                                <p class="fw-semibold mb-1">Rp207.000</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Admin</p>
                                                                <p class="fw-semibold mb-1">Rp1.000</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Total</p>
                                                                <p class="fw-semibold mb-1">Rp208.000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Electricity Information END -->

                                                <!-- Order Timelines START -->
                                                <div class="row g-3 mt-3">
                                                    <div class="col-12">
                                                        <h6 class="fw-bold mb-3">Order Timelines</h6>
                                                        <div class="timeline">
                                                            <div class="timeline-item">
                                                                <div class="timeline-date">11 Jul 2024, 17:31 WIB</div>
                                                                <div class="timeline-circle active"></div>
                                                                <div class="timeline-content">
                                                                    <div class="status">Transaksi Selesai</div>
                                                                    <div class="detail-status">
                                                                        Pesanan Anda telah berhasil diproses dan selesai
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item">
                                                                <div class="timeline-date">11 Jul 2024, 17:31 WIB</div>
                                                                <div class="timeline-circle"></div>
                                                                <div class="timeline-content">
                                                                    <div class="status">Pembayaran Terverifikasi</div>
                                                                    <div class="detail-status">
                                                                        Pembayaran Anda telah berhasil diverifikasi.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item">
                                                                <div class="timeline-date">11 Jul 2024, 17:30 WIB</div>
                                                                <div class="timeline-circle"></div>
                                                                <div class="timeline-content">
                                                                    <div class="status">Menunggu Pembayaran</div>
                                                                    <div class="detail-status">
                                                                        Kami sedang menunggu Anda melakukan pembayaran.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item">
                                                                <div class="timeline-date">11 Jul 2024, 17:30 WIB</div>
                                                                <div class="timeline-circle"></div>
                                                                <div class="timeline-content">
                                                                    <div class="status">Pesanan Dibuat</div>
                                                                    <div class="detail-status">
                                                                        Anda telah membuat pesanan ini.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Order Timelines END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product item END -->

                            <hr class="my-5"> <!-- Divider -->
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent text-end p-0">
                                <!-- Pagination -->
                                <ul
                                    class="pagination pagination-primary-soft list-unstyled d-flex justify-content-sm-end flex-wrap mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </section>
</x-layout>
