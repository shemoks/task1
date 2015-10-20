$(document).on('submit', '#simpleNumbers', function (e) {
    e.preventDefault();
    var url = $(this).attr('action');
    $.ajax({
        url: url,
        type: 'post',
        data: $(this).serialize(),
        success: function (data) {
            $('#returnedData').text('');
            $('#returnedData').append(data);
        }
    });
});