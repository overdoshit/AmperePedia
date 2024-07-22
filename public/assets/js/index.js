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
    const newPasswordInput = document.getElementById("floatingNewPassword");
    const confirmPasswordInput = document.getElementById(
        "floatingConfirmPassword"
    );
    let passwordsMatch = false;

    // Password Match Check Start
    function checkPasswordMatch() {
        const newPassword = newPasswordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (!newPassword || !confirmPassword) {
            newPasswordInput.classList.remove(
                "border-danger",
                "border-success"
            );
            confirmPasswordInput.classList.remove(
                "border-danger",
                "border-success"
            );
            passwordsMatch = false;
            return;
        }

        if (newPassword === confirmPassword) {
            newPasswordInput.classList.remove("border-danger");
            newPasswordInput.classList.add("border-success");
            confirmPasswordInput.classList.remove("border-danger");
            confirmPasswordInput.classList.add("border-success");
            passwordsMatch = true;
        } else {
            newPasswordInput.classList.remove("border-success");
            newPasswordInput.classList.add("border-danger");
            confirmPasswordInput.classList.remove("border-success");
            confirmPasswordInput.classList.add("border-danger");
            passwordsMatch = false;
        }
    }

    newPasswordInput.addEventListener("input", checkPasswordMatch);
    confirmPasswordInput.addEventListener("input", checkPasswordMatch);
    // Password Match Check End

    // Field Check Start
    const loginModal = document.getElementById("loginModal");
    const registerModal = document.getElementById("registerModal");
    const loginSubmitButton = loginModal.querySelector('#loginModal button[type="submit"]');
    const registerSubmitButton = registerModal.querySelector('#registerModal button[type="submit"]');

    function checkFieldCompletion(modal, submitButton) {
        const inputs = modal.querySelectorAll("input, select, textarea");
        let allFilled = true;

        inputs.forEach((input) => {
            if (input.value.trim() === "") {
                allFilled = false;
            }
        });

        if (modal === registerModal && (!passwordsMatch)) {
            allFilled = false;
        }

        submitButton.disabled = !allFilled;
    }

    loginModal.addEventListener("input", function() {
        checkFieldCompletion(loginModal, loginSubmitButton);
    });

    registerModal.addEventListener("input", function() {
        checkFieldCompletion(registerModal, registerSubmitButton);
    });

    loginSubmitButton.disabled = true;
    registerSubmitButton.disabled = true;
    // Field Check End
});

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