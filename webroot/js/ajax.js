$(document).ready(function() {
    var csrfToken = $('meta[name="csrfToken"]').attr('content');

    $('#yourButton').click(function() {
        $.ajax({
            url: '/your-controller/your-action',
            type: 'POST',
            data: {
                _csrfToken: csrfToken, // Include CSRF token in the request data
                key1: 'value1',
                key2: 'value2'
            },
            success: function(response) {
                console.log('Success:', response);
            },
            error: function(xhr, status, error) {
                console.log('Error:', error);
            }
        });
    });
});
