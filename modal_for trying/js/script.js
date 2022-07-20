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