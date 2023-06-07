$(document).ready(function() {

    function checkValidity() {
      var nameInput = $('input[name="name"]');
      var usernameInput = $('input[name="username"]');
      var emailInput = $('input[name="email"]');
      var passwordInput = $('input[name="password"]');
      var confirmPasswordInput = $('input[name="password_confirmation"]');
      var termsInput = $('input[name="terms"]');
      var submitBtn = $('#submitBtn');
  
      if (
        nameInput.val().trim() !== '' &&
        usernameInput.val().trim() !== '' &&
        emailInput.val().trim() !== '' &&
        passwordInput.val().trim() !== '' &&
        confirmPasswordInput.val().trim() !== '' &&
        termsInput.prop('checked')
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
  
    function checkLogin() {
      var usernameInput = $('input[name="username"]');
      var emailInput = $('input[name="email"]');
      var passwordInput = $('input[name="password"]');
      var confirmPasswordInput = $('input[name="password_confirmation"]');
      var termsInput = $('input[name="terms"]');
      var submitBtn = $('#submitBtn');

      if (email.value.length < 5) {

        
      }
    }

    checkValidity();
  
    $('input[name="name"], input[name="username"], input[name="email"], input[name="password"], input[name="password_confirmation"], input[name="terms"]').on('input', checkValidity);
  });
  