// Use event delegation to listen to events from the buttons
$(document).on('click', 'button', handleClick)

function handleClick() {

    // Grab the id from the button
    const id = $(this).data('id');

    // Remove all the `show` classes from the details elements
    $('.details').removeClass('show');

    // And then add that class back on to the details element
    // that corresponds to the id
    $(`.details[data-id=${id}]`).addClass('show');
}