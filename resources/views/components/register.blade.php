<!-- Register Modal START -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-4" id="registerModalLabel">Daftar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    data-bs-toggle="tooltip" data-bs-title="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form id="registerForm" method="post">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control rounded-3 " id="floatingName" name="name"
                            autocomplete="name" placeholder="John Doe" required>
                        <label for="floatingName">Nama Lengkap <span class="required">*</span></label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="email" class="form-control rounded-3" id="floatingNewEmail" name="newEmail"
                            autocomplete="email" placeholder="johndoe@gmail.com" required>
                        <label for="floatingNewEmail">Email <span class="required">*</span></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingNewPassword"
                            name="newPassword" autocomplete="off" placeholder="Password"
                            oninput="checkPasswordStrength('floatingNewPassword', 'newPasswordStrengthMeter', 'newPasswordStrengthText')"
                            required>
                        <label for="floatingNewPassword">Password <span class="required">*</span></label>
                        <button type="button"
                            class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                            onclick="togglePasswordVisibility('floatingNewPassword', 'toggleNewPassword')"
                            data-bs-toggle="tooltip" data-bs-title="Show Password">
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
                        <label for="floatingConfirmPassword">Confirm Password <span class="required">*</span></label>
                        <button type="button"
                            class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                            onclick="togglePasswordVisibility('floatingConfirmPassword', 'toggleConfirmPassword')"
                            data-bs-toggle="tooltip" data-bs-title="Show Password">
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

                    <button type="submit" id="registerSubmitButton"
                        class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Daftar</button>

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
