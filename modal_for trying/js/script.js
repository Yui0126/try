var modalOpenButton = document.getElementsByClassName("modal-open-button");
var modalOverlay = document.getElementById("modal-overlay");
var notScrollableModal = document.getElementById("modal-container-not-scrollable");
var scrollableModal = document.getElementById("modal-container-scrollable");
var modalClosebutton = document.getElementsByClassName("modal-container-close-button");
var topBtn = document.getElementById("page-top");



// create an array from the HTML button elements and add the eventListener to each item (button)
Array.from(modalOpenButton, button => button.addEventListener("click", event => {

    modalOverlay.classList.add("modal-overlay-visible");
    scrollableModal.classList.add("modal-container-visible");
    notScrollableModal.classList.remove("modal-container-visible")
    topBtn.remove();

}));

// function that closes modals and removed the overlay
const closeModal = () => {
    modalOverlay.classList.remove("modal-overlay-visible");
    scrollableModal.classList.remove("modal-container-visible");
    notScrollableModal.classList.remove("modal-container-visible");
}

// create an array from the HTML button elements and each button can close the modal
Array.from(modalClosebutton, button => button.addEventListener("click", closeModal));

// when clicking on the overlay, close the modal
modalOverlay.addEventListener("click", closeModal);


//some codes from the modal page
// $(document).on("click", "button", function() {
//     const id = $(this).data('id');
//     $('.modal_details').removeClass('modal_show');
//     $(`.modal_details[data-id=${id}]`).addClass('modal_show');
// });

// $('.modal-container').addClass('modal-overlay-visible');
// $(`.modal-container-content-scroll[data-id=${id}]`).addClass('modal-container-visible');
// });

// Use event delegation to listen to events from the buttons
// $(document).on('click', 'button', handleClick)

// function handleClick() {

//     // Grab the id from the button
//     const id = $(this).data('id');

//     // Remove all the `show` classes from the details elements
//     $('.details').removeClass('show');

//     // And then add that class back on to the details element
//     // that corresponds to the id
//     $(`.details[data-id=${id}]`).addClass('show');
// }

//original category-list
// $(function() {
//     $('.category-list li').click(function() {
//         const id = $(this).data('id');
//         $('.more_modal_details').removeClass('more_modal_show');
//         $(`.more_modal_details[data-id=${id}]`).addClass('more_modal_show');
//     });
// });