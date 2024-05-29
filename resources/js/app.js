import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const searchForm = document.getElementById("search-form");
if (searchForm) {
    const searchSelect = document.getElementById("search");
    searchSelect.addEventListener("change", () => {
        if (searchSelect.value !== "all") {
            searchForm.submit();
        }
    });
}
// const deleteSubmitButtons = document.querySelectorAll('.delete-button');

// deleteSubmitButtons.forEach((button) => {
//     button.addEventListener('click', (event) => {
//         event.preventDefault();

//         const dataTitle = button.getAttribute('data-item-title');

//         const modal = document.getElementById('deleteModal');

//         const bootstrapModal = new bootstrap.Modal(modal);
//         bootstrapModal.show();

//         const modalItemTitle = modal.querySelector('#modal-item-title');
//         modalItemTitle.textContent = dataTitle;

//         const buttonDelete = modal.querySelector('button.btn-primary');

//         buttonDelete.addEventListener('click', () => {
//             button.parentElement.submit();
//         })
//     })
// });
const deleteButton = document.getElementById("comicDelete");
if (deleteButton) {
    deleteButton.addEventListener("click", (e) => {
        e.preventDefault();
        const modale = document.getElementById("exampleModal");
        const myModal = new bootstrap.Modal(modale);
        myModal.show();
        const btnSave = modale.querySelector(".btn.btn-primary");
        //console.log(btnSave);
        btnSave.addEventListener("click", () => {
            deleteButton.parentElement.submit();
        });
    });
}
