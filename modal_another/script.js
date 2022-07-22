$(document).on("click", "button", function() {
    const id = $(this).data('id');
    $('.details').removeClass('show');
    $(`.details[data-id=${id}]`).addClass('show');
});