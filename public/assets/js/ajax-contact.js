$(function() {

	// Get the form.
	var form = $('#contact-form');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
            if (response.sent) {
                alert('Pesan telah dikirimkan');
            } else {
                alert('Terjadi kesalahan, coba lagi')
            }
		})
		.fail(function(data) {
            alert('Terjadi kesalahan, coba beberapa saat lagi')
		});
	});

});
