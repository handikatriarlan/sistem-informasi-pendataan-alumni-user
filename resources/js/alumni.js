$(document).ready(function () {
    $('#search-alumni, #filter-batch').on('input change', function () {
        var search = $('#search-alumni').val();
        var batch = $('#filter-batch').val();

        $('#loading').show();

        $.ajax({
            url: '/alumni/filter',
            method: 'GET',
            data: {
                search: search,
                batch: batch
            },
            success: function (response) {
                $('#alumni-list-body').html(response);
            },
            error: function () {
                alert('Something went wrong. Please try again.');
            },
            complete: function () {
                $('#loading').hide();
            }
        });
    });
});
