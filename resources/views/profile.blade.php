<x-layout>
    <x-slot:title>My Profile · AmperePedia</x-slot:title>

    <section class="pt-sm-7">
        <div class="container pt-3 pt-xl-7">
            <div class="row">
                <x-sidebar></x-sidebar>

                <!-- Main content -->
                <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                    <!-- Title and offcanvas button -->
                    <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                        <!-- Title -->
                        <h1 class="h3 mb-0">My profile</h1>

                        <!-- Advanced filter responsive toggler START -->
                        <button class="btn btn-primary d-lg-none flex-shrink-0 ms-2" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar"
                            aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i> Menu
                        </button>
                        <!-- Advanced filter responsive toggler END -->
                    </div>

                    <!-- Personal Information -->
                    <form id="updateProfile">
                        <div class="card bg-transparent p-0">
                            <!-- Card header -->
                            <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                <h6 class="mb-0">Personal Information</h6>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-0">
                                <div class="row g-4">
                                    <!-- Profile photo -->
                                    <div class="col-12">
                                        <label class="form-label">Profile picture</label>
                                        <div class="d-flex align-items-center">
                                            <label class="position-relative me-2">
                                                <!-- Avatar place holder -->
                                                <span class="avatar avatar-xl">
                                                    <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                                        src="assets/images/users/default.jpg" alt="User">
                                                </span>

                                                <!-- Remove btn -->
                                                <button class="uploadremove" data-bs-toggle="tooltip"
                                                    data-bs-title="Delete Image">
                                                    <i class="bi bi-x text-white"></i>
                                                </button>

                                                <!-- Change btn -->
                                                <button
                                                    class="btn btn-sm btn-round btn-primary position-absolute top-50 start-100 translate-middle mt-4 ms-n3"
                                                    data-bs-toggle="tooltip" data-bs-title="Change Image">
                                                    <i class="bi bi-pencil-square"></i>
                                                    {{-- <input type="file" class="d-none" id="profileImage"
                                                        name="profileImage"> --}}
                                                </button>
                                            </label>

                                            <p class="text-body-secondary mb-0" style="font-size: 13px">
                                                <i class="bi bi-info-circle-fill"></i>
                                                JPG/JPEG/PNG/GIF no bigger than 3 MB and 5000px width and height.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Full name -->
                                    <div class="col-12">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="name" value="John Doe"
                                            class="form-control rounded-3" autocomplete="name" placeholder="Full name"
                                            required>
                                    </div>

                                    <!-- Client Number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor Pelanggan PLN</label>
                                        <input type="number" name="clientNumber" value="0123456789"
                                            class="form-control rounded-3" autocomplete="off"
                                            placeholder="Nomor Pelanggan PLN" required disabled>
                                    </div>

                                    <!-- Power -->
                                    <div class="col-md-6">
                                        <label class="form-label">Daya Listrik</label>
                                        <select name="power" class="form-control form-select rounded-3" required
                                            disabled>
                                            <option value="2" disabled>Pilih Daya Listrik</option>
                                            <option value="1">450 VA</option>
                                            <option value="2" selected>900 VA</option>
                                            <option value="3">1300 VA</option>
                                            <option value="4">2200 VA</option>
                                        </select>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="address" class="form-control rounded-3" rows="3" autocomplete="address" spellcheck="false"
                                            placeholder="Address" required>BSD Sektor XIV Blok C1/1, Jl. Letnan Sutopo BSD Serpong, Kec.Serpong, Kota Tangerang Selatan, Banten 15311.</textarea>
                                    </div>

                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary mb-0"
                                            id="updateProfileSubmitButton">Save Changes</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Update password -->
                    <form id="updatePassword">
                        <div class="card bg-transparent p-0">
                            <!-- Card header -->
                            <div class="card-header bg-transparent border-bottom px-0">
                                <h6 class="mb-0">Update Password</h6>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-0">

                                <!-- Current password -->
                                <div class="mb-3">
                                    <label class="form-label">Current password</label>

                                    <div class="position-relative">
                                        <input type="password" class="form-control rounded-3" id="currentPassword"
                                            name="currentPassword" autocomplete="off"
                                            placeholder="Enter current password" required>
                                        <button type="button"
                                            class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                                            onclick="togglePasswordVisibility('currentPassword', 'toggleCurrentPassword')">
                                            <i id="toggleCurrentPassword" class="fas fa-eye cursor-pointer p-2"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Change password -->
                                <div class="mb-3">
                                    <label class="form-label">Enter new password</label>

                                    <div class="position-relative mb-2">
                                        <input type="password" class="form-control rounded-3" id="changePassword"
                                            name="changePassword" autocomplete="off" placeholder="Enter New password"
                                            oninput="checkPasswordStrength('changePassword', 'changePasswordStrengthMeter', 'changePasswordStrengthText')"
                                            required>
                                        <button type="button"
                                            class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                                            onclick="togglePasswordVisibility('changePassword', 'toggleChangePassword')">
                                            <i id="toggleChangePassword" class="fas fa-eye cursor-pointer p-2"></i>
                                        </button>
                                    </div>
                                    <div class="mb-3">
                                        <div class="progress">
                                            <div id="changePasswordStrengthMeter" class="progress-bar"
                                                role="progressbar" style="width: 0%;" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <span id="changePasswordStrengthText" class="text-light"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Confirm Change password -->
                                <div class="mb-3">
                                    <label class="form-label">Confirm new password</label>

                                    <div class="position-relative mb-2">
                                        <input type="password" class="form-control rounded-3"
                                            id="confirmChangePassword" name="confirmChangePassword"
                                            autocomplete="off" placeholder="Enter New password"
                                            oninput="checkPasswordStrength('confirmChangePassword', 'confirmChangePasswordStrengthMeter', 'confirmChangePasswordStrengthText')"
                                            required>
                                        <button type="button"
                                            class="btn position-absolute top-50 end-0 translate-middle-y p-0 me-2 border-0"
                                            onclick="togglePasswordVisibility('confirmChangePassword', 'toggleConfirmChangePassword')">
                                            <i id="toggleConfirmChangePassword"
                                                class="fas fa-eye cursor-pointer p-2"></i>
                                        </button>
                                    </div>
                                    <div class="mb-3">
                                        <div class="progress">
                                            <div id="confirmChangePasswordStrengthMeter" class="progress-bar"
                                                role="progressbar" style="width: 0%;" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <span id="confirmChangePasswordStrengthText"
                                                    class="text-light"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary mb-0"
                                        id="updatePasswordSubmitButton">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
</x-layout>
