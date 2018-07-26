$(document).ready(function () {
    //Insert CSRF-TOKEN
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    //Change limit
    $('select.change-limit').on('change', function () {
        var val = $(this).find('option:selected').attr('data-link');
        window.location.href = val;
    })

    $('.select2').select2();
});