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
                                                                <p class="mb-1 small text-muted">Nama Lengkap</p>
                                                                <p class="fw-semibold mb-1">John Doe</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Email</p>
                                                                <p class="fw-semibold mb-1">johndoe@gmail.com
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">No. Order</p>
                                                                <p class="fw-semibold mb-1">240711869549
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Tanggal Order</p>
                                                                <p class="fw-semibold mb-1">11 Jul 2024, 17:30 WIB
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
                                                                <p class="mb-1 small text-muted">Nama Pelanggan
                                                                </p>
                                                                <p class="fw-semibold mb-1">PT. Rebahan</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Nomor Pelanggan PLN
                                                                </p>
                                                                <p class="fw-semibold mb-1">787944321099</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Tarif / Daya Listrik
                                                                </p>
                                                                <p class="fw-semibold mb-1">R1 / 1300 VA</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Bulan / Tahun</p>
                                                                <p class="fw-semibold mb-1">Juli / 2024</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Meter Awal</p>
                                                                <p class="fw-semibold mb-1">100 KWh</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Meter Akhir</p>
                                                                <p class="fw-semibold mb-1">150 KWh</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Penggunaan</p>
                                                                <p class="fw-semibold mb-1">50 KWh</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Tagihan</p>
                                                                <p class="fw-semibold mb-1">Rp207.000</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Denda</p>
                                                                <p class="fw-semibold mb-1">Rp0</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Admin</p>
                                                                <p class="fw-semibold mb-1">Rp1.000</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Biaya Total</p>
                                                                <p class="fw-semibold mb-1">Rp208.000</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 small text-muted">Alamat Pelanggan</p>
                                                                <p class="fw-semibold mb-1">Jl. Merdeka No. 123, Jakarta
                                                                </p>
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

                            {{-- <div class="inner-container-small mx-auto text-center">
                                <!-- SVG image -->
                                <figure class="mb-3">
                                    <svg width="300" height="300" viewBox="0 0 2688 2058" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1"
                                            d="M603.663 2058C459.392 2018.13 248.68 1851.06 201.222 1718.16C151.866 1585.27 176.544 1429.59 263.866 1313.78C309.426 1253.02 372.07 1199.87 385.358 1127.72C402.443 1030.9 322.714 943.565 269.561 858.132C113.9 609.425 195.527 254.401 448.002 87.3308C586.578 -3.79839 780.205 -36.0733 922.578 51.2588C1038.37 123.403 1093.43 256.299 1201.63 336.037C1319.32 423.37 1482.58 436.659 1632.54 425.268C1782.51 413.877 1934.37 383.501 2084.34 400.587C2234.31 417.674 2389.97 497.412 2433.63 634.106C2482.98 787.886 2374.78 949.261 2380.48 1108.74C2384.27 1234.04 2454.51 1347.95 2517.15 1459.96C2579.8 1571.98 2634.85 1697.28 2604.48 1820.68C2574.1 1944.09 2433.63 2058 2241.9 2058"
                                            fill="#7A7D7C"></path>
                                        <path class="fill-primary"
                                            d="M1182.65 1887.13C1182.65 1936.49 1142.78 1978.26 1091.53 1978.26C1042.17 1978.26 1000.41 1938.39 1000.41 1887.13C1000.41 1837.77 1040.27 1796 1091.53 1796C1142.78 1796 1182.65 1837.77 1182.65 1887.13Z">
                                        </path>
                                        <path class="fill-white"
                                            d="M1129.49 1887.13C1129.49 1908.01 1112.41 1923.2 1093.43 1923.2C1072.55 1923.2 1057.36 1906.12 1057.36 1887.13C1057.36 1866.25 1074.44 1851.06 1093.43 1851.06C1112.41 1851.06 1129.49 1868.15 1129.49 1887.13Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M1854.65 1887.13C1854.65 1936.49 1814.78 1978.26 1763.53 1978.26C1714.17 1978.26 1672.41 1938.39 1672.41 1887.13C1672.41 1837.77 1712.27 1796 1763.53 1796C1814.78 1796 1854.65 1837.77 1854.65 1887.13Z">
                                        </path>
                                        <path class="fill-white"
                                            d="M1801.5 1887.13C1801.5 1908.01 1784.41 1923.2 1765.43 1923.2C1744.55 1923.2 1729.36 1906.12 1729.36 1887.13C1729.36 1866.25 1746.44 1851.06 1765.43 1851.06C1784.41 1851.06 1801.5 1868.15 1801.5 1887.13Z">
                                        </path>
                                        <path class="fill-mode"
                                            d="M835.258 858.129L937.766 1655.51H1930.58L2033.09 858.129H835.258ZM920.682 1148.6H1156.07L1176.95 1393.51H951.054L920.682 1148.6ZM1203.53 1148.6H1427.53V1393.51H1224.41L1203.53 1148.6ZM1427.53 1099.24H1199.73L1182.65 905.592H1427.53V1099.24ZM1476.88 905.592H1721.77L1704.68 1099.24H1476.88V905.592ZM1427.53 1440.98V1608.05H1241.5L1228.21 1440.98H1427.53ZM1476.88 1440.98H1676.21L1662.92 1608.05H1476.88V1440.98ZM1476.88 1393.51V1148.6H1700.88L1680 1393.51H1476.88ZM1748.34 1148.6H1943.87L1911.6 1393.51H1727.46L1748.34 1148.6ZM1754.04 1099.24L1771.12 905.592H1978.04L1953.36 1099.24H1754.04ZM1135.19 905.592L1152.27 1099.24H914.987L890.309 905.592H1135.19ZM956.749 1440.98H1178.85L1192.14 1608.05H979.529L956.749 1440.98ZM1710.38 1608.05L1723.66 1440.98H1907.8L1886.92 1608.05H1710.38Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M2025.5 920.781H878.919C858.038 920.781 840.953 903.694 840.953 882.81V880.912C840.953 860.028 858.038 842.941 878.919 842.941H2027.39C2048.28 842.941 2065.36 860.028 2065.36 880.912V882.81C2065.36 903.694 2048.28 920.781 2025.5 920.781Z">
                                        </path>
                                        <path class="fill-mode"
                                            d="M1913.5 1828.28H922.58C905.495 1828.28 890.309 1813.09 890.309 1796C890.309 1778.91 905.495 1763.73 922.58 1763.73H1913.5C1941.97 1763.73 1964.75 1740.94 1964.75 1712.47C1964.75 1683.99 1941.97 1661.21 1913.5 1661.21H958.648C943.461 1661.21 928.275 1649.81 926.376 1632.73L810.58 729.03H586.58C569.495 729.03 554.309 713.842 554.309 696.755C554.309 679.669 569.495 664.48 586.58 664.48H839.054C854.241 664.48 869.427 675.872 871.326 692.958L987.122 1596.66H1915.39C1978.04 1596.66 2029.29 1647.92 2029.29 1710.57C2027.39 1777.02 1976.14 1828.28 1913.5 1828.28Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M867.529 738.523H590.376C569.495 738.523 550.512 721.436 550.512 700.553C550.512 679.669 567.596 660.684 590.376 660.684H867.529C888.41 660.684 907.393 677.77 907.393 700.553C907.393 721.436 890.308 738.523 867.529 738.523Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M1137.09 920.781L1138.99 962.549H1188.34L1184.55 920.781H1137.09Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M2021.7 920.781H1974.24L1968.55 962.549H2017.9L2021.7 920.781Z"></path>
                                        <path class="fill-primary"
                                            d="M1474.99 920.781H1427.53V962.549H1474.99V920.781Z"></path>
                                        <path class="fill-primary"
                                            d="M1769.23 920.781H1719.87L1716.07 962.549H1765.43L1769.23 920.781Z">
                                        </path>
                                        <path class="fill-mode"
                                            d="M2240 1978.26H603.663C596.07 1978.26 588.477 1987.75 588.477 1999.15V2037.12C588.477 2048.51 596.07 2058 603.663 2058H2240C2247.6 2058 2255.19 2048.51 2255.19 2037.12V1999.15C2255.19 1987.75 2247.6 1978.26 2240 1978.26Z">
                                        </path>
                                        <path
                                            d="M2234.31 1687.79C2198.24 1687.79 2198.24 1742.84 2234.31 1742.84C2270.38 1742.84 2270.38 1687.79 2234.31 1687.79Z"
                                            class="fill-mode"></path>
                                        <path
                                            d="M2017.9 620.816C1995.12 620.816 1983.73 603.729 1983.73 586.642C1983.73 569.555 1995.12 552.469 2017.9 552.469C2027.39 552.469 2036.88 556.266 2042.58 563.86C2048.27 569.555 2050.17 579.048 2050.17 586.642C2050.17 603.729 2038.78 620.816 2017.9 620.816ZM2017.9 565.758C2004.61 565.758 1998.92 575.251 1998.92 586.642C1998.92 596.135 2004.61 607.526 2017.9 607.526C2023.59 607.526 2029.29 605.627 2033.09 601.83C2036.88 598.033 2038.78 592.338 2038.78 586.642C2036.88 575.251 2031.19 565.758 2017.9 565.758Z"
                                            class="fill-mode"></path>
                                        <path
                                            d="M858.035 391.094C821.967 391.094 821.967 446.151 858.035 446.151C894.103 446.151 894.103 391.094 858.035 391.094Z"
                                            class="fill-mode"></path>
                                        <path
                                            d="M653.017 1488.44C630.238 1488.44 618.848 1471.35 618.848 1454.27C618.848 1444.77 622.644 1437.18 626.441 1431.48C632.136 1423.89 641.627 1420.09 651.119 1420.09C673.899 1420.09 685.288 1437.18 685.288 1454.27C685.288 1463.76 681.492 1471.35 677.695 1477.05C672 1484.64 664.407 1488.44 653.017 1488.44ZM653.017 1433.38C639.729 1433.38 634.034 1442.88 634.034 1454.27C634.034 1463.76 639.729 1475.15 653.017 1475.15C666.305 1475.15 672 1465.66 672 1454.27C673.899 1442.88 666.305 1433.38 653.017 1433.38Z"
                                            class="fill-mode"></path>
                                        <path class="fill-primary"
                                            d="M2661.43 1123.93C2625.36 1123.93 2625.36 1178.98 2661.43 1178.98C2695.6 1178.98 2695.6 1123.93 2661.43 1123.93Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M1602.17 83.5352C1566.1 83.5352 1566.1 138.592 1602.17 138.592C1636.34 138.592 1636.34 83.5352 1602.17 83.5352Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M26.5782 618.918C-9.48961 618.918 -9.48961 673.975 26.5782 673.975C62.646 673.975 62.646 618.918 26.5782 618.918Z">
                                        </path>
                                        <path class="fill-primary"
                                            d="M96.8165 1955.48C60.7487 1955.48 60.7487 2010.53 96.8165 2010.53C130.986 2010.53 130.986 1955.48 96.8165 1955.48Z">
                                        </path>
                                    </svg>
                                </figure>

                                <!-- Subtitle -->
                                <h4 class="mb-5">Your order history is currently empty</h4>
                            </div> --}}

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
