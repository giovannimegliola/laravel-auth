import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);


const buttons = document.querySelectorAll('.cancel-button');
//console.log(buttons);

buttons.forEach((button) => {
    button.addEventListener("click", (event)=>{

        event.preventDefault();

        const dataTitle = button.getAttribute("data-item-title");

        const modal = document.getElementById("deleteModal");

        const bootstrapModal = new bootstrap.Modal(modal);

        bootstrapModal.show();

        const title = modal.querySelector("#modal-item-title");

        title.textContent = dataTitle;

        const buttonDelete = modal.querySelector("button.btn-primary");

        buttonDelete.addEventListener('click', (event) => {
            button.parentElement.submit();

        });

    });
});
