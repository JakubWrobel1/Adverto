$(document).ready(function () {
    function togglePasswordVisibility() {
        var passwordInput = $('input[name="password"]');
        var toggleBtn = $("#toggleBtn");
        var eyeIcon = toggleBtn.find("i");

        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
            eyeIcon.removeClass("fa-eye");
            eyeIcon.addClass("fa-eye-slash");
        } else {
            passwordInput.attr("type", "password");
            eyeIcon.removeClass("fa-eye-slash");
            eyeIcon.addClass("fa-eye");
        }

        checkValidity();
    }

    $("#toggleBtn").on("click", function () {
        togglePasswordVisibility();
    });

    function validateName() {
        var nameInput = $('input[name="name"]');
        var nameValue = nameInput.val().trim();

        if (nameValue === "") {
            $("#nameError").text("Imię jest wymagane");
        } else if (!/^[a-zA-Z]+$/.test(nameValue)) {
            $("#usernameError").text("Imię zawiera niedozwolone znaki");
        } else {
            $("#nameError").text("");
        }
    }

    function validateUsername() {
        var usernameInput = $('input[name="username"]');
        var usernameValue = usernameInput.val().trim();

        // Sprawdzenie warunków walidacji dla nazwy użytkownika
        if (usernameValue === "") {
            $("#usernameError").text("Wpisz nazwę użytkownika");
        } else if (usernameValue.length < 3) {
            $("#usernameError").text(
                "Nazwa użytkownika musi zawierać co najmniej 3 znaki"
            );
        } else if (!/^[a-zA-Z0-9_.]+$/.test(usernameValue)) {
            $("#usernameError").text(
                "Nazwa użytkownika zawiera niedozwolone znaki"
            );
        } else if (/^\d/.test(usernameValue)) {
            $("#usernameError").text(
                "Nazwa użytkownika nie może zaczynać się od cyfry"
            );
        } else {
            $("#usernameError").text("");
        }
    }

    function validateEmail() {
        var emailInput = $('input[name="email"]');
        var emailValue = emailInput.val().trim();

        if (emailValue === "") {
            $("#emailError").text("Adres e-mail jest wymagany");
        } else if (!isValidEmail(emailValue)) {
            $("#emailError").text("To nie wygląda jak adres mailowy...");
        } else {
            $("#emailError").text("");
        }
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function validatePassword() {
        var passwordInput = $('input[name="password"]');
        var passwordValue = passwordInput.val().trim();

        if (passwordValue === "") {
            $("#passwordError").text("Hasło jest wymagane");
        } else if (passwordValue.length < 8) {
            $("#passwordError").text(
                "Hasło musi zawierać co najmniej 8 znaków"
            );
        } else if (
            !/[a-z]/.test(passwordValue) ||
            !/[A-Z]/.test(passwordValue) ||
            !/[0-9]/.test(passwordValue)
        ) {
            $("#passwordError").text(
                "Hasło musi zawierać co najmniej jedną małą literę, jedną dużą literę i jedną cyfrę"
            );
        } else {
            $("#passwordError").text("");
        }
    }

    function checkValidity() {
        var nameInput = $('input[name="name"]');
        var usernameInput = $('input[name="username"]');
        var emailInput = $('input[name="email"]');
        var passwordInput = $('input[name="password"]');
        var submitBtn = $("#submitBtn");

        if (
            nameInput.val().trim() !== "" &&
            usernameInput.val().trim() !== "" &&
            emailInput.val().trim() !== "" &&
            passwordInput.val().trim() !== ""
        ) {
            submitBtn.prop("disabled", false);
            submitBtn.removeClass(
                "mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold"
            );
            submitBtn.addClass(
                "mx-4 h-12 w-screen md:w-full hover:bg-[#0fabef] bg-blue-500 md:rounded-md text-xl text-white transition duration-700 transform hover:scale-95"
            );
        } else {
            submitBtn.prop("disabled", true);
            submitBtn.removeClass(
                "mx-4 h-12 w-screen md:w-full hover:bg-[#0fabef] bg-blue-500 md:rounded-md text-xl text-white transition duration-700 transform hover:scale-95"
            );
            submitBtn.addClass(
                "mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold"
            );
        }
    }

    $('input[name="name"]').on("input", function () {
        validateName();
        checkValidity();
    });
    $('input[name="username"]').on("input", function () {
        validateUsername();
        checkValidity();
    });
    $('input[name="email"]').on("input", function () {
        validateEmail();
        checkValidity();
    });
    $('input[name="password"]').on("input", function () {
        validatePassword();
        checkValidity();
    });
});
