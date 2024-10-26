$(document).ready(function() {
    $('#registration-form').submit(function(event) {
        event.preventDefault(); // Prevent form submission
        let isValid = true;
        
        // Clear previous error messages
        $('#error-message').hide();
        $('input').css('border', '1px solid #ccc');

        // Email Validation
        const email = $('#email').val().trim();
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email === '' || !emailPattern.test(email)) {
            isValid = false;
            $('#email').css('border', '1px solid red');
            alert("Please enter a valid email address.");
        }

        // Username Validation
        const username = $('#username').val().trim();
        if (username.length < 3 || username.length > 20) {
            isValid = false;
            $('#username').css('border', '1px solid red');
            alert("Username must be between 3 and 20 characters.");
        }

        // Password Validation
        const password = $('#password').val();
        if (password.length < 6) {
            isValid = false;
            $('#password').css('border', '1px solid red');
            alert("Password must be at least 6 characters long.");
        }

        // Confirm Password Validation
        const confirmPassword = $('#confirm-password').val();
        if (password !== confirmPassword) {
            isValid = false;
            $('#confirm-password').css('border', '1px solid red');
            alert("Passwords do not match.");
        }

        // Final Check
        if (isValid) {
            // Submit the form if validation is successful
            this.submit();
        } else {
            $('#error-message').show();
        }
    });
});
