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
    const nextStepWizard = document.getElementById("nextStepWizard");
    const nextStepButton = document.getElementById("nextStepButton");
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

    // Field Check Start
    function checkFormCompletion(element, step = null) {
        const inputs = element.querySelectorAll(step ? `#step${step} input, #step${step} select, #step${step} textarea` : 'input, select, textarea');
        let allFilled = true;

        inputs.forEach((input) => {
            if (input.value.trim() === "") {
                allFilled = false;
            }
        });

        if (element.id === "registerModal" && step === 1 && !passwordsMatch) {
            allFilled = false;
        }

        if (element.id === "loginModal") {
            loginSubmitButton.disabled = !allFilled;
        } else if (element.id === "registerModal") {
            if (step === 1) {
                nextStepWizard.disabled = !allFilled;
                nextStepButton.disabled = !allFilled;
            } else if (step === 2) {
                registerSubmitButton.disabled = !allFilled;
            }
        } else if (element.id === "updateProfile") {
            updateProfileSubmitButton.disabled = !allFilled;
        } else if (element.id === "updatePassword") {
            updatePasswordSubmitButton.disabled = !allFilled || !passwordsMatch;
        }
    }

    if (loginModal) {
        loginModal.addEventListener("input", function() {
            checkFormCompletion(loginModal);
        });
    }

    if (registerModal) {
        registerModal.addEventListener("input", function() {
            checkFormCompletion(registerModal, 1);
            checkFormCompletion(registerModal, 2);
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
    if (nextStepWizard) nextStepWizard.disabled = true;
    if (nextStepButton) nextStepButton.disabled = true;
    if (registerSubmitButton) registerSubmitButton.disabled = true;
    if (updateProfileSubmitButton) updateProfileSubmitButton.disabled = true;
    if (updatePasswordSubmitButton) updatePasswordSubmitButton.disabled = true;
    // Field Check End

});

// Register Modal Step by Step Start
function updateStepButtons(step) {
    const stepButtons = document.querySelectorAll('.step-btn');
    stepButtons.forEach(button => {
        if (parseInt(button.getAttribute('data-step')) === step) {
            button.classList.remove('btn-light');
            button.classList.add('btn-primary');
        } else {
            button.classList.remove('btn-primary');
            button.classList.add('btn-light');
        }
    });
}

function nextStep() {
    const step1Inputs = document.querySelectorAll('#step1 input');
    let allFilled = true;

    step1Inputs.forEach(input => {
        if (input.value.trim() === "") {
            allFilled = false;
        }
    });

    if (allFilled) {
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
        updateStepButtons(2);
    }
}

function prevStep() {
    document.getElementById('step2').style.display = 'none';
    document.getElementById('step1').style.display = 'block';
    updateStepButtons(1);
}
// Register Modal Step by Step End
