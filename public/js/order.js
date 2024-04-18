(function($) {
    $('#availableBtn').on('click', function() {
        var from = $('#from-date').val();
        var till = $('#till-date').val();
        var data = {
            'from-date': from,
            'till-date': till
        };

        if($(this).data('ignore')) {
            data['ignore'] = $(this).data('ignore');
        }

        $.ajax({
            url: $(this).data('url'),
            method: 'POST',
            data: data
        }).then(function (response) {
            if(response.available) {
                $('#result').html('<span class="bs-text-success">Camper is beschikbaar!</span>');
            } else {
                $('#result').html('<span class="bs-text-danger">Camper is niet beschikbaar!</span>');
            }
        }).fail(function (response) {
            $('#result').html(response.responseJSON.message);
        });
    });
})(jQuery);