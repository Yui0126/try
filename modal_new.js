//yui
//for opening modal
//category-list
$(function() {
    $('.category-list li').click(function() {
        const id = $(this).data('id');
        $('.modal-overlay').addClass('modal-overlay-visible');
        $('#modal-container-scrollable').addClass('modal-container-visible');
        $('.modal-container-title').addClass('modal-nonvisible');
        $(`.modal-container-title[data-id=${id}]`).addClass('modal-visible');
        $('.modal-container-content-scroll').addClass('modal-nonvisible');
        $(`.modal-container-content-scroll[data-id=${id}]`).addClass('modal-visible');
    });
});



//countries
$(function() {
    $('.region-box li').click(function() {
        const id = $(this).data('id');
        $('.modal-overlay').addClass('modal-overlay-visible');
        $('#modal-container-scrollable').addClass('modal-container-visible');
        $('.modal-container-title').addClass('modal-nonvisible');
        $(`.modal-container-title[data-id=${id}]`).addClass('modal-visible');
        $('.modal-container-content-scroll').addClass('modal-nonvisible');
        $(`.modal-container-content-scroll[data-id=${id}]`).addClass('modal-visible');
    });
});

//closing modals
$(function() {
    $('.modal-overlay').click(function() {
        $('.modal-overlay').removeClass('modal-overlay-visible');
        $('#modal-container-scrollable').removeClass('modal-container-visible');
        $(`.modal-container-content-scroll`).removeClass('modal-visible');
        $(`.modal-container-title`).removeClass('modal-visible');
    });
});

$(function() {
    $('.modal-container-close-button').click(function() {
        $('.modal-overlay').removeClass('modal-overlay-visible');
        $('#modal-container-scrollable').removeClass('modal-container-visible');
        $(`.modal-container-content-scroll`).removeClass('modal-visible');
        $(`.modal-container-title`).removeClass('modal-visible');
    });
});