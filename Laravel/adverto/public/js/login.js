$(document).ready(function() {

  function togglePasswordVisibility() {
    var passwordInput = $('input[name="password"]');
    var toggleBtn = $('#toggleBtn');
    var eyeIcon = toggleBtn.find('i');

    if (passwordInput.attr('type') === 'password') {
      passwordInput.attr('type', 'text');
      eyeIcon.removeClass('fa-eye');
      eyeIcon.addClass('fa-eye-slash');
    } else {
      passwordInput.attr('type', 'password');
      eyeIcon.removeClass('fa-eye-slash');
      eyeIcon.addClass('fa-eye');
    }

    checkValidity();
  }

  $('#toggleBtn').on('click', function() {
    togglePasswordVisibility();
  });

  function validateLogin() {
    var loginInput = $('input[name="login"]');
    var loginValue = loginInput.val().trim();

    // Sprawdzenie warunków walidacji dla nazwy użytkownika
    if (loginValue === '') {
      $('#loginError').text('Wprowadź login/e-mail');
    } else if (loginValue.length < 3) {
      $('#loginError').text('Twój login ma na pewno więcej niż 3 znaki...');
    } else {
      $('#loginError').text('');
    }
  }

  function validatePassword() {
    var passwordInput = $('input[name="password"]');
    var passwordValue = passwordInput.val().trim();

    if (passwordValue === '') {
      $('#passwordError').text('Wprowadź hasło');
    } else if (passwordValue.length < 8) {
      $('#passwordError').text('Masz pewność co do hasła? Jest zbyt krótkie');
    } else {
      $('#passwordError').text('');
    }
  }

  function checkValidity() {
    var loginInput = $('input[name="login"]');
    var passwordInput = $('input[name="password"]');
    var submitBtn = $('#submitBtn');

    if (
      nameInput.val().trim() !== '' &&
      loginInput.val().trim() !== '' &&
      emailInput.val().trim() !== '' &&
      passwordInput.val().trim() !== ''
    ) {
      submitBtn.prop('disabled', false);
      submitBtn.removeClass(
        'mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold'
      );
      submitBtn.addClass(
        'mx-4 h-12 w-screen md:w-full hover:bg-[#0fabef] bg-blue-500 md:rounded-md text-xl text-white transition duration-700 transform hover:scale-95'
      );
    } else {
      submitBtn.prop('disabled', true);
      submitBtn.removeClass(
        'mx-4 h-12 w-screen md:w-full hover:bg-[#0fabef] bg-blue-500 md:rounded-md text-xl text-white transition duration-700 transform hover:scale-95'
      );
      submitBtn.addClass(
        'mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold'
      );
    }
  }

  $('input[name="name"]').on('input', function() {
    validateName();
    checkValidity();
  });
  $('input[name="login"]').on('input', function() {
    validateLogin();
    checkValidity();
  });
  $('input[name="email"]').on('input', function() {
    validateEmail();
    checkValidity();
  });
  $('input[name="password"]').on('input', function() {
    validatePassword();
    checkValidity();
  });
});