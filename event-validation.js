// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      genre: "required",
      venue: "required",
      date: "required",
      summary: "required",
      /*email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      pass: {
        required: true,
        minlength: 5
      }*/
    },
    // Specify validation error messages
    messages: {
      name: "Please enter the event name",
      genre: "Please enter the genre",
      venue: "Please enter the venue",
      date: "Please enter the date",
      summary: {
        required: "Please enter the summary",
        maxlength: "The summary can't exceed 250 characters"
      },
      /*pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"*/
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});