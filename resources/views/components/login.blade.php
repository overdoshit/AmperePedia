<!-- Login Modal START-->
<section class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-4" id="loginModalLabel">Masuk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form id="loginForm" action="" method="post">

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control rounded-3" id="floatingUsername" name="username"
                            autocomplete="username" placeholder="Username" required>
                        <label for="floatingUsername">Username <span class="required">*</span></label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control rounded-3" id="floatingPassword" name="password"
                            autocomplete="off" placeholder="Password" required>
                        <label for="floatingPassword">Password <span class="required">*</span></label>
                        <button type="button"
                            class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                            onclick="togglePasswordVisibility('floatingPassword', 'togglePassword')">
                            <i id="togglePassword" class="fas fa-eye cursor-pointer p-2"></i>
                        </button>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Masuk</button>
                    <div class="pb-2">
                        <small class="text-body-secondary mb-4">Belum punya akun?</small>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal"
                            style="font-size: 14px;">Daftar disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Login Modal END -->
