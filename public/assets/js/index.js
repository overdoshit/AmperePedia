// Dark Mode Start
const storedTheme = localStorage.getItem('theme')

const getPreferredTheme = () => {
    if (storedTheme) {
        return storedTheme
    }
    return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
}

const setTheme = function(theme) {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.setAttribute('data-bs-theme', 'dark')
    } else {
        document.documentElement.setAttribute('data-bs-theme', theme)
    }
}

setTheme(getPreferredTheme())

window.addEventListener('DOMContentLoaded', () => {
    var el = document.querySelector('.theme-icon-active');
    if (el != 'undefined' && el != null) {
        const showActiveTheme = theme => {
            const activeThemeIcon = document.querySelector('.theme-icon-active use')
            const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
            const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

            document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                element.classList.remove('active')
            })

            btnToActive.classList.add('active')
            activeThemeIcon.setAttribute('href', svgOfActiveBtn)
        }

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (storedTheme !== 'light' || storedTheme !== 'dark') {
                setTheme(getPreferredTheme())
            }
        })

        showActiveTheme(getPreferredTheme())

        document.querySelectorAll('[data-bs-theme-value]')
            .forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value')
                    localStorage.setItem('theme', theme)
                    setTheme(theme)
                    showActiveTheme(theme)
                })
            })

    }
})
// Dark Mode End

// Toggle Password Visibility Start
function togglePasswordVisibility(inputId, iconId) {
    const input = document.getElementById(inputId);
    const toggleIcon = document.getElementById(iconId);

    if (input.type === "password") {
        input.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}
// Toggle Password Visibility End

// Password Strength Meter Start
function checkPasswordStrength(inputId, meterId, textId) {
    const password = document.getElementById(inputId).value;
    const meter = document.getElementById(meterId);
    const text = document.getElementById(textId);

    let strength = 0;
    if (password.length >= 8) {
        strength += 25;
    }
    if (/[a-z]/.test(password)) {
        strength += 25;
    }
    if (/[0-9]/.test(password)) {
        strength += 25;
    }
    if (/[A-Z]/.test(password)) {
        strength += 25;
    }

    meter.style.width = strength + "%";
    meter.setAttribute("aria-valuenow", strength);

    if (strength == 25) {
        meter.classList.remove("bg-info", "bg-warning", "bg-primary");
        meter.classList.add("bg-danger");
        text.textContent = "Weak Password";
    } else if (strength == 50) {
        meter.classList.remove("bg-info", "bg-danger", "bg-primary");
        meter.classList.add("bg-warning");
        text.textContent = "Medium Password";
    } else if (strength == 75) {
        meter.classList.remove("bg-info", "bg-warning", "bg-danger");
        meter.classList.add("bg-primary");
        text.textContent = "Strong Password";
    } else if (strength == 100) {
        meter.classList.remove("bg-warning", "bg-danger", "bg-primary");
        meter.classList.add("bg-info");
        text.textContent = "Very Strong Password";
    } else {
        meter.classList.remove("bg-info", "bg-warning", "bg-danger", "bg-primary");
        text.textContent = "";
    }
}
// Password Strength Meter End

document.addEventListener("DOMContentLoaded", function() {
    const loginModal = document.getElementById("loginModal");
    const loginSubmitButton = document.getElementById("loginSubmitButton");

    const registerModal = document.getElementById("registerModal");
    const newPasswordInput = document.getElementById("floatingNewPassword");
    const confirmPasswordInput = document.getElementById("floatingConfirmPassword");
    const registerSubmitButton = document.getElementById("registerSubmitButton");

    const updateProfileForm = document.getElementById("updateProfile");
    const updateProfileSubmitButton = document.getElementById("updateProfileSubmitButton");
    
    const updatePasswordForm = document.getElementById("updatePassword");
    const changePasswordInput = document.getElementById("changePassword");
    const confirmChangePasswordInput = document.getElementById("confirmChangePassword");
    const updatePasswordSubmitButton = document.getElementById("updatePasswordSubmitButton");

    let passwordsMatch = false;

    // Password Match Check Start
    function checkPasswordMatch(passwordInput, confirmPasswordInput) {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (!password || !confirmPassword) {
            passwordInput.classList.remove("border-danger", "border-success");
            confirmPasswordInput.classList.remove("border-danger", "border-success");
            passwordsMatch = false;
            return;
        }

        if (password === confirmPassword) {
            passwordInput.classList.remove("border-danger");
            passwordInput.classList.add("border-success");
            confirmPasswordInput.classList.remove("border-danger");
            confirmPasswordInput.classList.add("border-success");
            passwordsMatch = true;
        } else {
            passwordInput.classList.remove("border-success");
            passwordInput.classList.add("border-danger");
            confirmPasswordInput.classList.remove("border-success");
            confirmPasswordInput.classList.add("border-danger");
            passwordsMatch = false;
        }
    }

    if (newPasswordInput && confirmPasswordInput) {
        newPasswordInput.addEventListener("input", function() {
            checkPasswordMatch(newPasswordInput, confirmPasswordInput);
        });

        confirmPasswordInput.addEventListener("input", function() {
            checkPasswordMatch(newPasswordInput, confirmPasswordInput);
        });
    }

    if (changePasswordInput && confirmChangePasswordInput) {
        changePasswordInput.addEventListener("input", function() {
            checkPasswordMatch(changePasswordInput, confirmChangePasswordInput);
        });

        confirmChangePasswordInput.addEventListener("input", function() {
            checkPasswordMatch(changePasswordInput, confirmChangePasswordInput);
        });
    }
    // Password Match Check End

    // Email Regex Start
    function isValidEmail(email) {
		const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/;
		return emailPattern.test(email);
	}
    // Email Regex End

    // Field Check Start
    function checkFormCompletion(element) {
        const inputs = element.querySelectorAll("input, select, textarea");
        let allFilled = true;
        let emailValid = true;

        inputs.forEach((input) => {
            if (input.value.trim() === "") {
                allFilled = false;
            }

            if (input.type === "email" && !isValidEmail(input.value.trim())) {
				emailValid = false;
			}
        });

        if (element.id === "registerModal" && (!passwordsMatch || !emailValid)) {
            allFilled = false;
        }

        if (element.id === "loginModal" && !emailValid) {
            allFilled = false;
        }

        if (element.id === "updatePassword" && !passwordsMatch) {
            allFilled = false;
        }

        if (element.id === "loginModal") {
            loginSubmitButton.disabled = !allFilled;
        }

        if (element.id === "registerModal") {
            registerSubmitButton.disabled = !allFilled;
        }

        if (element.id === "updateProfile") {
            updateProfileSubmitButton.disabled = !allFilled;
        }

        if (element.id === "updatePassword") {
            updatePasswordSubmitButton.disabled = !allFilled;
        }
    }

    if (loginModal) {
        loginModal.addEventListener("input", function() {
            checkFormCompletion(loginModal);
        });
    }

    if (registerModal) {
        registerModal.addEventListener("input", function() {
            checkFormCompletion(registerModal);
        });
    }

    if (updateProfileForm) {
        updateProfileForm.addEventListener("input", function() {
            checkFormCompletion(updateProfileForm);
        });
    }

    if (updatePasswordForm) {
        updatePasswordForm.addEventListener("input", function() {
            checkFormCompletion(updatePasswordForm);
        });
    }

    if (loginSubmitButton) loginSubmitButton.disabled = true;
    if (registerSubmitButton) registerSubmitButton.disabled = true;
    if (updateProfileSubmitButton) updateProfileSubmitButton.disabled = true;
    if (updatePasswordSubmitButton) updatePasswordSubmitButton.disabled = true;
    // Field Check End

});

// Order History Start
document.addEventListener('DOMContentLoaded', function() {
    // Chevron Lihat Detail
    var seeDetails = document.querySelectorAll('.see-detail');
    seeDetails.forEach(function(button) {
        button.addEventListener('click', function() {
            var icon = this.querySelector('i');
            if (this.classList.contains('collapsed')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }
        });
    });
});
// Order History End

// Home Page Start
document.addEventListener('DOMContentLoaded', function() {
    const dropdownClientNumber = document.getElementById('dropdownClientNumber');
    const dropdownMenuClientNumber = document.getElementById('dropdownMenuClientNumber');
    const clientNumberInput = document.getElementById('clientNumber');
    const newClientNumberForm = document.getElementById('newClientNumberForm');
    const newCustomerNumber = document.getElementById('newCustomerNumber');
    const newClientNumberModal = new bootstrap.Modal(document.getElementById('newClientNumberModal'), {});

    if (dropdownMenuClientNumber) {
        dropdownMenuClientNumber.addEventListener('click', function(e) {
            if (e.target.matches('.dropdown-item')) {
                const value = e.target.getAttribute('data-value');
                const text = e.target.textContent.trim();
    
                if (value === 'addNew') {
                    newClientNumberModal.show();
                } else {
                    dropdownClientNumber.textContent = text;
                    clientNumberInput.value = value;
                }
            }
        });
    }

    newClientNumberForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const newNumber = newCustomerNumber.value.trim();
        if (newNumber) {
            const newOption = document.createElement('li');
            newOption.classList.add('dropdown-item');
            newOption.setAttribute('data-value', newNumber);
            newOption.textContent = newNumber;
            const divider = dropdownMenuClientNumber.querySelector('.dropdown-divider');
            dropdownMenuClientNumber.insertBefore(newOption, divider);

            newOption.addEventListener('click', function() {
                dropdownClientNumber.textContent = this.textContent;
                clientNumberInput.value = this.getAttribute('data-value');
            });

            dropdownClientNumber.textContent = newNumber;
            clientNumberInput.value = newNumber;
            newCustomerNumber.value = '';
            newClientNumberModal.hide();
        }
    });
});
// Home Page End
