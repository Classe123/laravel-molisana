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
