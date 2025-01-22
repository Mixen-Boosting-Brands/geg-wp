// Formulario + Validación
'use strict';
window.addEventListener('load', function () {
    // Get the messages div.
    var formMessages = $('#form-messages');

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('formulario-contacto');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');

            if (form.checkValidity() === true) {
                event.preventDefault();

                // To reset the appearance of the form
                form.classList.remove("was-validated");

                // Submit the form using AJAX
                $.ajax({
                    type: $(form).attr('method'),
                    url: $(form).attr('action'),
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        // Let's show a message to the user
                        $('#hold-on-a-sec').addClass('is-loading');
                    },
                    success: function (response) {
                        // Make sure that the formMessages div has the 'success' class.
                        $(form).removeClass('was-validated');
                        $(formMessages).removeClass('error');
                        $(formMessages).addClass('success');

                        // Set the message text.
                        $(formMessages).text(response);
                        console.log(response);

                        setTimeout(function () {
                            $(formMessages).remove();

                            // Clear the form.
                            $('#nombre').val('');
                            $('#empresa').val('');
                            $('#ciudad').val('');
                            $('#estado').val('');
                            $('#pais').val('');
                            $('#correo').val('');
                            $('#telefono').val('');
                            $('#mensaje').val('');
                            $('input[type=checkbox]').prop('checked',false); 
                        }, 5000);
                    },
                    error: function (response) {
                        // Make sure that the formMessages div has the 'error' class.
                        $('#hold-on-a-sec').removeClass('is-loading');
                        $(formMessages).removeClass('success');
                        $(formMessages).addClass('error');

                        // Set the message text.
                        $(formMessages).text(response);
                        console.log(response);

                        setTimeout(function () {
                            $(formMessages).remove();

                            // Clear the form.
                            $('#nombre').val('');
                            $('#empresa').val('');
                            $('#ciudad').val('');
                            $('#estado').val('');
                            $('#pais').val('');
                            $('#correo').val('');
                            $('#telefono').val('');
                            $('#mensaje').val('');
                            $('input[type=checkbox]').prop('checked',false); 
                        }, 5000);

                        // Set the message text.
                        if (response.responseText !== '') {
                            $(formMessages).text(response.responseText);
                        } else {
                            $(formMessages).text('Lo sentimos, algo salió mal, inténtalo de nuevo.');
                        }
                    },
                    complete: function () {
                        $('#hold-on-a-sec').removeClass('is-loading');
                    }
                });
            }
        }, false);
    });
}, false);