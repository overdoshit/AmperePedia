<!-- Add Client Number Modal START -->
<section class="modal fade" id="newClientNumberModal" tabindex="-1" aria-labelledby="newClientNumberModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-4" id="newClientNumberModalLabel">Tambahkan No. Pelanggan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    data-bs-toggle="tooltip" data-bs-title="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form id="newClientNumberForm" method="post">

                    <div class="form-floating mb-4">
                        <input type="number" class="form-control rounded-3" id="newCustomerNumber" name="clientNumber"
                            autocomplete="clientNumber" placeholder="0123456789012" required>
                        <label for="newCustomerNumber">Nomor Pelanggan <span class="required">*</span></label>
                        <i class="fa-solid fa-circle-info position-absolute top-50 end-0 translate-middle-y p-2 me-2"
                            data-bs-toggle="tooltip" data-bs-title="12 Digit Nomor Pelanggan PLN"></i>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <button type="button" class="btn btn-lg btn-secondary rounded-3 me-2 w-100"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-lg btn-primary rounded-3 ms-2 w-100"
                            id="newClientNumberSubmitButton">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Add Client Number Modal End -->
