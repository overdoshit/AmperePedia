<!-- Register Modal START -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-4" id="registerModalLabel">Daftar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <button type="button" class="btn btn-primary btn-circle step-btn" data-step="1"
                                id="prevStepWizard" onclick="prevStep()">1</button>
                            <p><small>Account</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <button type="button" class="btn btn-light btn-circle step-btn" data-step="2"
                                id="nextStepWizard" onclick="nextStep()">2</button>
                            <p><small>Personal</small></p>
                        </div>
                    </div>
                </div>

                <form id="registerForm" method="post">
                    <!-- Step 1 -->
                    <div id="step1" class="step">
                        <h3 style="font-size: 10px; color: rgba(17, 17, 17, 0.5); margin-left: 2px;">STEP 1 OF 2</h3>
                        <h2 class="fw-bold mb-2 fs-5">Account</h2>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control rounded-3" id="floatingNewUsername"
                                name="newUsername" autocomplete="username" placeholder="johndoe" required>
                            <label for="floatingNewUsername">Username <span class="required">*</span></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingNewPassword"
                                name="newPassword" autocomplete="off" placeholder="Password"
                                oninput="checkPasswordStrength('floatingNewPassword', 'newPasswordStrengthMeter', 'newPasswordStrengthText')"
                                required>
                            <label for="floatingNewPassword">Password <span class="required">*</span></label>
                            <button type="button"
                                class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                                onclick="togglePasswordVisibility('floatingNewPassword', 'toggleNewPassword')">
                                <i id="toggleNewPassword" class="fas fa-eye cursor-pointer p-2"></i>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="progress flex-grow-1 me-2">
                                <div id="newPasswordStrengthMeter" class="progress-bar" role="progressbar"
                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <span id="newPasswordStrengthText" class="text-light"></span>
                                </div>
                            </div>
                            <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                data-bs-title="Password harus minimal 8 karakter, dapat terdiri dari huruf kecil, huruf besar dan angka."></i>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingConfirmPassword"
                                name="confirmPassword" autocomplete="off" placeholder="Confirm Password"
                                oninput="checkPasswordStrength('floatingConfirmPassword', 'confirmPasswordStrengthMeter', 'confirmPasswordStrengthText')"
                                required>
                            <label for="floatingConfirmPassword">Confirm Password <span
                                    class="required">*</span></label>
                            <button type="button"
                                class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                                onclick="togglePasswordVisibility('floatingConfirmPassword', 'toggleConfirmPassword')">
                                <i id="toggleConfirmPassword" class="fas fa-eye cursor-pointer p-2"></i>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="progress flex-grow-1 me-2">
                                <div id="confirmPasswordStrengthMeter" class="progress-bar" role="progressbar"
                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <span id="confirmPasswordStrengthText" class="text-light"></span>
                                </div>
                            </div>
                            <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                data-bs-title="Password harus minimal 8 karakter, dapat terdiri dari huruf kecil, huruf besar dan angka."></i>
                        </div>

                        <button type="button" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"
                            id="nextStepButton" onclick="nextStep()">Selanjutnya</button>
                    </div>

                    <!-- Step 2 -->
                    <div id="step2" class="step" style="display: none;">
                        <h3 style="font-size: 10px; color: rgba(17, 17, 17, 0.5); margin-left: 2px;">STEP 2 OF 2</h3>
                        <h2 class="fw-bold mb-2 fs-5">Personal</h2>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control rounded-3 " id="floatingName" name="name"
                                autocomplete="name" placeholder="John Doe" required>
                            <label for="floatingName">Nama <span class="required">*</span></label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="number" class="form-control rounded-3" id="floatingClientNumber"
                                name="clientNumber" autocomplete="clientNumber" placeholder="Nomor Pelanggan PLN"
                                required>
                            <label for="floatingClientNumber">Nomor Pelanggan PLN <span
                                    class="required">*</span></label>
                        </div>

                        <div class="form-floating mb-4">
                            <select class="form-control form-select rounded-3" id="floatingPower" name="power"
                                required>
                                <option value="" disabled selected>Pilih Daya Listrik</option>
                                <option value="1">450 VA</option>
                                <option value="2">900 VA</option>
                                <option value="3">1300 VA</option>
                                <option value="4">2200 VA</option>
                            </select>
                            <label for="floatingPower">Daya Listrik <span class="required">*</span></label>
                        </div>

                        <div class="form-floating mb-4">
                            <textarea class="form-control rounded-3" id="floatingAddress" name="address" placeholder="Alamat"
                                style="height: 100px;" rows="3" autocomplete="address" spellcheck="false" required></textarea>
                            <label for="floatingAddress">Alamat <span class="required">*</span></label>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <button type="button" class="btn btn-lg btn-secondary rounded-3 me-2 w-100"
                                onclick="prevStep()">Kembali</button>
                            <button type="submit" class="btn btn-lg btn-primary rounded-3 ms-2 w-100"
                                id="registerSubmitButton">Daftar</button>
                        </div>

                    </div>

                    <div class="pb-2">
                        <small class="text-body-secondary">Sudah punya akun?</small>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"
                            data-bs-dismiss="modal" style="font-size: 14px;">Masuk disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal END -->
