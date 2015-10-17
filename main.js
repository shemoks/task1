$(document).on('submit', '#simpleNumbers', function (e) {
    e.preventDefault();
    var url = $(this).attr('action');
    sendData(url, 'returnedData');
});


function sendData(url, block) {
    $.ajax({
        url: url,
        type: 'post',
        data: $(this).serialize(),
        success: function (data) {
            $('#' + block).text('');
            $('#' + block).append(data);
        }
    });
}