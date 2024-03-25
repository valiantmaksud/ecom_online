
$(document).on('keyup', 'input[name="name"]', function () {
    $('input[name="slug"]').val($(this).val().toLowerCase().replace(/ /g, '-'));
});

$('select').each(function() {
    let selected = $(this).data('selected');

    if (typeof selected === "undefined") {
        return;
    }

    $(this).val(selected).prop('selected', 'selected')

})



$(".select2").select2({
    theme:'bootstrap-5',
    placeholder: "Select an option",
    allowClear: true
});