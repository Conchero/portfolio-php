

const inputs = document.querySelectorAll("input");
const errorMessage = document.querySelectorAll(".error_message");

inputs.forEach((el, i) => {

    el.addEventListener("keyup", (e) => {

        console.log(e.target.value);
        if (el.minLength > 0 && e.target.value.length < el.minLength) {
            errorMessage[i].innerHTML = `Veuillez entrer au minimum ${el.minLength} caractére`;
        }
        else {
            errorMessage[i].innerHTML = ``;
        }

    })
})


