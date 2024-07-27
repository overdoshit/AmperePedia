<x-layout>
    <x-slot:title>Checkout · AmperePedia</x-slot:title>

    <section class="pt-xl-9">
        <div class="container">
            <div class="row">
                <!-- Left side START -->
                <div class="col-lg-8">
                    <!-- Electricity Information START -->
                    <div class="card bg-transparent mb-6">
                        <!-- Card header -->
                        <div
                            class="card-header bg-transparent border-bottom d-flex justify-content-between align-items-center px-0">
                            <h5>Electricity Information</h5>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-0 pb-0">
                            <div class="row g-3">
                                <div class="col-12">
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
                                            <p class="mb-1 small text-muted">Alamat Pelanggan</p>
                                            <p class="fw-semibold mb-1">Jl. Merdeka No. 123, Jakarta
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Personal info END -->
                </div>
                <!-- Left side END -->

                <!-- Right side START -->
                <div class="col-lg-4 ps-xl-6">
                    <!-- Summary -->
                    <div class="card border p-4">
                        <!-- card header -->
                        <div class="card-header p-0 pb-3">
                            <h5 class="card-title mb-0">Ringkasan Pembayaran</h5>

                            <!-- Input -->
                            <form class="input-group mt-4">
                                <input type="text" class="form-control rounded me-1" placeholder="Promo Code">
                                <button type="button" class="btn btn-dark rounded-2 mb-0">Redeem</button>
                            </form>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-0 pb-3 mt-2">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Biaya Tagihan</span>
                                    <span class="heading-color fw-semibold mb-0">Rp207.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Biaya Denda</span>
                                    <span class="heading-color fw-semibold mb-0">Rp0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Biaya Admin</span>
                                    <span class="heading-color fw-semibold mb-0">Rp1.000</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer bg-transparent border-top p-0 pt-3">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="heading-color fw-normal">Total Tagihan</span>
                                <span class="h6 mb-0">Rp208.000</span>
                            </div>

                            <!-- Button -->
                            <div class="d-grid">
                                <a href="#" class="btn btn-lg btn-primary mb-0">Lanjut Pembayaran</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right side END -->
            </div>
        </div>
    </section>
</x-layout>
