// construction-project-form.js

$(function () {

    
    var projectConstructionForm = $('#create-construction-project-form');
    if (projectConstructionForm.length === 0) return;

    var $submitBtn = projectConstructionForm.find('button[type="submit"]');
    var csrfToken = $('meta[name="csrf-token"]').attr('content') || '';

    function showToast(type, message) {
        if (typeof Toastify === 'undefined') {
            console.error('Toastify is not loaded');
            alert(message);
            return;
        }

        var isSuccess = type === 'success';

        Toastify({
            text: message,
            duration: 5000,
            close: true,
            gravity: 'top',
            position: 'right',
            stopOnFocus: true,
            className: isSuccess ? 'bg-success text-white' : 'bg-danger text-white'
        }).showToast();
    }

    // Create Project Construction (Obra)
    projectConstructionForm.on('submit', function (e) {
        e.preventDefault();

        var url    = projectConstructionForm.attr('action') || window.location.href;
        var method = (projectConstructionForm.attr('method') || 'POST').toUpperCase();

        var formData = new FormData(this);

        console.log(formData);

        var originalText = '';
        if ($submitBtn.length) {
            originalText = $submitBtn.html();
            $submitBtn.prop('disabled', true).html('A guardar...');
        }

        $.ajax({
            url: url,
            type: method,
            data: formData,
            processData: false,      // IMPORTANT for FormData
            contentType: false,      // let browser set multipart/form-data
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (data) {
                var msg = (data && (data.message || data.success)) || 'Obra guardada com sucesso.';
                showToast('success', msg);

                if (data && data.redirect) {
                    window.location.href = data.redirect;
                }
            },
            error: function (xhr) {
                var msg = 'Erro ao guardar a obra.';

                if (xhr.responseJSON) {
                    msg = xhr.responseJSON.message
                        || xhr.responseJSON.error
                        || msg;
                }

                showToast('error', msg);
            },
            complete: function () {
                if ($submitBtn.length) {
                    $submitBtn.prop('disabled', false).html(originalText || 'Submit');
                }
            }
        });
    });

});
