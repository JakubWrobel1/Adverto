$(document).ready(function() {
  
  function checkValidity() {
    var loginInput = $('input[name="login"]');
    var passwordInput = $('input[name="password"]');
    var submitBtn = $('#submitBtn');

    if (loginInput.val().trim() !== '' && passwordInput.val().trim() !== '') {
      submitBtn.prop('disabled', false);
      submitBtn.removeClass('mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold');
      submitBtn.addClass('mx-4 h-12 w-screen md:w-full hover:bg-[#0fabef] bg-blue-500 md:rounded-md text-xl text-white transition duration-700 transform hover:scale-95');
    } else {
      submitBtn.prop('disabled', true);
      submitBtn.removeClass('mx-4 h-12 w-screen md:w-full hover:bg-[#0fabef] bg-blue-500 md:rounded-md text-xl text-white transition duration-700 transform hover:scale-95');
      submitBtn.addClass('mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold');
    }
  }

  checkValidity();

  $('input[name="login"], input[name="password"]').on('input', checkValidity);
});